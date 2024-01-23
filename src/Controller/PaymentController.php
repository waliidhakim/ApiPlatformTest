<?php

namespace App\Controller;

use Stripe\Stripe;
use Stripe\Checkout\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class PaymentController extends AbstractController
{
    #[Route('/create-checkout-session', methods: ['POST'])]
    public function createCheckoutSession(Request $request): JsonResponse {
        $data = json_decode($request->getContent(), true);
        Stripe::setApiKey('sk_test_51NVqQtKRXD3JBQTyC0Yk1Qh9fZEb9e9sfKMDqp7TdShloj5KMCbLkmnFNW7dCJn4Knzsfab67U1tNs0Jibk6NXa500wZvliJnx');

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => $data['productName'],
                    ],
                    'unit_amount' => $data['price']*100, // Prix en centimes, par exemple 20,00 €
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => 'http://localhost:3000',
            'cancel_url' => 'http://localhost:3000/payment/errorPayment',
        ]);

        return $this->json(['id' => $session->id]);
    }
}
