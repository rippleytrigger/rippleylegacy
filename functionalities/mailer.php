<?php
    /**
     * This example shows settings to use when sending via Google's Gmail servers.
     * This uses traditional id & password authentication - look at the gmail_xoauth.phps
     * example to see how to use XOAUTH2.
     * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
     */
    //Import PHPMailer classes into the global namespace

    //Email to send the content
    $email_principal = "";

    use PHPMailer\PHPMailer\PHPMailer;
    require '../vendor/autoload.php';
    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    //Enable SMTP debugging
    $mail->SMTPDebug = 0;
    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6
    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission


    $mail->Port = 587;
    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = $email_principal;
    //Password to use for SMTP authentication
    $mail->Password = "";
    //Set who the message is to be sent from
    $mail->setFrom($email_principal, 'Rippleylegacy');
   
    //Set who the message is to be sent to
    $mail->addAddress($correo, $nombre);
    //Set the subject line
    $mail->Subject = $asunto;
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    $mail->msgHTML($mensaje_correo);

    if(!$mail->send())
    { 
        http_response_code(400);
        echo "No se pudo enviar su correo. Inténtelo más tarde";
        exit();
    }
    else
    { 
        http_response_code(200);
        echo "Se pudo enviar el correo!!!";
        exit();
    } 
?>