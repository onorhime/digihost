<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

#[Route('/')]
class HomeController extends AbstractController
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    #[Route('', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('about', name: 'about')]
    public function about(): Response
    {
        return $this->render('home/about.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('services', name: 'services')]
    public function services(): Response
    {
        return $this->render('home/services.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    #[Route('faq', name: 'faq')]
    public function faq(): Response
    {
        return $this->render('home/faq.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('privacy', name: 'privacy')]
    public function privacy(): Response
    {
        return $this->render('home/privacy.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('terms', name: 'terms')]
    public function terms(): Response
    {
        return $this->render('home/terms.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('policy', name: 'policy')]
    public function policy(): Response
    {
        return $this->render('home/policy.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('login', name: 'login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('home/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }
    
    #[Route('logout', name: 'logout')]
    public function logout(): void
    {
        // controller can be blank: it will never be executed!
        throw new \Exception('Don\'t forget to activate the logout in your security.yaml');
    }

    #[Route('register', name: 'register')]
    public function register(ManagerRegistry $doctrine, Request $request, UserPasswordHasherInterface $passwordHasher, EventDispatcherInterface $eventDispatcher): Response
    {
        if($request->isMethod("POST")){
           // return $this->json(["status" => "error", "message" => "Email already exists"]);
            $data = json_decode($request->getContent(), true);
            $email = $data['email'];
            try {
                $existingUser = $doctrine
                    ->getRepository(User::class)
                    ->findOneBy(['email' => $email]);
        
                if ($existingUser) {
                    return $this->json(["status" => "error", "message" => "Email already exists"]);
                }
            } catch (Exception $e) {
                // User not found, continue with registration
            }

            $firstname = $data['firstname'];
            $lastname = $data['lastname'];
            $username = $data['username'];
            
            $mobile = $data['mobile'];
            $city = $data['city'];
            $zip = $data['zip'];
            $country = $data['country'];
            $address = $data['address'];
            $password = $data['password'];
            $pin = $data['pin'];

            $user = new User();
            $user->setFirstname($firstname);
            $user->setLastname($lastname);
            $user->setUsername($username);
            $user->setEmail($email);
            $user->setMobile($mobile);
            $user->setCity($city);
            $user->setZip($zip);
            $user->setCountry($country);
            $user->setAddress($address);
            $user->setPin($pin);
            $user->setStatus(false);
            $user->setPassword($this->encodePassword($user, $password, $passwordHasher));

            $entityManager = $doctrine->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            $this->authenticateUser($user, $request, $eventDispatcher);
            return $this->json(["status" => "success", "message" => "Registration Successful"]);
            
        }
        return $this->render('home/register.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    static function encodePassword(PasswordAuthenticatedUserInterface $user, string $plainPassword, UserPasswordHasherInterface $passwordHasher): string
    {
        //$encoder = $this->container->get('security.password_encoder');
        return $passwordHasher->hashPassword($user, $plainPassword);
    }
    private function authenticateUser(UserInterface $user, Request $request, EventDispatcherInterface $eventDispatcher)
    {
        $token = new UsernamePasswordToken($user, 'main', $user->getRoles());
        $this->container->get('security.token_storage')->setToken($token);
        $event = new InteractiveLoginEvent($request, $token);
        $eventDispatcher->dispatch($event, "LOGIN");
    }

    #[Route('verify', name: 'verify')]
    public function verify(ManagerRegistry $doctrine, Request $request): Response
    {
        $user = null;
        if ($this->getUser() === null) {
          return  $this->redirect("/login");
        }
       
        $user = $doctrine->getRepository(User::class)->find($this->getUser());
    
        
        if($request->isMethod("POST")){
           // return $this->json(["status" => "error", "message" => "Email already exists"]);
            $data = json_decode($request->getContent(), true);
            $pin = $data['pin'];

            if(intval($pin) !== $user->getPin()){
                return $this->json(['status' => 'error']);
            }

            return $this->json(['status' => 'success']);
            
        }
        return $this->render('home/verify.html.twig', [
            'status' => $user->isStatus(),
        ]);
    }
}
