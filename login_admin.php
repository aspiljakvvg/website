<?php
$error =false;
if(isset($_POST['login_admin'])){
	$username =preg_replace('/[^A-Za-z]/', '', $_POST['username']);
	$password=md5($_POST['password']);
	if(file_exists('users/' . $username . '.xml')){
		$xml= new SimpleXMLElement('users/' . $username. '.xml', 0, true);
		if($password ==$xml->password){
			session_start();
			$_SESSION['username'] = $username;
			header('Location :mainpagespecial.php');
			die;
		}
	}
	$error=true;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login XML</title>
</head>

<body>
	<form method="post" action="">
		<p>Korisnicko ime <input type="text" name="username" size="20" /></p>
		<p>Password <input type="password" name="password" size="20" /></p>
		<?php
			if($error) {
				echo '<p>Krivi username ili password</p>';
			}
		?>
		<p><input type="submit" value="Login" name="login"/></p>
	</form>
	<a href="register_admin.php">Registracija</a>
</body>
</html>
