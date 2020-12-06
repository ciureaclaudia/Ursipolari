<?php
$username = $_POST['username'];
$email = $_POST['email'];
if(!empty($username) || !empty($email))
{
 $host = "localhost";
 $dbUsername = "root";
 $dbname="inregistrare";
 $conn = new mysqli($host, $dbUsename, $email);
  if(mysqli_connect_error())
  { die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
 
 } else {
	 $SELECT ="SELECT email From register Where email =? Limit 1";
	 $INSERT ="INSERT Into register(username, email) values(?,?)";
 }
  else { echo "all field are required";
         die();
}
?>