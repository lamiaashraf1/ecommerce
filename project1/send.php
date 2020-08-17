<?php 

$conn = new mysqli("localhost","root","","project1");
$conn -> set_charset("utf8");
$name = $_POST['name'];
$message = $_POST['message'];
$email = $_POST['email'];
$phone = $_POST['phone'];
if(!$name){
	echo "please enter your name";
}
elseif(!$message){
	echo "please enter your message";
}
elseif(!$email){
	echo "please enter your email";
}
elseif(!$phone){
	echo "please enter your phone";
}
else{
	$insert = "INSERT INTO message (name,message,email,phone)VALUES('$name','$message',$email','$phone')";
$conn->query($insert);

echo "Your Message Send Successfully";
}

