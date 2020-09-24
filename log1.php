<?php
session_start();
include('connect.php');

if(!empty($_POST["submit"])) {

    $sql = "Select * from register where username = '" . $_POST["username"] . "'";
        if(!isset($_COOKIE["member_login"])) {
            $sql .= " AND password = '" . md5($_POST["password"]) . "'";
    }
    if(!isset($_COOKIE["type"])) {
            $sql .= " AND type = '" . ($_POST["type"]) . "'";
    }
        $result = mysqli_query($conn,$sql);
    $User = mysqli_fetch_array($result);
    if($User) {

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
            header('Location:profile.php');
            if(!empty($_POST["remember"])) {
                setcookie ("member_login",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
            } else {
                if(isset($_COOKIE["member_login"])) {
                    setcookie ("member_login","");

                }
            }
    } else {

        $msg = "Invalid Login";
    }
}
?>

