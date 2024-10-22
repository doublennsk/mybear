<!DOCTYPE html>
<html>
    <head>
        <title>สีรถยนต์ ร้านศิรินกานต์เพ้นท์</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
		<link rel="stylesheet" href="login.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

<?php
    session_start();
	include("connect.php");
	
	if($_POST["ok"] <> ""){
		$email = $_POST["email"];
		$pass  = $_POST["pass"];
		
		$sql = "select * from administrator where email='$email' and pass='$pass'";
        $result = mysql_query($sql);
		$num = mysql_num_rows($result); 
		
		if($num == 1){
			$row = mysql_fetch_array($result);
			$_SESSION["session"] = session_id();
			$_SESSION["memid"]   = $row["memid"];
			$_SESSION["fname"]   = $row["fname"];
			$_SESSION["lname"]   = $row["lname"];
			$_SESSION["status"]  = $row["status"];
			
			if($_SESSION["status"]==0){
				echo "<script>alert('ยินดีต้อนรับผู้ดูแลระบบ');window.location='member/index.php?page=dashboard.php';</script>";
			}else{
				echo "<script>alert('ยินดีต้อนรับพนักงาน');window.location='admin/index.php?page=dashboard.php';</script>";	
			}
		}else{
			echo "<script>alert('email กับ password ไม่ถูกต้อง');window.location='index.php;</script>";
		}
	}

?>

    <div class="wrapper">
        <h3>ลงชื่อเข้าใช้</h3>
            <form action="#" method="post">
				<div class="form-group">
					<label for="email">Email address:</label>
					<input type="email" class="form-control" id="email" name="email">
				</div>
				<div class="form-group">
					<label for="pass">Password:</label>
					<input type="password" class="form-control" id="pass" name="pass">
				</div>
				
				<div class="pass">Forget Password?</div>
				<input type="submit" value="เข้าสู่ระบบ">
				<input type="hidden" name="ok" value="login">
            </form>
    </div>


	