<?php 

$conn = new mysqli("localhost","root","","project1");
$conn -> set_charset("utf8");
$comment = $_POST['comment'];
$name = $_POST['name'];
$email = $_POST['email'];

if(!$comment){
	echo "please enter your comment";
}
elseif(!$name){
	echo "please enter your name";
}
elseif(!$email){
	echo "please enter your email";
}

else{
	$insert = "INSERT INTO blog (comment,name,email)VALUES('$comment',$name',$email')";
$conn->query($insert);

echo "Your Message Send Successfully";
}

