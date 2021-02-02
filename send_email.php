<?php

function send_email($fullname, $country, $email, $username, $whatsappNo)
{
    $emailto = 'anagkazorecruitment@gmail.com';
    $toname = 'ABMTC Recruitment';
    $emailfrom = 'anagkazorecruitment@gmail.com';
    $fromname = 'ABMTC Recruitment';
    $subject = 'A New Account Has Been Created';
    $messagebody = 'ALERT!, A new account has been created with the following details ' . "\n" .
        'Full Name : ' . $fullname . "\n" .
        'Country : ' . $country . "\n" .
        'Email Address : ' . $email . "\n" .
        'Username : ' . $username . "\n" .
        'Whatsapp No : ' . $whatsappNo . "\n";
    $headers =
        'Return-Path: ' . $emailfrom . "\r\n" .
        'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
        'X-Priority: 3' . "\r\n" .
        'X-Mailer: PHP ' . phpversion() . "\r\n" .
        'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'Content-Transfer-Encoding: 8bit' . "\r\n" .
        'Content-Type: text/plain; charset=UTF-8' . "\r\n";
    $params = '-f ' . $emailfrom;
    $test = mail($emailto, $subject, $messagebody, $headers, $params);


    echo $test;
}

?>