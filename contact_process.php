<?php

$username = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if(empty($username) || empty($email) || empty($message)){
	echo "请输入完整留言后提交";
}else{

	echo "姓名：".$username."<br>"."邮箱：".$email."<br>"."留言：".$message;
}




