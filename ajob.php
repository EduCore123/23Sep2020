<?php
  session_start();
  include('connect.php');

    if(isset($_POST["submit"]))
      {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phn = $_POST['phn'];
        $village = $_POST['village'];
          $taluka = $_POST['taluka'];
            $district = $_POST['district'];
            $state = $_POST['state'];
        $dor = date("Y-m-d H:i:s");
        $job_id = $_POST['job_id'];
     $query = "insert into jobapply(name,email,phn,village,taluka,district,state,dor,job_id) values('".$name."','".$email."','".$phn."','".$village."','".$taluka."','".$district."','".$state."','".$dor."','".$job_id."')";
          $result= mysqli_query($conn,$query);
    if($result){
      header("Location:jobs.php");
    }else {
      header("Location: error.php");
          }


          }
  ?>
