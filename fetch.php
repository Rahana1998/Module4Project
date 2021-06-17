<?php
include_once "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=devices-width,initail-scale=1.0">
        <title>Fetch</title>
        <link rel="stylesheet" href="cssfiles/header.css">
        <style>
        table
        {
            margin-left:375px;

        }
        tr,td{
            padding:10px;
        }
        body{
            background-color:white;

        }
        #employee
        {
            text-align:center;
        }
        </style>
        <body>
        <div class="nav">
                <img id="cntimg" src="Images/kblogo.png" alt="This image does not support your browser">
                <ul>
                    <li class="li"><a href="login.html">Login</a></li>
                    <li class="li"><a href="logout.php">Logout</a></li>
                    <li class="li"><a href="contact.html">Contact Us</a></li>
                    <li class="li"><a href="contact.html">About Us</a></li>
                    <li class="li"><a href="home.php">Home</a></li>
                </ul>
             </div><br>
             <h2 id="employee">Employee Details</h2>
             <table border="2" style="width:40%;float:left;">
             <tr>
                 <th>Id</th>
                 <th>First Name</th>
                 <th>Last Name</th>
                 <th>Gender</th>
                 <th>Mobile No</th>
                 <th>Email Id</th>
                 <th>Address</th>
    </tr>
    <?php
    $sql="SELECT * FROM empdetails";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
    ?>
                <tr>
                <td><?php echo $row['Id']?></td>
                <td><?php echo $row['Fname']?></td>
                <td><?php echo $row['Lname']?></td>
                <td><?php echo $row['Gender']?></td>
                <td><?php echo $row['Mobile']?></td>
                <td><?php echo $row['Email_id']?></td>
                <td><?php echo $row['Address']?></td>
                <td><a href="delete.php?id=<?php echo $row['Id'];?>">Delete</a></td>
                <td><a href="update.php?id=<?php echo $row['Id'];?>">update</a></td>
        </tr>
        <?php
        }
    }
    ?>
    </table>
</div>
</body>
    <html>


