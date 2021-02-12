<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GeneralModel extends CI_Model
{
    public function email($msg, $sub, $to)
    {
        require_once 'phpmailer/PHPMailerAutoload.php';

        $m = new PHPMailer;
        $m->isSMTP();
        $m->SMTPAuth = true;
        $m->SMTPDebug = false;

        $m->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $m->Host = 'mail.gated.co.ke';
        $m->Username = 'noreply@gated.co.ke';
        $m->Password = '@noreply@gated2018';
        $m->SMTPSecure = 'tls';
        $m->Port = 25;

        $m->From = 'noreply@gated.co.ke';
        $m->FromName = 'ATJ';
        $m->addReplyTo($to, 'Reply Address');
        $m->addAddress($to, $to);

        $m->Subject = $sub;
        $m->Body = $msg;
        $m->AltBody = $msg;


        if ($m->send()) {
            return true;
        } else {
            return false;
        }

    }
}