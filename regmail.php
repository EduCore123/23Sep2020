<?php
$msg="";
if(isset($_POST['submit'])) {
    require 'PHPMailerAutoload.php';

    $mail = new PHPMailer;

                               // Enable verbose debug outp
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'shubhangighadge45@gmail.com';                 // SMTP username
$mail->Password ='shubhangiv' ;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to


$mail->setFrom('shubhangighadge45@gmail.com', 'shubhangi ghadge');
$mail->addAddress($_POST['email']);

$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'REGISTRATION SUCCESSFULLY DONE';
$mail->Body    = '<h2><b>Your Registration Details Are </b></h2>'.
'<h3> Your firstname: '.$_POST['firstname'].  '<br>Your lastname:'.$_POST['lastname'].'<br>Email:'.$_POST['email'].'<br>Username:'.$_POST['username']. '<br>Password:'.$_POST['password'].'</h3>';

if($isRegistered == true) {
    if($mail->send()) {
    if(true) {
        $msg='Registration Successfully Done';
    }
} else if ($isRegistered == false) {
    $msg='Register unsuccessful...please try again';
}
}

}
?>
