<?php

namespace PaymentBundle\Manager;

use AccountBundle\Entity\AccountEntity;
use AccountBundle\Entity\AccountEntityRepository;
use AccountBundle\Exception\AccountNotFoundException;
use PaymentBundle\Exception\InvalidBalanceException;
use PaymentBundle\Model\Payment;
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
    public function getAllPayments(): array
    {
        return $this->paymentRepository->findAllOrderByIdDesc();
    }

    /**
     * Execute transaction. Write payments to db and update the balances of accounts.
     *
     * @param Payment $payment
     *
     * @return void
     */
    public function createPayment(Payment $payment): void
    {
        $fromAccount = $payment->getAccount();

        $accountEntityFrom = $this->accountRepository->findOneBy(['id' => $fromAccount]);

        if (!$accountEntityFrom instanceof AccountEntity) {
            throw new AccountNotFoundException(sprintf("Account %s does not exits.", $fromAccount));
        }

        $amount = $payment->getAmount();
        $balanceFrom = $accountEntityFrom->getBalance();

        if ($balanceFrom < $amount) {
            throw new InvalidBalanceException(
                sprintf(
                    'Not enough founds in account %s to preform this transaction',
                    $accountEntityFrom->getId()
                )
            );
        }

        $toAccount = $payment->getToAccount();

        $accountEntityTo = $this->accountRepository->find($toAccount);

        if (!$accountEntityTo instanceof AccountEntity) {
            throw new AccountNotFoundException(sprintf("Account %s does not exits.", $toAccount));
        }

        $this->create($fromAccount, $amount, $toAccount, 'outgoing');

        $this->create($toAccount, $amount, $fromAccount, 'incoming');

        $this->update($accountEntityFrom, $balanceFrom - $amount);

        $balanceTo = $accountEntityTo->getBalance();

        $this->update($accountEntityTo, $balanceTo + $amount);
    }

    private function create(string $fromAccount, float $amount, string $toAccount, string $direction)
    {
        $outgoingPaymentEntity = new PaymentEntity($fromAccount, $amount, $toAccount, $direction);
        $this->paymentRepository->create($outgoingPaymentEntity);
    }

    private function update(AccountEntity $accountEntity, float $balance)
    {
        $accountEntity->updateBalance($balance);
        $this->accountRepository->update($accountEntity);
    }
}