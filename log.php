
<?php
session_start();
include('connect.php');
$msg="";

$username=$_POST['username'];

$password=$_POST['password'];
   $passwordHash = md5($password);
    $password= md5($password);

$type=$_POST['type'];


if(isset($_POST['submit'])){


    $sql="SELECT * FROM `register` WHERE username='$username' and password='$password' and type='$type' ";
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        $User = $result->fetch_assoc();
        $_SESSION['Firstname'] = $User['firstname'];
        $_SESSION['lastname'] = $User['lastname'];
        $_SESSION['address'] = $User['address'];
         $_SESSION['village'] = $User['village'];
          $_SESSION['taluka'] = $User['taluka'];
           $_SESSION['district'] = $User['district'];
            $_SESSION['state'] = $User['state'];
        $_SESSION['email'] = $User['email'];
        $_SESSION['username'] = $User['username'];
        $_SESSION['gender'] = $User['gender'];
        $_SESSION['mobile'] = $User['mobile'];
        $_SESSION['type'] = $User['type'];
        $_SESSION['password'] = $User['password'];
        $_SESSION['logged_in'] = true;

        header('Location:profile.php');
    } else {

      $msg='login unsuccuessful....please try again';


        if (password_verify($_POST['password'], $User['password']))
         {


            $_SESSION['Firstname'] = $User['firstname'];
            $_SESSION['lastname'] = $User['lastname'];
            $_SESSION['address'] = $User['address'];
               $_SESSION['village'] = $User['village'];
                  $_SESSION['taluka'] = $User['taluka'];
                     $_SESSION['district'] = $User['district'];
                        $_SESSION['state'] = $User['state'];
            $_SESSION['email'] = $User['email'];
            $_SESSION['username'] = $User['username'];
            $_SESSION['gender'] = $User['gender'];
            $_SESSION['mobile'] = $User['mobile'];
            $_SESSION['type']=$User['type'];
            $_SESSION['password'] = $User['password'];
            $_SESSION['logged_in'] = true;

            header("location: profile.php");
        } else {
            //echo mysqli_error($conn);
                $msg='login unsuccuessful....please try again';
            // header("location: login.php");
        }
    }
}

?>
