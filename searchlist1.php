<?php
include('connect.php');

    // echo "SESSION::: <pre>"; print_r($_SESSION);die;
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Rojagaar Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
 <body>
  <?php include 'header.php'; ?>
  <div class="hero-wrap js-fullheight" style="background-image: url('assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.php"><?php echo $lang['home'] ?>    <i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo $lang['job'] ?></span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $lang['searchlist'] ?></h1>

          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading"><?php echo $lang['search1'] ?></span>
            <h2 class="mb-4"><span><?php echo $lang['dess'] ?></span> </h2>
          </div>
        </div>
        <div class="row">


          <?php foreach($arrResult as $record): ?>
          <div class="col-md-12 ftco-animate">

            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 col-md-10">
                <div class="job-post-item-header d-flex align-items-center">
                   <h3 class="mr-3 text-black h3"><?= $record['jobkey'] ?></h3><br>

                  <span><?= $record['dor'] ?></span>
                </div>
                <div class="job-post-item-body d-block d-md-flex">

                  <h6 class="col-4 pl-0"><label><?php echo $lang['name'] ?>:<span style="color: black"><?= $record['name'] ?></span></label></h6><br>
                  <div class="col-4 pl-0"> <label ><?php echo $lang['email'] ?>:<span style="color: black"><?= $record['email'] ?></span></label></div>
                  <div class="col-4 pl-0"> <label><?php echo $lang['mobileno'] ?>:<span style="color: black"><?= $record['phn'] ?></span></label></div>


                </div>
                <div class="job-post-item-body d-block d-md-flex">
                 <div class="col-4 pl-0"> <label><?php echo $lang['village'] ?>:<span style="color: black"><?= $record['village'] ?></span></label></div>
                  <div class="col-4 pl-0"> <label><?php echo $lang['taluka'] ?>:<span style="color: black"><?= $record['taluka'] ?></span></label></div>
                   <div class="col-4 pl-0"> <label><?php echo $lang['district'] ?>:<span style="color: black"><?= $record['district'] ?></span></label></div>
                   <div class="col-4 pl-0"> <label><?php echo $lang['state'] ?>:<span style="color: black"><?= $record['state'] ?></span></label></div>
              </div>
            </div>


            </div>
          </div><!-- end -->

          <?php endforeach; ?>

        </div>

      </div>
    </section>

<?php include 'footer.php'; ?>
</body>
</html>
