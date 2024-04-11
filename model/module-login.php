<?php 



$action = $_GET['action'] ?? '';

if($action == 'logout' && ($_SESSION['loggedin'] ?? '') == 1 ){
	$_SESSION['loggedin'] = 0;
	header('Location: ./index.php');
	exit;
}


if($_POST){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	
	if ($username == 'admin' && $password == 'admin'){
		$_SESSION['loggedin'] = 1;
		header('Location: ./index.php');
		exit;
	}else{
		$_error[] = 'Invalid parameters';
	}
	
	
	if(!filter_var($loginemail, FILTER_VALIDATE_EMAIL))
		$_error[] = 'Incorrect email';
	
}

$page_output = [
	'page_title' => 'Login',
	'view' => 'module-login.php'

]



?>