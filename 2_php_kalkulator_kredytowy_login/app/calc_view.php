<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">
<form action="<?php print(_APP_ROOT);?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
	<label for="id_x">Kwota kredytu (10 000zl - 300 000zl): </label>
	<input id="id_x" type="text" name="kredyt" value="<?php out($kredyt) ?>" /><br />
	<label for="id_y">Ile lat (5-20): </label>
	<input id="id_y" type="text" name="lat" value="<?php out($lat) ?>" /><br />
	<label for="id_z">
		<?php
		if($role == 'admin'){
		echo 'Oprocentowanie (1%-99%):';
		} else {
		echo 'Oprocentowanie (5%-20%):';
		}
		?>
	</label>
	<input id="id_z" type="text" name="oproc" value="<?php out($oproc) ?>" /><br />
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary"/>
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
	<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff0; width:25em;">
	<?php echo 'Miesięczna rata: '.$result.'zl'; ?>
</div>
<?php } ?>

</div>

</body>
</html>