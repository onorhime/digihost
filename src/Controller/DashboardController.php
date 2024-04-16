<?php

namespace App\Controller;

use App\Entity\Transaction;
use App\Entity\User;
use DateTime;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request as Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\PasswordHasher\PasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/dashboard')]
class DashboardController extends AbstractController
{
    #[Route('/', name: 'dashboard')]
    public function index(): Response
    {
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }

    #[Route('/deposit', name: 'deposit')]
    public function deposit(ManagerRegistry $doctrine, Request $request): Response
    {
        $user = $doctrine->getRepository(User::class)->find($this->getUser());
        $em = $doctrine->getManager();
        if($request->isMethod("POST")){
            $jsonData = $request->getContent();
            $formData = json_decode($jsonData, true);
            $transaction = new Transaction();
            if($formData["depositmethod"] == "card"){
            
            $transaction->setUser($user)
                        ->setAmount($formData["amount"])
                        ->setStatus("failed")
                        ->setDate(new DateTime())
                        ->setTitle("Card Deposit")
                        ->setType("deposit")
                        ->setData($formData);
            }
            if($formData["depositmethod"] == "crypto"){
            
            $transaction->setUser($user)
                        ->setAmount($formData["amount"])
                        ->setStatus("pending")
                        ->setDate(new DateTime())
                        ->setTitle("Crypto Deposit")
                        ->setType("deposit")
                        ->setData($formData);
            }
            if($formData["depositmethod"] == "paypal"){
            
                $transaction->setUser($user)
                            ->setAmount($formData["amount"])
                            ->setStatus("pending")
                            ->setDate(new DateTime())
                            ->setTitle("Paypal Deposit")
                            ->setType("deposit")
                            ->setData($formData);
                }

            $em->persist($transaction);
            $em->flush();

            return $this->json(["message"=>"success"]);
            

        }
        return $this->render('dashboard/deposit.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }

    
    #[Route('/withdrawal', name: 'withdrawal')]
    public function withdrawal(ManagerRegistry $doctrine, Request $request): Response
    {
        $user = $doctrine->getRepository(User::class)->find($this->getUser());
        $em = $doctrine->getManager();
        if($request->isMethod("POST")){
            $jsonData = $request->getContent();
            $formData = json_decode($jsonData, true);
            $transaction = new Transaction();
            if($formData["amount"] > $user->getTotalBalance()){
                return $this->json(["message"=>"Insufficient Funds", "status"=>"error"]);
            } 
            $user->setTotalBalance($user->getTotalBalance() - intval($formData['amount']));
            $em->persist($user);
            if($formData["withdrawalmethod"] == "swift"){
            
            $transaction->setUser($user)
                        ->setAmount($formData["amount"])
                        ->setStatus("pending")
                        ->setDate(new DateTime())
                        ->setTitle("Swift Withdrawal")
                        ->setType("withdrawal")
                        ->setData($formData);
            }
            if($formData["withdrawalmethod"] == "crypto"){
            
            $transaction->setUser($user)
                        ->setAmount($formData["amount"])
                        ->setStatus("pending")
                        ->setDate(new DateTime())
                        ->setTitle("Crypto Deposit")
                        ->setType("deposit")
                        ->setData($formData);
            }
            

            $em->persist($transaction);
            $em->flush();

            return $this->json(["message"=>"Withdwawal Successful", "status"=>"success"]);
            

        }
        return $this->render('dashboard/withdrawal.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }


    #[Route('/transactions', name: 'transactions')]
    public function transactions(): Response
    {
        return $this->render('dashboard/transactions.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }

    #[Route('/settings', name: 'settings')]
    public function settings(ManagerRegistry $doctrine, Request $request, UserPasswordHasherInterface $passwordHasherInterface): Response
    {

        $user = $doctrine->getRepository(User::class)->find($this->getUser());
        $em = $doctrine->getManager();
        if($request->isMethod("POST")){
            $jsonData = $request->getContent();
            $formData = json_decode($jsonData, true);
            $hashedPassword = HomeController::encodePassword($user, $formData["newpassword"], $passwordHasherInterface);
            if(!password_verify($formData['oldpassword'], $user->getPassword())){
                return $this->json(['status'=> "error"]);
            }
            $user->setPassword($hashedPassword);
            $em->persist($user);
            $em->flush();
            return $this->json(["status"=>"success"]);
        }

        return $this->render('dashboard/settings.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
        
    }

    #[Route('/profile', name: 'profile')]
    public function profile(ManagerRegistry $doctrine, Request $request): Response
    {

        $user = $doctrine->getRepository(User::class)->find($this->getUser());
        $em = $doctrine->getManager();
        if($request->isMethod("POST")){
            $jsonData = $request->getContent();
            $formData = json_decode($jsonData, true);
            
            if(!password_verify($formData['oldpassword'], $user->getPassword())){
                return $this->json(['status'=> "error"]);
            }
            
            $em->persist($user);
            $em->flush();
            return $this->json(["status"=>"success"]);
        }

        return $this->render('dashboard/profile.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
        
    }


}
