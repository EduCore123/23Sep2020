<?php
error_reporting(0);
session_start();
include"config.php";
?>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
       <img src="assets/images/Farms/logo.jpg" alt="logo" width="75" height="75">&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="navbar-brand" href="index.php"><?php echo $lang['title'] ?></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item "><a href="index.php" class="nav-link"> <?php echo $lang['home'] ?> </a></li>
            <li class="nav-item"><a href="about.php" class="nav-link"> <?php echo $lang['about'] ?>  </a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link"> <?php echo $lang['contact'] ?></a></li>
            <?php if ($_SESSION['type'] != "admin" && $_SESSION['type'] != "user") : ?>
                <li class="nav-item"><a href="login.php" class="nav-link"> <?php echo $lang['login'] ?>  </a></li>
            <?php endif; ?>


          <?php if ($_SESSION['type'] == "admin") : ?>
      <li class="nav-item cta mr-md-2"><a href="apply.php" class="nav-link"> <?php echo $lang['appliedjobs'] ?>  </a></li>
            <li class="nav-item cta mr-md-2"><a href="postjob.php" class="nav-link"> <?php echo $lang['postjob'] ?>  </a></li>

            <li class="nav-item cta mr-md-2"><a href="profile.php" class="nav-link"> <?php echo $lang['profile'] ?>  </a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link"> <?php echo $lang['logout'] ?>  </a></li>
            <?php endif; ?>

            <?php if ($_SESSION['type'] == "user") : ?>

            <li class="nav-item cta mr-md-2"><a href="jobs.php" class="nav-link"> <?php echo $lang['wantjob'] ?>  </a></li>
            <br>
            <li class="nav-item cta mr-md-2"><a href="profile.php" class="nav-link"> <?php echo $lang['profile'] ?>  </a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link"><?php echo $lang['logout'] ?>  </a></li>
            <?php endif; ?>


          <div class="language-link">
        <a class="language-link-item" href="index.php?lang=en"
            <?php if($lang == 'en'){?> style="color: #ff9900;"
            <?php } ?>>English</a> | <a class="language-link-item"
            href="index.php?lang=mar" <?php if($lang == 'mar'){?>
            style="color: #ff9900;" <?php } ?>>मराठी</a>
    </div>

 </ul>
        </div>
      </div>
    </nav>



<!-- मराठी -->
