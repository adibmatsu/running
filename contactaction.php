<?php
include 'conndb.php';

$sql="insert into users(username,address,email,telno) values
 ('$_POST[username]','$_POST[address]','$_POST[email]','$_POST[telno]')";
if(!mysqli_query($conn,$sql)){
		die ('Error: ' .mysqli_error($conn));
	}
	else {
echo "<script type='text/jscript'>alert('Registration has been submitted!')</script>";
header('refresh:0 url=viewuser.php');
    }
?>