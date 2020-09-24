
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Rojagaar Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
     <?php include'header.php'; ?>
    <div class="hero-wrap js-fullheight" style="background-image: url('assets/images/Farms/F2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
        <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.html"><?php echo $lang['home'] ?> <i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo $lang['jobapplication'] ?> </span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $lang['jobapplication'] ?></h1>
          </div>
        </div>
      </div>
    </div>

    <div class="ftco-section bg-light">
      <div class="container">
        <div class="row">

          <div class="col-md-12">

           <form method="POST" enctype="multipart/form-data" action="ajob.php" class="p-5 bg-white">

              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname"><?php echo $lang['yourname'] ?></label>
                  <input type="text" id="name" name="name" value="<?php echo $_SESSION['Firstname'];?>" class="form-control" placeholder="<?php echo $lang['fullname'] ?>">
                    <span class="error text-danger"><?php echo $nameErr; ?></span>
                </div>
              </div>

               <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="village"><?php echo $lang['village'] ?></label>
                  <input type="text" id="village" name="village" value="<?php echo $_SESSION['village'];?>" class="form-control" placeholder="<?php echo $lang['village'] ?>">
                    <span class="error text-danger"><?php echo $nameErr; ?></span>
                </div>
              </div>

 <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname"><?php echo $lang['taluka'] ?></label>
                  <input type="text" id="taluka" name="taluka" value="<?php echo $_SESSION['taluka'];?>" class="form-control" placeholder="<?php echo $lang['taluka'] ?>">
                    <span class="error text-danger"><?php echo $nameErr; ?></span>
                </div>
              </div>

 <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="district"><?php echo $lang['district'] ?></label>
                  <input type="text" id="district" name="district" value="<?php echo $_SESSION['district'];?>" class="form-control" placeholder="<?php echo $lang['district'] ?>">
                    <span class="error text-danger"><?php echo $nameErr; ?></span>
                </div>
              </div>

 <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="state"><?php echo $lang['state'] ?></label>
                  <input type="text" id="state" name="state" value="<?php echo $_SESSION['state'];?>" class="form-control" placeholder="<?php echo $lang['state'] ?>">
                    <span class="error text-danger"><?php echo $nameErr; ?></span>
                </div>
              </div>


                   <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="job"><?php echo $lang['jobname'] ?></label>
                 <input type="text" id="job" name="job"  class="form-control" value="<?php echo $_GET['jobkey'] ?>">
                </div>
              </div>

                <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname"><?php echo $lang['email'] ?></label>
                  <input type="email" id="email" name="email" value="<?php echo $_SESSION['email'];?>" class="form-control" placeholder="<?php echo $lang['youremail'] ?>">
                    <span class="error text-danger"><?php echo $emailErr; ?></span>
                <input type="text" id="job_id" name="job_id" hidden="true" class="form-control" value="<?php echo $_GET['job_id'] ?>">
                </div>
              </div>

              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname"><?php echo $lang['mobileno'] ?></label>
                  <input type="text" id="phn" name="phn" value="<?php echo $_SESSION['mobile'];?>" class="form-control" placeholder="<?php echo $lang['phone'] ?>">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="<?php echo $lang['submit'] ?>" name="submit" class="btn btn-primary  py-2 px-5">
                    <input type="reset" value="<?php echo $lang['reset'] ?>" class="btn btn-primary  py-2 px-5">
                </div>
              </div>
</form>
</div>
</div>
</div></div>
  <?php include'footer.php'; ?>
  </body>
  </html>
