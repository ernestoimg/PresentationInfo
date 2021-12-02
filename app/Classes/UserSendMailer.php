<?php

use Barryvdh\Debugbar\Facade;

require_once "./vendor/autoload.php";

class UserSenMailer extends Facade
{

    public function SendMail()
    {
        $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587))
        ->setUsername('ivan2017city@gmail.com')
        ->setPassword('Hawai2015.');

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);


    // Create a message
    $message = (new Swift_Message('Wonderful Subject'))
        ->setFrom(['ivan2017city@gmail.com' => 'Ivan Martínez'])
        ->setTo(['ivan.2015.puebla@gmail.com' => 'A name'])
        ->setBody('Here is the message itself');


    // Send the message
    $result = $mailer->send($message);

    }
}
