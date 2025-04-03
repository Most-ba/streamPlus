<?php

namespace App\Controller;

use App\Entity\Address;
use App\Entity\Payment;
use App\Entity\User;
use App\Form\AddressType;
use App\Form\PaymentType;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;

final class OnboardingController extends AbstractController
{
    #[Route('/onborading', name: 'app_onborading')]
    public function index(): Response
    {
        return $this->render('onborading/index.html.twig', [
            'controller_name' => 'OnboradingController',
        ]);
    }

    #[Route('/onboarding/step-one', name: 'app_onboarding_step_one')]
    public function stepOne(Request $request, SessionInterface $session): Response
    {
        // Set current step
        $session->set('onboarding_current_step', 1);
        
        // Get user data from session or create new
        $userData = $session->get('onboarding_user_data', []);
        
        // Create form
        $form = $this->createForm(UserType::class, null, [
            'data' => $userData,
        ]);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            // Store form data in session
            $formData = $form->getData();
            $session->set('onboarding_user_data', $formData);

            return $this->redirectToRoute('app_onboarding_step_two');
        }
        
        return $this->render('onboarding/step_one.html.twig', [
            'form' => $form->createView(),
            'current_step' => 1,
        ]);
    }

    #[Route('/onboarding/step-two', name: 'app_onboarding_step_two')]
    public function stepTwo(Request $request, SessionInterface $session): Response
    {
        // dd();
        // Set current step
        $session->set('onboarding_current_step', 2);

        // Get address data from session or create new
        $addressData = $session->get('onboarding_address_data', []);
        // Create form
        $form = $this->createForm(AddressType::class, null, [
            'data' => $addressData,
        ]);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Store form data in session
            $formData = $form->getData();
            $session->set('onboarding_address_data', $formData);

        }
        return $this->render('onboarding/step_two.html.twig', [
            'form' => $form->createView(),
            'current_step' => 2,
        ]);
    }

    #[Route('/onboarding/back-to-step-one', name: 'onboarding_back_to_step_one')]
    public function backToStepOne(SessionInterface $session): Response
    {
        $session->set('onboarding_current_step', 1);
        return $this->redirectToRoute('app_onboarding_step_one');
    }

    #[Route('/onboarding/step-three', name: 'app_onboarding_step_three')]
    public function stepThree(Request $request, SessionInterface $session): Response
    {
        $payment = new Payment();
        // Set current step
        $session->set('onboarding_current_step', 3);
        
        // Get payment data from session or create new
        $paymentData = $session->get('onboarding_payment_data', []);
        // Create form
        $form = $this->createForm(PaymentType::class, null, [
            'data' => $paymentData,
        ]);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Store form data in session
            $formData = $form->getData();
            $session->set('onboarding_payment_data', $formData);
        }
        return $this->render('onboarding/step_three.html.twig', [
            'form' => $form->createView(),
            'current_step' => 2,
        ]);
    }

    #[Route('/onboarding/back-to-step-two', name: 'onboarding_back_to_step_two')]
    public function backToStepTwo(SessionInterface $session): Response
    {
        $session->set('onboarding_current_step', 2);
        return $this->redirectToRoute('app_onboarding_step_two');
    }
}
