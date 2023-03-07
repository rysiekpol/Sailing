<?php

	$db = get_db();

	$login = $_POST['name'];
	$password = $_POST['password'];
	$repeatPassword = $_POST['repeatPassword'];
	$mail = $_POST['email'];
	$current = $db->users->findOne(['login' => $login]);
	$regResult=0;

	if($current === NULL){
		if($password===$repeatPassword){
			$hash = password_hash($password, PASSWORD_DEFAULT);
			$fileDbObject = [
			  'login' => $login,
			'password' => $password,
			'email' => $mail
			];
			$db -> users ->insertOne($fileDbObject);
			$regResult=0;
		}else{
			$regResult=1;		
		}
	}else{
		$regResult = 2;		
	}
	header('Location: /login.php?resultcode='.$regResult);
?>