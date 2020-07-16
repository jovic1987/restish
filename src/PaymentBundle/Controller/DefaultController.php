<?php

namespace PaymentBundle\Controller;

use PaymentBundle\Model\Payment;
use PaymentBundle\Formatter\ErrorFormatter;
use PaymentBundle\Formatter\PaymentsFormatter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function indexAction()
    {
        $payments = $this->container->get('payment.payment_manager')->getAllPayments();

        return new JsonResponse((new PaymentsFormatter($payments))->format());
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function createAction(Request $request)
    {
        $payment = new Payment($request->get('account'), $request->get('amount'), $request->get('to_account'));

        $errors = $this->get('validator')->validate($payment);
        if (count($errors) > 0) {
            return new JsonResponse((new ErrorFormatter($errors))->format(), 400);
        }

        try {
            $this->container->get('payment.payment_manager')->createPayment($payment);
            return new JsonResponse(['code' => 201, 'status' => 'Created'], 201);
        } catch (\Exception $exception) {
            return new JsonResponse(['code' => $exception->getCode(), 'error' => $exception->getMessage()], $exception->getCode());
        }
    }
}
