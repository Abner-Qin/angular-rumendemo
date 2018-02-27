<?php
	$user=$_GET["user"];
	$pwd=$_GET["pwd"];
	if($user=="cainiao"&&$pwd=="123456"){
		echo '{"err":0,"msg":"登录成功"}';
	}else{
		echo '{"err":1,"msg":"登录失败"}';
	}
?>