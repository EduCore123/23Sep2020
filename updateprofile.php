<?php
    session_start();
    require 'connect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
       $firstname = dataFilter($_POST['firstname']);
        $lastname = dataFilter($_POST['lastname']);
        $address = dataFilter($_POST['address']);
        $village = dataFilter($_POST['village']);
         $taluka = dataFilter($_POST['taluka']);
          $district = dataFilter($_POST['district']);
           $state = dataFilter($_POST['state']);
        // $email = dataFilter($_POST['email']);
        $username = dataFilter($_POST['username']);
        $gender= dataFilter($_POST['gender']);
        $mobile = dataFilter($_POST['mobile']);
        $password =dataFilter($_POST['password']); 


        $_SESSION['Firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['address'] = $address;
        $_SESSION['village'] = $village; 
        $_SESSION['taluka'] = $taluka;
        $_SESSION['district'] = $district; 
        $_SESSION['state'] = $state;
        // $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;
        $_SESSION['gender'] = $gender;
        $_SESSION['mobile'] = $mobile;
        $_SESSION['password'] = $password;
    }
    $uname = $_SESSION['username'];

    $sql = "UPDATE register SET firstname='$firstname',lastname='$lastname',address='$address',village='$village',taluka='$taluka',district='$district',state='$state',gender='$gender',mobile='$mobile',password='$password' WHERE username='$username';";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        $_SESSION['message'] = "Profile Updated successfully !!!";
        header("Location: profile.php");
    }
    else
    {
        $_SESSION['message'] = "There was an error in updating your profile! Please Try again!";
        header("Location: error.php");
    }

function dataFilter($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>
