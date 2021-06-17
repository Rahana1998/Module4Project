<?php
if (isset($_POST['submit'])) 
{
if (isset($_POST['uname'])) $email=$_POST['uname'];
if (isset($_POST['pwrd'])) $password=$_POST['pwrd'];
}
echo "$_POST[uname]";
echo "<br>";
echo "$_POST[pwrd]";
?>
