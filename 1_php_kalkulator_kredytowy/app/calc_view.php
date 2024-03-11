<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="id_x">Kwota kredytu (10 000zl - 300 000zl): </label>
	<input id="id_x" type="number" name="x" min="10000" max="300000" value="<?php isset($x)? print($x):"Wpisz liczbe" ?>" /><br />
	<label for="id_y">Ile lat (5-20): </label>
	<input id="id_y" type="number" name="y" min="5" max="20" value="<?php isset($y)? print($y):"Wpisz liczbe" ?>" /><br />
	<label for="id_z">Oprocentowanie (5%-20%): </label>
	<input id="id_z" type="number" name="z" min="5" max="20" value="<?php isset($z)? print($z):"Wpisz liczbe" ?>" /><br />
	<input type="submit" value="Oblicz" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Miesięczna rata: '.$result.'zl'; ?>
</div>
<?php } ?>

</body>
</html>