
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Add Employee Details</title>
    <link rel="stylesheet" href="cssfiles/empadd.css">
</head>
<body>
    <div class="detail">
        <h2 id="Emp1"> Add Employee Details</h2>
        <form action="view.php" method="POST">
            <div class="Emp_detail">
                <label>Id</label>
                <input type="text" class="empdet" placeholder="Id" name="id" required><br><br>
            </div>
            <div class="Emp_detail">
            <label> Firstname </label>         
                <input type="text" class="empdet" placeholder="Firstname"  name="fname"  required> <br> <br>  
                <label> Lastname </label>         
                <input type="text"  class="empdet"name="lname" placeholder="Lastname" required><br><br> </div>
            <div class="Emp_details">
            <label id="gender">Gender</label>
            <input type="radio" name="gender" value="Male">
            <label id="male">Male</label>
            <input type="radio" name="gender" value="Female">
            <label id="female">Female</label>
            <input type="radio" name="gender" value="Other">
            <label id="other">Other</label><br><br> 
</div> 
<div class="Emp_detail">
<label>Mobile No  </label>     
<input type="text" class="empdet" name="phone" size="10"/> <br> <br> 
</div>
<div class="Emp_detail">
    <label>Email Id</label>
    <input type="text" name="email"  class="empdet" placeholder="Email" required><br><br>
</div>
<div class="Emp_detail">
    <label>Address</label>
    <textarea cols="75" rows="5" value="address"  class="emp_det" name="add" required>
        </textarea><br><br>
        </div>
        <button type="submit" id="add" class="btn" name="submit">ADD</button>
        </form>
    </div>
</div>
</body>
</html>

