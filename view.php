<?php
    include_once "conn.php";
        $Id=$_POST['id'];
        $Firstname=$_POST['fname'];
        $Lastname=$_POST['lname'];
        $Gender=$_POST['gender'];
        $Mobile=$_POST['phone'];
        $Emailid=$_POST['email'];
        $Address=$_POST['add'];
        $sqli="INSERT INTO empdetails  VALUES('$Id','$Firstname','$Lastname','$Gender',' $Mobile','$Emailid','$Address')";
        if(mysqli_query($conn,$sqli))
        {
            echo"Employee Details Added Successfully";
        }
        else{
            echo"Failed";
        }        
        ?>