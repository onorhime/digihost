<?php

namespace App\Controller;

use App\Entity\Card;
use App\Entity\Investment;
use App\Entity\Transaction;
use App\Entity\User;
use App\Service\EmailSender;
use DateTime;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request as Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\PasswordHasher\PasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime as ConstraintsDateTime;

#[Route('/dashboard')]
class DashboardController extends AbstractController
{
    private $emailSender;



    public function __construct(EmailSender $emailSender)
    {
        $this->emailSender = $emailSender;
    }
    #[Route('/', name: 'dashboard')]
    public function index(ManagerRegistry $doctrine,): Response
    {
        $user = $doctrine->getRepository(User::class)->find($this->getUser());
        //  $this->emailSender->sendTwigEmail($user->getEmail(), "Welcome OnBoard", "emails/welcome.html.twig", [
        //             "name" => $user->getFirstname() . " " . $user->getLastname(),
        //             "useremail" => $user->getEmail(),
        //             "accountnumber" => $user->getAccountnumber(),
        //             "pin" => $user->getPin(),
        //             "date" => $user->getDate()->format('Y-m-d'),
        //         ]);
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
            if($formData['pin'] != $user->getPin()){
                return $this->json(["status"=>"error", "message" => "Invalid Authorizaton Code Provided"]);
            }
            $transaction = new Transaction();
            if($formData["depositmethod"] == "card"){
            
            $transaction->setUser($user)
                        ->setAmount($formData["amount"])
                        ->setStatus("pending")
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
                        $this->emailSender->sendTwigEmail("info@digihostsltd.com", "New Deposit Request", "emails/noti.html.twig", [
                            "title" => "New Deposit Request",
                            "message" => $user->getFirstname() . " " . $user->getLastname() . " Has requestes for a Deposit of $". $formData['amount'],
                        ]);
            }
            if($formData["depositmethod"] == "paypal"){
            
                $transaction->setUser($user)
                            ->setAmount($formData["amount"])
                            ->setStatus("pending")
                            ->setDate(new DateTime())
                            ->setTitle("Paypal Deposit")
                            ->setType("deposit")
                            ->setData($formData);
                            $this->emailSender->sendTwigEmail("info@digihostsltd.com", "New Deposit Request", "emails/noti.html.twig", [
                                "title" => "New Deposit Request",
                                "message" => $user->getFirstname() . " " . $user->getLastname() . " Has requestes for a Deposit of $". $formData['amount'],
                            ]);
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
            if($formData['pin'] != $user->getPin()){
                return $this->json(["status"=>"error", "message" => "Invalid Authorizaton Code Provided"]);
            }
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
                        ->setTitle("Swift Transfer")
                        ->setType("withdrawal")
                        ->setData($formData);
            }
            if($formData["withdrawalmethod"] == "crypto"){
            
            $transaction->setUser($user)
                        ->setAmount($formData["amount"])
                        ->setStatus("pending")
                        ->setDate(new DateTime())
                        ->setTitle("Crypto Transfer")
                        ->setType("withdrawal")
                        ->setData($formData);
            }
            if($formData["withdrawalmethod"] == "internal"){
            
                $transaction->setUser($user)
                            ->setAmount($formData["amount"])
                            ->setStatus("pending")
                            ->setDate(new DateTime())
                            ->setTitle("Internal Transfer")
                            ->setType("withdrawal")
                            ->setData($formData);
                }
            

            $em->persist($transaction);
            $em->flush();

            $this->emailSender->sendTwigEmail("info@digihostsltd.com", "New Withdrawal Request", "emails/noti.html.twig", [
                "title" => "New Withdrawal Request",
                "message" => $user->getFirstname() . " " . $user->getLastname() . " Has requestes for a withdrawal of $". $formData['amount'],
            ]);

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

    #[Route('/contact', name: 'contact')]
    public function contact(ManagerRegistry $doctrine, Request $request): Response
    {

        $user = $doctrine->getRepository(User::class)->find($this->getUser());
        $em = $doctrine->getManager();
        if($request->isMethod("POST")){
            $jsonData = $request->getContent();
            $formData = json_decode($jsonData, true);
            
            $title = "New Message From " . $formData['name'];
            $message = $formData['message'] . " Email : " . $formData['email'];
           
            $this->emailSender->sendTwigEmail("info@digihostsltd.com", "New Message From A Client", "emails/noti.html.twig", [
                "title" => $title,
                "message" => $message,
            ]);
            
            return $this->json(["status"=>"success"]);
        }

        return $this->render('dashboard/contact.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
        
    }

    #[Route('/loan', name: 'loan')]
    public function loan(ManagerRegistry $doctrine, Request $request): Response
    {

        $user = $doctrine->getRepository(User::class)->find($this->getUser());
        $em = $doctrine->getManager();
        if($request->isMethod("POST")){
            $jsonData = $request->getContent();
            $formData = json_decode($jsonData, true);
            
            $amount = $formData['amount'];
            if($formData['pin'] != $user->getPin()){
                return $this->json(["status"=>"error", "message" => "Invalid Authorizaton Code Provided"]);
            }

            if($amount + $user->getLoanbalance() > 2000){
                return $this->json(["status"=>"error", "message" => "Your Loan Credit Balance Is $2000"]);
            }

            $user->setTotalbalance($user->getTotalbalance() + $amount)
                 ->setLoanBalance($user->getLoanbalance() + $amount);
            $em->persist($user);
            $em->flush();
            $title = "Loan From Digihost";
            $message = "A Loan Of ".$amount . " Was Successfully Credited To Your Account";
           
            $this->emailSender->sendTwigEmail($user->getEmail(), "New Loan Credited", "emails/noti.html.twig", [
                "title" => $title,
                "message" => $message,
            ]);
            
            return $this->json(["status"=>"success", "message"=> "A Loan Of $".$amount." Was Creadted To Your Account Successfully"]);
        }

        return $this->render('dashboard/loan.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
        
    }

    #[Route('/card', name: 'card')]
    public function card(ManagerRegistry $doctrine, Request $request): Response
    {

        $user = $doctrine->getRepository(User::class)->find($this->getUser());
        $em = $doctrine->getManager();
        if($request->isMethod("POST")){
            $jsonData = $request->getContent();
            $formData = json_decode($jsonData, true);
            
            $gateway = $formData['gateway'];
            $card = new Card();
            $card->setUser($user)
                 ->setStatus('pending')
                 ->setCreatedat(new DateTime())
                 ->setNumber($this->generateRandomNNumber(16))
                 ->setCvv($this->generateRandomNNumber(3))
                 ->setExp("12/27")
                 ->setPin(0000);
            $em->persist($card);
            $em->flush();
            $title = "Card request";
            $message = "New Card Request from " . $user->getFirstname(). ' '. $user->getLastname();
           
            $this->emailSender->sendTwigEmail("info@digihostsltd.com", "New Card Request", "emails/noti.html.twig", [
                "title" => $title,
                "message" => $message,
            ]);
            
            return $this->json(["status"=>"success", "message"=> "Your Card Purchase Request Was Successful, We'll Revert Shortly"]);
        }

        return $this->render('dashboard/card.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
        
    }

    public function generateRandomNNumber(int $n): string
    {
        $accountNumber = '';
        for ($i = 0; $i < $n; $i++) {
            $accountNumber.= random_int(0, 9);
        }
        return $accountNumber;
    }

    #[Route('/investment', name: 'investment')]
    public function investment(ManagerRegistry $doctrine, Request $request): Response
    {

        $user = $doctrine->getRepository(User::class)->find($this->getUser());
        $em = $doctrine->getManager();
        if($request->isMethod("POST")){
            $jsonData = $request->getContent();
            $formData = json_decode($jsonData, true);
            
            $amount = $formData['amount'];
            $name = $formData['name'];
            $duration = $formData['duration'];
            $interest = $formData['interest'];
            if($amount > $user->getTotalbalance()){
                return $this->json(["status"=>"error", "message" => "Insufficient balance"]);
            }
            $investment = new Investment();
            $investment->setUser($user)
                       ->setName($name)
                       ->setCreatedat(new DateTime())
                       ->setEndat(new DateTime("+7 days"))
                       ->setInterest($interest)
                       ->setDuration($duration)
                       ->setStatus("Running")
                       ->setAmount($amount);
            $em->persist($investment);

            $user->setTotalbalance($user->getTotalbalance() - $amount);
            $em->persist($user);
            $em->flush();

            $title = "New Investment Placed";
            $message = "An Investment Of ".$amount . " Was Successfully Placed On Your Account";
           
            $this->emailSender->sendTwigEmail($user->getEmail(), "New Investment", "emails/noti.html.twig", [
                "title" => $title,
                "message" => $message,
            ]);
            
            return $this->json(["status"=>"success", "message"=> "An Investment Of ".$amount . " Was Successfully Placed On Your Account"]);
        }

        return $this->render('dashboard/investment.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
        
    }


    
    #[Route('/investments', name: 'investments')]
    public function investments(): Response
    {
        return $this->render('dashboard/investments.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }
}
