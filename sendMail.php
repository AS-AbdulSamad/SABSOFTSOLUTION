<?php
    $to      = 'samad1082280@gmail.com';
    $subject = 'Test';
    $message = 'hello';
    $headers = 'From: SambaCare@samba.com.pk'       . "\r\n" .
                 'Reply-To: samad1082280@gmail.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
?>
