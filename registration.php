
<?php
session_start();
include "ConnectionUtil.php";
//$dbhost = 'localhost';
//$dbuser = 'root';
//$dbpass = '';
$conn=beginConnection();
if(! $conn )
{
  die('Could not connect: ' . mysqli_error());
}


$lname=$_POST['lname'];
$fname=$_POST['fname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$events=$_POST['events'];
$guestNumber=$_POST['guestNumber'];
$message=$_POST['message'];
$date=$_POST['date'];

$sql="insert into  register values ('". $fname ."','".$lname ."','". $date."','".$events ."','".$phone ."','".$email ."',".$guestNumber .",'".$message ."');";
echo $sql;
$res= mysqli_query($conn,$sql);
//echo "hii";
//echo $res;
if($res)
{
	
	header("location:index.html");
	
}	

?>

	

