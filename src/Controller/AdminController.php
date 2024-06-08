<?php

namespace App\Controller;

use App\Entity\Card;
use App\Entity\CardTransaction;
use App\Entity\Investment;
use App\Entity\Transaction;
use App\Entity\User;
use App\Service\EmailSender;
use DateTime;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminController extends AbstractController
{
    private $emailSender;

    public function __construct(EmailSender $emailSender)
    {
        $this->emailSender = $emailSender;
    }

    #[Route('/', name: 'admin')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $users = $doctrine->getRepository(User::class)->findAll();
        $deposits = $doctrine->getRepository(Transaction::class)->findBy(["status"=>"pending"]);
        $plans = $doctrine->getRepository(Investment::class)->findBy(['status'=> false]);

        return $this->render('admin/index.html.twig', [
            'users' => $users,
            'transactions' => $deposits,
            'plans' => $plans
        ]);
    }

    #[Route('/profile/{id}', name: 'profileview')]
    public function profile(string $id, ManagerRegistry $doctrine, Request $request): Response
    {
        $em = $doctrine->getManager();
        $id = $doctrine->getRepository(User::class)->find($id);
        if(null != $request->get('update')){
            $id->setTotalbalance($request->get('totalbalance'))
               ->setLoanbalance($request->get('loanbalance'))
               ->setTotalincome($request->get('totalincome'))
               ->setCryptobalance($request->get('cryptobalance'))
               ->setPin($request->get('pin'))
               ->setBtcaddress($request->get('btcaddress'))
               ->setEthaddress($request->get('ethaddress'))
               ->setUsdtaddress($request->get('usdtaddress'))
               ->setCardactivationamount($request->get('cardactivationamount'))
               ->setPaypaladdress($request->get('paypaladdress'));
            $em->persist($id);
            $em->flush();
           

           noty()->addSuccess("profile was updated successfully");
            $u = $id->getId();
            return $this->redirectToRoute("admin");

        }
        if(null != $request->get('activate')){
            $id->setStatus(!$id->isStatus());
            $em->persist($id);
            $em->flush();
            if(!$id->isStatus()){
                $message = "Dear ". $id->getFirstname() . " " . $id->getLastname() . " Due to Some Valid Reasons, Your Digihost Account Was De-Activated, please contact our support team for further investigation";
                $this->emailSender->sendTwigEmail($id->getEmail(), "Account De-Activated", "emails/noti.html.twig", [
                    "title" => "Digihost Account De-Activated",
                    "message" => $message,
                ]);
            }
           

           noty()->addSuccess("profile was activated successfully");
            $u = $id->getId();
            return $this->redirectToRoute("admin");

        }
        if(null != $request->get('delete')){
            $em->remove($id);
            $em->flush();

            $this->addFlash(
               'success',
               'user successfully deleted'
            );
            return $this->redirectToRoute('admin');
        }

        if(null != $request->get('addcardtransaction')){
            $transaction = new CardTransaction();
            $transaction->setUser($id)
                        ->setAmount(intval($request->get('amount')))
                        ->setInterest(intval($request->get('interest')))
                        ->setDate(new DateTime())
                        ->setStatus($request->get('status'));
            $em->persist($transaction);
            $id->setTotalbalance($id->getTotalbalance() + intval($request->get('amount')));
            $em->persist($id);
            $em->flush();
            $this->addFlash(
               'success',
               'card transaction successfully added'
            );
            
            
           

           
            return $this->redirectToRoute("admin");

        }

        if(null != $request->get('adddeposit')){
            $transaction = new Transaction();
            $transaction->setUser($id)
                        ->setAmount($request->get('amount'))
                        ->setStatus("pending")
                        ->setDate(new DateTime())
                        ->setTitle($request->get('title'))
                        ->setType("deposit")
                        ->setData(null);
            $em->persist($transaction);           
            $em->flush();
            $this->addFlash(
               'success',
               'transaction successfully added'
            );
            
            
           

           
            return $this->redirectToRoute("admin");

        }
        return $this->render('admin/profile.html.twig', [
            'user' => $id
        ]);
    }

    #[Route('/withdrawallist', name: 'withdrawallist')]
    public function withdrawals(ManagerRegistry $doctrine, Request $request, EmailSender $emailSender): Response
    {
        $withdrawals = $doctrine->getRepository(Transaction::class)->findBy(["status"=>"pending"]);

        $em = $doctrine->getManager();
        if(null != $request->get('approve')){
            $transaction = $doctrine->getRepository(Transaction::class)->find($request->get('id'));
            $transaction->setStatus('complete')
            ->setDate(new \DateTime($request->get("date")));
            if($transaction->getType() == "deposit"){
               $tuser =  $transaction->getUser();
               $tuser->setTotalbalance($tuser->getTotalbalance() + $transaction->getAmount());
               $em->persist($tuser);
            }
            $em->persist($transaction);
            
            $amount = $transaction->getAmount();
            $em->flush();

            
            //$emailSender->sendDepEmail($user->getEmail(), 'Withdrawal Confirmed', "your withdrawal was confirmed successfully", ['name'=>$user->getName(), 'message'=>"your withdrawal of $$amount has been confirmed and deposited to your wallet successfuly"]);
            
            noty()->addSuccess("wihdrawal was successfuly approved");
            return $this->redirectToRoute('withdrawallist');
            
        }
        if(null != $request->get('delete')){
            $transaction = $doctrine->getRepository(Transaction::class)->find($request->get('id')); 
            $transaction->setStatus('failed')
            ->setDate(new \DateTime($request->get("date")));
            $em->persist($transaction);

            

            noty()->addError("Transaction was successfuly declined");
            
            $em->flush();

            return $this->redirectToRoute('admin');
        }
        return $this->render('admin/withdrawals.html.twig', [
            'withdrawals' => $withdrawals
        ]);
    }


    
    #[Route('/admininvestments', name: 'admininvestments')]
    public function investments(ManagerRegistry $doctrine, Request $request, PaginatorInterface $paginator): Response
    {
        $em = $doctrine->getManager();
        if(null != $request->get('update')){
            $investment = $doctrine->getRepository(Investment::class)->find($request->get('id')); 
            $investment->setAmount($request->get("amount"))
            ->setCreatedat(new \DateTime($request->get("date")))
            ->setStatus($request->get("status"));
            $em->persist($investment);

            

            noty()->addSuccess("Investment was successfuly Updated");
            
            $em->flush();

            return $this->redirectToRoute('admin');
        }

        $plans = $doctrine->getRepository(Investment::class)->findAll(); 
        
        $pagination = $paginator->paginate($plans, $request->query->getInt('page', 1), 10);
        return $this->render('admin/invest.html.twig', [
          'plans' => $pagination 
        ]);
    }

    #[Route('/cardrequest', name: 'cardrequest')]
    public function cardrequest(ManagerRegistry $doctrine, Request $request, EmailSender $emailSender): Response
    {
        $cardrequests = $doctrine->getRepository(Card::class)->findBy(["status"=>"pending"]);

        $em = $doctrine->getManager();
        if(null != $request->get('approve')){
            $card = $doctrine->getRepository(Card::class)->find($request->get('id'));
            $card->setStatus('Active');

           
            $em->persist($card);
            $em->flush();

            
            //$emailSender->sendDepEmail($user->getEmail(), 'Withdrawal Confirmed', "your withdrawal was confirmed successfully", ['name'=>$user->getName(), 'message'=>"your withdrawal of $$amount has been confirmed and deposited to your wallet successfuly"]);
            
            noty()->addSuccess("card was successfuly approved");
            return $this->redirectToRoute('cardrequest');
            
        }
        if(null != $request->get('delete')){
            $card = $doctrine->getRepository(Card::class)->find($request->get('id')); 
            $em->remove($card);
            
            $em->flush();

            

            noty()->addError("Card was successfuly Deleted");
            
            $em->flush();

            return $this->redirectToRoute('cardrequest');
        }
        return $this->render('admin/card.html.twig', [
            'cardrequests' => $cardrequests
        ]);
    }
}
