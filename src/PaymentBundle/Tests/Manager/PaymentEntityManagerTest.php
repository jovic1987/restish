<?php

namespace PaymentBundle\Tests\Manager;


use AccountBundle\Entity\AccountEntity;
use AccountBundle\Entity\AccountEntityRepository;
use PaymentBundle\Entity\PaymentEntity;
use PaymentBundle\Entity\PaymentEntityRepository;
use PaymentBundle\Manager\PaymentEntityManager;
use PaymentBundle\Model\Payment;
use PHPUnit\Framework\TestCase;

class PaymentEntityManagerTest extends TestCase
{
    /**
     * @var PaymentEntityManager
     */
    private $manager;

    /**
     * @var PaymentEntityRepository
     */
    private $paymentRepository;

    /**
     * @var AccountEntityRepository
     */
    private $accountRepository;

    /**
     * @var PaymentEntity
     */
    private $paymentEntity;

    /**
     * @var AccountEntity
     */
    private $accountEntity;

    /**
     * @var AccountEntity
     */
    private $accountEntity1;

    /**
     * @var Payment
     */
    private $payment;

    public function setUp(): void
    {
        $this->paymentRepository = $this->createMock(PaymentEntityRepository::class);
        $this->accountRepository = $this->createMock(AccountEntityRepository::class);
        $this->accountEntity = $this->createMock(AccountEntity::class);
        $this->accountEntity1 = $this->createMock(AccountEntity::class);
        $this->paymentEntity = $this->createMock(PaymentEntity::class);
        $this->payment = $this->createMock(Payment::class);
        $this->manager = new PaymentEntityManager($this->paymentRepository, $this->accountRepository);
    }

    public function tearDown(): void
    {
        $this->manager  = null;
        $this->paymentRepository = null;
        $this->accountRepository = null;
        $this->paymentEntity = null;
        $this->accountEntity = null;
        $this->payment = null;
        $this->accountEntity = null;
        $this->accountEntity1 = null;
    }

    public function testGetAllPayments()
    {
        $this->paymentRepository
            ->expects($this->once())
            ->method('findAllOrderByIdDesc')
            ->willReturn([$this->paymentEntity]);

        $result = $this->manager->getAllPayments();

        $this->assertNotEmpty($result);
        $this->assertContainsOnlyInstancesOf(PaymentEntity::class, $result);
    }

    public function testCreatePayment()
    {
        $this->payment
            ->expects($this->once())
            ->method('getAccount')
            ->willReturn('bob');

        $this->accountRepository
            ->expects($this->once())
            ->method('findOneBy')
            ->with(['id' => 'bob'])
            ->willReturn($this->accountEntity);

        $this->payment
            ->expects($this->once())
            ->method('getAmount')
            ->willReturn('10.02');

        $this->accountEntity
            ->expects($this->once())
            ->method('getBalance')
            ->willReturn('100');

        $this->accountEntity1
            ->expects($this->once())
            ->method('getBalance')
            ->willReturn('20');

        $this->payment
            ->expects($this->once())
            ->method('getToAccount')
            ->willReturn('alice');

        $this->accountRepository
            ->expects($this->once())
            ->method('find')
            ->with('alice')
            ->willReturn($this->accountEntity1);

        $this->paymentRepository
            ->expects($this->exactly(2))
            ->method('create')
            ->with($this->isInstanceOf(PaymentEntity::class));

        $this->accountEntity
            ->expects($this->once())
            ->method('updateBalance')
            ->with('89.98');

        $this->accountEntity1
            ->expects($this->once())
            ->method('updateBalance')
            ->with('30.02');

        $this->accountRepository
            ->expects($this->at(0))
            ->method('update')
            ->willReturn($this->accountEntity);

        $this->accountRepository
            ->expects($this->at(1))
            ->method('update')
            ->willReturn($this->accountEntity1);

        $this->manager->createPayment($this->payment);
    }
}