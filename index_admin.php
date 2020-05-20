<?php
session_start();
if(!file_exists('users/' . $_SESSION['username'] . ' .xml')){
	header('Location:login.php');
	die;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Index PHP admin</title>
</head>

<body>
	<h2>Pozdrav , <?php echo $_SESSION['username']; ?></h2>
	<table>
	<tr>
		<th>Kor. ime</th>
		<th>Email</th>
	</tr>
	<?php
	$file=glob('users/*.xml');
	foreach($files as $file) 
	{
			$xml = new SimpleXMLElement ($file, 0, true);
			echo '
				<tr>
					<td>'. basename($file,'.xml') . '</td>
					<td>'. $xml->email . '</td>
				</tr>';
	}
	?>
	</table>
	<hr />
	<a href="logout.php">Logout</a>
</body>
</html>