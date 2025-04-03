<?php

namespace App\Controller;

use App\Entity\Address;
use App\Entity\Payment;
use App\Entity\User;
use App\Form\AddressType;
use App\Form\PaymentType;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;

final class OnboardingController extends AbstractController
{
    #[Route('/onboarding', name: 'app_onboarding')]
    public function index(Request $request, SessionInterface $session): Response
    {

        $session->set('onboarding_current_step', 1);
        
        return $this->redirectToRoute('app_onboarding_step_one');
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
        // Check if user completed step one
        $userData = $session->get('onboarding_user_data');
        if (!$userData) {
            return $this->redirectToRoute('app_onboarding_step_one');
        }

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
            // Determine next step based on subscription type
            if ($userData['subscriptionType'] === 'premium') {
                return $this->redirectToRoute('app_onboarding_step_three');
            } else {
                // Skip payment step for free subscription
                return $this->redirectToRoute('app_onboarding_step_confirm');
            }

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
        dd("Done");
       // Check if user completed previous steps
       $userData = $session->get('onboarding_user_data');
       $addressData = $session->get('onboarding_address_data');
       
       if (!$userData || !$addressData) {
           return $this->redirectToRoute('app_onboarding_step_one');
       }
       
       // Check if payment step should be skipped
       if ($userData['subscriptionType'] !== 'premium') {
           return $this->redirectToRoute('app_onboarding_step_confirm');
       }
       
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
            return $this->redirectToRoute('app_onboarding_step_confirm');
        }
        return $this->render('onboarding/step_three.html.twig', [
            'form' => $form->createView(),
            'current_step' => 3,
        ]);
    }

    #[Route('/onboarding/back-to-step-two', name: 'onboarding_back_to_step_two')]
    public function backToStepTwo(SessionInterface $session): Response
    {
        $session->set('onboarding_current_step', 2);
        return $this->redirectToRoute('app_onboarding_step_two');
    }


    #[Route('/onboarding/back-to-step-three', name: 'onboarding_back_to_step_three')]
    public function backToStepThree(SessionInterface $session): Response
    {
        $session->set('onboarding_current_step', 3);
        return $this->redirectToRoute('app_onboarding_step_three');
    }


    #[Route('/onboarding/confirm', name: 'app_onboarding_step_confirm')]
    public function confirm(Request $request, SessionInterface $session): Response
    {
        if( $session->get('onboarding_current_step') == 4){
            return $this->redirectToRoute('app_onboarding_finalize');
        }
        // Check if user completed previous steps
        $userData = $session->get('onboarding_user_data');
        $addressData = $session->get('onboarding_address_data');
        
        if (!$userData || !$addressData) {
            return $this->redirectToRoute('app_onboarding_step_one');
        }
        
        // Set current step
        $session->set('onboarding_current_step', 4);
        
        // Get payment data if exists
        $paymentData = $session->get('onboarding_payment_data', null);
        
        // Check if payment data is required but missing
        if ($userData['subscriptionType'] === 'premium' && !$paymentData) {
            return $this->redirectToRoute('app_onboarding_step_three');
        }
        
        return $this->render('onboarding/step_confirm.html.twig', [
            'user' => $userData,
            'address' => $addressData,
            'payment' => $paymentData,
            'current_step' => 4,
        ]);
    }


    #[Route('/onboarding/finalize', name: 'app_onboarding_finalize', methods: ['POST'])]
    public function finalize(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        dd("Done"); 
        // Validate CSRF token
        $submittedToken = $request->request->get('_token');
        if (!$this->isCsrfTokenValid('finalize', $submittedToken)) {
            throw $this->createAccessDeniedException('Invalid CSRF token');
        }
        dd("Done");
        // Get data from session
        $userData = $session->get('onboarding_user_data');
        $addressData = $session->get('onboarding_address_data');
        $paymentData = $session->get('onboarding_payment_data');
        
        if (!$userData || !$addressData) {
            return $this->redirectToRoute('app_onboarding_step_one');
        }
        dd("Done");
        // Create and persist entities
        $user = new User();
        $user->setName($userData['name']);
        $user->setEmail($userData['email']);
        $user->setPhone($userData['phone']);
        $user->setSubscriptionType($userData['subscriptionType']);
        dd("Done");
        $address = new Address();
        $address->setLine1($addressData['line1']);
        if (!empty($addressData['line2'])) {
            $address->setLine2($addressData['line2']);
        }
        $address->setCity($addressData['city']);
        $address->setState($addressData['state']);
        $address->setPostalCode($addressData['postalCode']);
        $address->setCountry($addressData['country']);
        $address->setUser($user);
        dd("Done");
        $entityManager->persist($user);
        $entityManager->persist($address);
        dd("Done");
        // Handle payment if premium subscription
        if ($userData['subscriptionType'] === 'premium' && $paymentData) {
            $payment = new Payment();
            $payment->setCardNumber($paymentData['cardNumber']);
            $payment->setExpirationDate($paymentData['expirationDate']);
            $payment->setCvv($paymentData['cvv']);
            $payment->setUser($user);
            
            $entityManager->persist($payment);
        } dd("Done");
        
        $entityManager->flush();
        dd("Done");
        // Clear session data
        $session->remove('onboarding_user_data');
        $session->remove('onboarding_address_data');
        $session->remove('onboarding_payment_data');
        $session->remove('onboarding_current_step');
        
        // Add flash message
        $this->addFlash('success', 'Your registration has been completed successfully!');
        dd("Done");
    
    }

}



