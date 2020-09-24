<?php session_start();
include('connect.php');
$isRegistered = "";
$firstname = $lastname = $address = $email = $username = $gender = $mobile =$type =$password  = $cpassword = $dor = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$firstnameErr = $lastnameErr = $addressErr = $emailErr =  $usernameErr = $mobileErr =  $passwordErr = $cpasswordErr = $dor =  "";
$b=true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $gender = test_input($_POST["opt"]);
  $address = test_input($_POST["address"]);
  $village = test_input($_POST["village"]);
  $taluka = test_input($_POST["taluka"]);
  $district = test_input($_POST["district"]);
  $state = test_input($_POST["state"]);
  $type= test_input($_POST["type"]);
  $dor = date("Y-m-d H:i:s");
  if (empty($_POST["firstname"])) {
    $firstnameErr = "*firstname is required";
    $b=false;
  } else {
    $firstname = test_input($_POST["firstname"]);
    if (!preg_match("/^[a-zA-Z]*$/",$firstname) || $firstname=='') {
      $firstnameErr = "*Only letters allowed ";
      $b=false;
    }
  }
  if (empty($_POST["lastname"])) {
    $lastnameErr = "*lastname is required";
    $b=false;
  } else {
    $lastname = test_input($_POST["lastname"]);
    if (!preg_match("/^[a-zA-Z]*$/",$lastname) || $lastname=='') {
      $lastnameErr = "*Only letters allowed ";
      $b=false;
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "*Email is required";
    $b=false;
  } else {
    $email = test_input($_POST["email"]);
    if (!preg_match("/^[a-zA-Z0-9\.]*@[a-z\.]{1,}[a-z]*$/",$email) || $email=='') {
      $emailErr = "*Enter a Valid Email";
      $b=false;
    }
  }

  if (empty($_POST["username"])) {
    $usernameErr = "*username is required";
    $b=false;
  } else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z0-9]*$/",$username) || $username=='') {
      $usernameErr = "*Only letters and numbers allowed";
      $b=false;
    }
    if (isset($_POST['username'])) {
      $username = $_POST['username'];
      $sql_u = "SELECT * FROM register WHERE username='$username'";
      $res_u = mysqli_query($conn, $sql_u);


      if (mysqli_num_rows($res_u) > 0) {
        $usernameErr = "Sorry... username already taken";
        $b=false;
      }
    }
  }
  if (empty($_POST["mobile"])) {
    $mobileErr = "*Contact Number is required";
    $b=false;
  } else {
    $mobile= test_input($_POST["mobile"]);
    if(!preg_match("/^[0-9]{10,10}$/",$mobile) || $mobile=='') {
      $mobileErr = "*Enter A Valid Contact Number";
      $b=false;
    }
  }

  if (empty($_POST["password"])) {
    $passwordErr = "*Password is required";
    $b=false;
  } else {
    $password = test_input($_POST["password"]);
    if (!preg_match("/^[a-zA-Z0-9]{5,}$/",$password) || $password=='') {
      $passwordErr = "*Enter minimum 5 characters ";
      $b=false;
    }
  }

  if (empty($_POST["confirm"])) {
    $cpasswordErr = "*Confirmation of Password is required";
    $b=false;
  } else {
    $cpassword = test_input($_POST["confirm"]);
    $password= test_input($_POST["password"]);
    $passwordHash = md5($password);
    if (strcmp($password,$cpassword)!=0) {
      $cpasswordErr = "*Password does not match ";
      $b=false;
    }
  }
}

if($b==true && isset($_POST['submit']))
{

  $isRegistered = false;
  $sql = "insert into register(firstname,lastname,address,village,taluka,district,state,email,username,gender,mobile,type,password,dor) values('$firstname','$lastname','$address','$village','$taluka','$district','$state','$email','$username','$gender','$mobile','$type','$passwordHash','$dor')";
  $res=$conn->query($sql);
  $sql1="select register_id from register where username='$username'";
  $result=$conn->query($sql1);
  $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
  $_SESSION['username']=$username;
  $_SESSION['id']=$row['register_id'];

  if($row['register_id']) {
    $isRegistered = true;
  }
}

?>
