 <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Rojagaar Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
 <body>
 <?php
 $result="";
 if(isset($_POST['submit'])) {
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'shubhangighadge45@gmail.com';                 // SMTP username
$mail->Password ='shubhangiv' ;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to


$mail->setFrom($_POST['email'],$_POST['name']);
$mail->addAddress('shubhangighadge45@gmail.com');
$mail->addReplyTo($_POST['email'],$_POST['name']);
// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject ='Subject: ' .$_POST['sub'];
$mail->Body = '<h4>NAME: '.$_POST['name']. '<br>Email:'.$_POST['email'].'</h4>'.'<br>
message:'.$_POST['msg'];

if(!$mail->send()) {
    $result='Message could not be sent.plzz try again';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
     $result='Message has been sent..thank you for contacting us';
}
  }
 ?>
  <?php include'header.php'; ?>
  <div class="hero-wrap js-fullheight" style="background-image: url('assets/images/Farms/F22.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.html"><?php echo $lang['home'] ?><i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo $lang['contact'] ?></span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $lang['contactus'] ?></h1>

          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3"><?php echo $lang['contactinfo'] ?></h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span><?php echo $lang['address'] ?>:</span><?php echo $lang['add1'] ?></p>
          </div>
          <div class="col-md-3">
            <p><span><?php echo $lang['mobileno'] ?>:</span> <a href="tel://1234567920"><?php echo $lang['contact1'] ?></a></p>
          </div>
          <div class="col-md-3">
            <p><span><?php echo $lang['email'] ?>:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span><?php echo $lang['website'] ?>:</span> <a href="#">yoursite.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-12 order-md-last d-flex">

            <form action="#" method="POST" class="bg-white p-5 contact-form">
              <div class="form-group">
                  <h5 class="text text-center text-success"><?= $result; ?></h5>
                  <h2 class="text-center"><?php echo $lang['contactus'] ?></h2>
                <input type="text" class="form-control" name="name" placeholder="<?php echo $lang['firstname'] ?>">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="<?php echo $lang['email'] ?>">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="sub" placeholder="<?php echo $lang['subject'] ?>">
              </div>
              <div class="form-group">
                <textarea name="msg" id="" cols="30" rows="7" class="form-control" placeholder="<?php echo $lang['msg'] ?>"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="<?php echo $lang['sendmsg'] ?>" name="submit" class="btn btn-primary py-3 px-5">
              </div>
            </form>

</div>
</div>
</div>
</section>

<?php include 'footer.php'; ?>
</body>
</html>
