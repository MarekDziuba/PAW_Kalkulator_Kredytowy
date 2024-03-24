<?php //góra strony z szablonu 
include _ROOT_PATH.'../templates/top_cal.php';
?>

<!-- One -->
	<section class="spotlight style1 bottom" style="height: 70px;"></section>
	<section style="padding-top: 50px;">	
		<div class="content">
			<div class="container">
				<div class="row">	
					<div class="col-4 col-12-medium" style="float: left">
						
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
				</div>
				<div style="padding-left: 5%; padding-top: 1em; text-align: center;">
				<?php
				//wyświeltenie listy błędów, jeśli istnieją
				if (isset($messages)) {
					if (count ( $messages ) > 0) {
						echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; color:black; font-size:30px; min-width:25em;">';
						foreach ( $messages as $key => $msg ) {
							echo '<li>'.$msg.'</li>';
						}
						echo '</ol>';
					}
				}
				?>
					
				<?php if (isset($result)){ ?>
					<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff9966; color:black; font-size:30px; width:25em;">
					<?php echo 'Twoja miesięczna rata wynosi: <br>'.$result.' zl'; 
					echo ''?>
				</div>
				<?php } ?>
				</div>

			</div>
					
				
		</div>
	</div>
</section>
					



			

<?php //góra strony z szablonu 
include _ROOT_PATH.'/templates/bottom.php';
?>			