<?php

namespace PaymentBundle\Manager;

use AccountBundle\Entity\AccountEntity;
use AccountBundle\Entity\AccountEntityRepository;
use PaymentBundle\Dto\Payment;
use PaymentBundle\Entity\PaymentEntity;
use PaymentBundle\Entity\PaymentEntityRepository;

class PaymentEntityManager
{
    /**
     * @var PaymentEntityRepository
     */
    private $paymentRepository;

    /**
     * @var AccountEntityRepository
     */
    private $accountRepository;

    /**
     * PaymentEntityManager constructor.
     *
     * @param PaymentEntityRepository $paymentRepository
     * @param AccountEntityRepository $accountRepository
     */
    public function __construct(
        PaymentEntityRepository $paymentRepository,
        AccountEntityRepository $accountRepository
    ) {
        $this->paymentRepository = $paymentRepository;
        $this->accountRepository = $accountRepository;
    }

    /**
     * Return the list of all payments order by id DESC
     *
     * @return array
     */
    public function getAllPayments()
    {
        return $this->paymentRepository->findAllOrderByIdDesc();
    }

    /**
     * Execute transaction. Write payments to db and update the balances of accounts.
     *
     * @param Payment $payment
     */
    public function createPayment(Payment $payment)
    {
        $accountEntityFrom = $this->accountRepository->findOneBy(['id' => $payment->getAccount()]);

        if (!$accountEntityFrom instanceof AccountEntity) {
            throw new \RuntimeException(sprintf("Account %s does not exits.", $payment->getAccount()));
        }

        if ($accountEntityFrom->getBalance() < $payment->getAmount()) {
            throw new \RuntimeException('Not enough founds to preform this transaction');
        }

        $accountEntityTo = $this->accountRepository->findOneBy(['id' => $payment->getToAccount()]);

        if (!$accountEntityTo instanceof AccountEntity) {
            throw new \RuntimeException(sprintf("Account %s does not exits.", $payment->getToAccount()));
        }

        $outgoingPaymentEntity = new PaymentEntity($payment->getAccount(), $payment->getAmount(), $payment->getToAccount(), 'outgoing');
        $this->paymentRepository->create($outgoingPaymentEntity);

        $incomingPaymentEntity = new PaymentEntity($payment->getToAccount(), $payment->getAmount(), $payment->getAccount(), 'incoming');
        $this->paymentRepository->create($incomingPaymentEntity);

        $accountEntityFrom->updateBalance($accountEntityFrom->getBalance() - $payment->getAmount());
        $this->accountRepository->update($accountEntityFrom);

        $accountEntityTo->updateBalance($accountEntityTo->getBalance() + $payment->getAmount());
        $this->accountRepository->update($accountEntityTo);
    }
}