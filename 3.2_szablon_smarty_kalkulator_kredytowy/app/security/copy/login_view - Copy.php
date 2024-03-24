<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Logowanie</title>
	<link rel="stylesheet" href="../../assets/css/main.css" />
	<link rel="stylesheet" href="../assets/css/main.css" />
</head>
<body>
<br/>
<!-- Header -->
<header id="header">
<h1 id="logo"><a href="calc.php"><img src="../images/Logo.png"></a></h1>
	<nav id="nav">
		<ul>
			<li>
			<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="button primary">Wyloguj</a>
			</li>
		</ul>
	</nav>
</header>
<br/>
<div style="width:90%; margin: 2em auto;">

<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post">
<legend style="text-align: center; font-size: 25px;">Logowanie</legend>
	<fieldset>
		<label for="id_login">Login: </label>
		<input id="id_login" type="text" name="login" value="<?php out($form['login']); ?>" />
		<br/>
		<label for="id_pass">Pass: </label>
		<input id="id_pass" type="password" name="pass" />
	</fieldset>
	<br/>
	<input type="submit" value="zaloguj"/>
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

</div>

</body>
</html>