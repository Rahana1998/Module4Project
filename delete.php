<?php
include_once "conn.php";
  $Id=$_GET['id'];
  $sql="DELETE FROM empdetails WHERE Id='$Id'";
  if(mysqli_query($conn,$sql))
  {
      echo "Record delete successfully";
  }
  else{
      echo "Error deleting record:".$conn->error;
  }
  ?>