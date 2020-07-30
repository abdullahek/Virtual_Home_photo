<?php
    
    require("PHPMailer/PHPMailerAutoload.php");
	
    $Name    = $_POST['name'];
    $Email   = $_POST['email'];
    $Phone   = $_POST['phone'];
    $Company = $_POST['company'];
    $Message = $_POST['message'];

    //Load phpmailer
    $mail = new PHPMailer(true);

    //Server settings
    $mail->isSMTP();
    $mail->Host = 'virtualhomephotography.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@virtualhomephotography.com';
    $mail->Password = 'D9r6je7j2cTw';
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('info@virtualhomephotography.com');

    //Recipients
    $mail->addAddress('info@virtualhomephotography.com');
    $mail->addReplyTo('info@virtualhomephotography.com');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Contact Us';
    $mail->Body    = '<h4>Name: </h4><p>'. $Name. '</p><h4>'. 'Email: </h4><p>'. $Email . '</p><h4>Phone: </h4><p>'. $Phone . '</p><h4> Company: </h4><p>'. $Company . '</p><h4>Message: </h4><p>'. $Message . '</p>';

    if($mail->send()){
     echo "Success";   
    }
    else
    {
        echo "Error";
    }
    exit();
?>