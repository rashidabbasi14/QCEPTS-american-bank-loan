<?php
    require 'vendor/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    $mail = new PHPMailer(true);                            
    if(!empty($_POST['name']) && !empty($_POST['phone'])){
        try {
            $mail->isSMTP();                                    
            $mail->Host = 'business67.web-hosting.com';                
            $mail->SMTPAuth = true;                             
            $mail->Username = 'contact@americansbusinessloan.com';              
            $mail->Password = 'americansbusinessloan@123';                         
            $mail->SMTPSecure = 'ssl';                 
            $mail->Port = 465;                                  
    
            //Recipients
            $mail->setFrom('contact@americansbusinessloan.com', $_POST['name']);
            $mail->addAddress('contact@americansbusinessloan.com', 'Get in touch');
    
            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Contact Form Submission';
    
            $mail->Body    = 'Name: '.$_POST['name']
            .'<br> Phone: '.$_POST['phone']
            .'<br> Message: '.$_POST['message'];
    
            $mail->send();
        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }
?>