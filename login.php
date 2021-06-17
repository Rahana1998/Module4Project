<?php
include('conn.php');
$username=$_POST['uname'];
$password=$_POST['pwrd'];
 //to prevent from mysqli injection
 $username=stripcslashes($username);
 $password=stripcslashes($password);
 $username=mysqli_real_escape_string($conn,$username);
 $password=mysqli_real_escape_string($conn,$password);
 $sql="SELECT*FROM login where Username='$username' and Password='$password'";
 $result=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 $count=mysqli_num_rows($result);
 if($count==1)
 {
	 echo"<h1><center>Login Successful </center></h1>";
 }
  else
  {
	  echo"<h1>login failed.Invalid username or password.</h1>";
  }
  ?>
