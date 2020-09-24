<?php
 	session_start();
	include('connect.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		$jobkey = $_POST['select'];
		$jobvillage = $_POST['jobvillage'];
		$jobtaluka = $_POST['jobtaluka'];
		$jobdistrict = $_POST['jobdistrict'];
		$jobstate = $_POST['jobstate'];
		$jobby = $_POST['jobby'];
		$jobdesc = $_POST['jobdesc'];
		$jobdate = date("Y-m-d H:i:s");

		$sql = "INSERT INTO jobs_master (jobkey,jobvillage,jobtaluka,jobdistrict,jobstate,jobby, jobdesc,jobdate)
			   VALUES ('$jobkey','$jobvillage','$jobtaluka','$jobdistrict','$jobstate','$jobby', '$jobdesc','$jobdate')";
		$result = mysqli_query($conn, $sql);
		if(!$result)
		{
			$msg = "Unable to upload Product !!!";
			header("Location: Login/error.php");
		}
		else {
			$msg = "successfull !!!";
			  header("Location: postjob.php");
		}
	}
	?>
