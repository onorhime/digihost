<?php

// src/Service/EmailSender.php

namespace App\Service;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;

class EmailSender
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendTwigEmail(string $recipientEmail, string $subject, string $templatePath, array $context = []): void
    {
        $email = (new TemplatedEmail())
            ->from(new Address('info@digihostsltd.com', 'Digihost BlockChain Solution'))
            ->to($recipientEmail)
            ->subject($subject)
            ->htmlTemplate($templatePath)
            ->context($context);

        $this->mailer->send($email);
    }
}
