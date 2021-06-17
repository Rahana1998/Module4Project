<?php
include_once "conn.php";
if(count($_POST)>0)
{
        $Id=$_POST['id'];
        $Firstname=$_POST['fname'];
        $Lastname=$_POST['lname'];
        $Gender=$_POST['gender'];
        $Mobile=$_POST['phone'];
        $Emailid=$_POST['email'];
        $Address=$_POST['add'];
mysqli_query($conn,"UPDATE empdetails set id='$Id',fname='$Firstname',lname='$Lastname',gender='$Gender',phone='$Mobile',email='$Emailid',add='$Address',fileToUpload='$Img' WHERE id=$Id");
$message="Record Modified Successfully";
}
$roll = ''; 
if( isset( $_GET['id'])) {
    $id = $_GET['id']; 
} 
$result=mysqli_query($conn,"SELECT * FROM empdetails WHERE Id='$roll'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Update</title>
        <link rel="stylesheet" href="cssfiles/update.css">
</head>
<body>
    <form name="form" method="POST" action="">
    <div>
        <?php if(isset($message)){ echo $message; }?>
</div>
<div id="empadd">
    <h2 id="det">Add Employee Details</h2>
    <div class="Emp_detail">
    <label>ID</label><br>
    <input type="text" name="id" class="emp"placeholder="Id" value="<?php echo $row['id'];?>"><br><br>
    </div>
     <div class="Emp_detail">
        <label>First Name </label><br>
        <input type="text" name="fname" class="emp" placeholder="First Name" value="<?php echo $row['fname'];?>"><br><br>
     </div>
    <div class="Emp_detail">
      <label>Last Name</label><br>
      <input type="text" name="lname" class="emp" placeholder="Last Name" value="<?php echo $row['lname'];?>"><br><br>
</div>
<div class="Emp_details">
        <label id="gen">Gender:</label>
            <input type="radio" name="gender" value="<?php echo $row['gender'];?>">
            <label id="male">Male</label>
            <input type="radio" name="gender" value="<?php echo $row['gender'];?>">
            <label id="female">Female</label>
            <input type="radio" name="gender" value="<?php echo $row['gender'];?>">
            <label id="other">Other</label><br><br>

</div>
<div class="Emp_detail">
        <label>Mobile No</label><br>
        <input type="text" class="emp" name="phone" placeholder="Mobile No"size="10"value="<?php echo $row['phone'];?>"><br><br>
</div>
<div class="Emp_detail">
     <label>Email Id</label><br>
        <input type="text" name="email" class="emp" placeholder="Email" value="<?php echo $row['email'];?>"><br><br>
</div>
<div class="Emp_detail">
        <label>Address</label><br>
        <textarea cols="52" rows="5" value="address"  class="emp_det" name="add" value="<?php echo $row['add'];?>">
        </textarea><br><br></div>
        <button type="submit" id="add" class="btn" name="submit">Submit</button>
</div>
</form>
</body>
</html>


