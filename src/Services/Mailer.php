<?php


namespace Template\Services;

use PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mailer {

    private string $mailOrigin;
    private string $password;
    private string $name;
    private string $host;
    private ?string $message;
    private ?string $subject;
    private int $port;




    public function __construct() {
        $this->name = 'MAGALDI MOEMA';
        $this->mailOrigin = 'naoresponda@mazukim.com.br';
        $this->password = 'marketingA321';
        $this->host = 'mail.mazukim.com.br';
        $this->port = 465;
    }

    public function getMessage(): string {
        return $this->message;
    }

    public function setMessage(string $message) {
        $this->message = $message;
        return $this;
    }

    public function getSubject(): string {
        return $this->subject;
    }

    public function setSubject(string $subject) {
        $this->subject = $subject;
        return $this;
    }

    public function send($sendTo, $name) {
        $mail = new PHPMailer\PHPMailer(true);

        try
        { 
        $mail->IsSMTP();      
      //  $mail->SMTPDebug = 2;
        $mail->SMTPDebug = false;    
        $mail->SMTPAuth = true;   
        $mail->SMTPSecure = 'ssl';  
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
            );
        $mail->Host = $this->host;
        $mail->Port = $this->port; 
        $mail->Username = $this->mailOrigin;
        $mail->Password = $this->password;
        $mail->SetFrom($this->mailOrigin, $this->name);
        $mail->addAddress($sendTo,'');
        $mail->Subject=utf8_decode(self::getSubject());
        $mail->msgHTML(self::getMessage());
        $mail->send();
        } 

        catch(Exception $e)
        {
            echo $e->getMessage();
        }


    }


}