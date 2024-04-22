{extends file="main.tpl"}

		{block name=header}
			<!-- Header -->
				<header id="header">
				<h1 id="logo""><a href="ctrl.php"><img src="images/Logo.png" style="width: 75px;"></a></h1>
					<nav id="nav">
						<ul>
							<li>
							<a id="role">Użytkownik: {$user->login}, Rola: {$user->role}</a>
							</li>
							<li>
							<a href="{$conf->action_url}logout" class="button primary">Wyloguj</a>
							</li>
						</ul>
					</nav>
				</header>
		{/block}

		{block name=banner}
		<section id="banner">
			<div class="content">
				<header>
					<h2>{$page_title|default:"Tytuł domyślny"}</h2>
					<p>Potrzebujesz kredytu/policzyć swoją zdolność kredytową?</p>
				</header>
				<span class="image"><img src="images/pic01.jpg" alt="" /></span>
			</div>
			<a href="#one" class="goto-next scrolly">Next</a>
		</section>
		{/block}

		{block name=content}
		<!-- One -->
	<br/>
	<section style="padding-top: 50px;" id="two">	
		<div class="content">
			<div class="container">
				<div class="row">	
					<div class="col-4 col-12-medium" style="float: left;">
						
					<form action="{$conf->action_root}calcCompute#res" method="post" id="res">
					<label for="id_x">Kwota kredytu (10 000zl - 300 000zl): </label>
					<input id="id_x" type="text" name="kredyt" value="{$form->kredyt}" /><br />
					<label for="id_y">Ile lat (5-20): </label>
					<input id="id_y" type="text" name="lat" value="{$form->lat}" /><br />
					<label for="id_z">
					{if $user->role == "admin"}
					Oprocentowanie (1%-99%):
					{else}
					Oprocentowanie (5%-20%):
					{/if}
					</label>
					<input id="id_z" type="text" name="oproc" value="{$form->oproc}" /><br />
					<input type="submit" value="Oblicz"/>
				</form>	
				</div>
				<div style="padding-left: 5%; padding-top: 1em; text-align: center;" id="res">
			
					{* wyświeltenie listy błędów, jeśli istnieją *}
			
					{if $msgs->isError()}
						<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; color:black; font-size:30px; min-width:25em;">
							{foreach $msgs->getErrors() as $err}
								{strip}
									<li>{$err}</li>
								{/strip}
							{/foreach}
						</ol>
					{/if}
			
					{if isset($res->result)}
					<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff9966; color:black; font-size:30px; width:25em;">
					Twoja miesięczna rata wynosi: <br>{$res->result} zl
				</div>
				{/if}
				</div>
			</div>	
		</div>
	</div>
</section>
<br/>
		
		<section id="one" class="spotlight style1 bottom">
				<span class="image fit main"><img src="images/pic02.jpg" alt="" /></span>
				<div class="content">
					<div class="container">
						<div class="row">
							<div class="col-4 col-12-medium">
								<header>
									<h2>{$page_title|default:"Tytuł domyślny"}</h2>
								</header>
							</div>
							<div class="col-4 col-12-medium">
								<p>Planujesz wziąć kredyt {$common_word_1|default:"hip1"} i szukasz odpowiedzi na pytanie 
								jak wybrać najkorzystniejszą ofertę? A może interesuje Cię kalkulator nadpłat {$common_word_2|default:"hip2"}? 
								Nasz kalkulator kredytowy może Ci w tym pomóc!</p>
							</div>
							<div class="col-4 col-12-medium">
								<p>Kalkulator {$common_word_1|default:"hip1"} pozwoli Ci zaoszczędzić czas i pieniądze, 
								uniknąć frustracji przy podejmowaniu ważnych decyzji finansowych oraz znaleźć najlepszą ofertę {$common_word_2|default:"hip2"} dla Ciebie. </p>
							</div>
						</div>
					</div>
				</div>
				<a href="#two" class="goto-next scrolly">Next</a>
			</section>
		
		
		<section class="wrapper style2 special fade">
			<div class="container">
				<header>
					<h2>Źródło</h2>
					<p>Widok oparty na stylach i szablonie <a href="https://html5up.net/landed" style="color: black">html5up.</a> (autor przykładu: {$page_author|default:"Nieznany"})</p>
					<p>{$page_description|default:"Brak"}</p>
				</header>
			</div>
		</section>
		{/block}
		

		{block name=footer}
<!-- Footer -->
<footer id="footer">
	<p>{$page_footer|default:"Stópka"}</p>
	<ul class="copyright">
		<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
	</ul>
</footer>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.scrolly.min.js"></script>
<script src="../assets/js/jquery.dropotron.min.js"></script>
<script src="../assets/js/jquery.scrollex.min.js"></script>
<script src="../assets/js/browser.min.js"></script>
<script src="../assets/js/breakpoints.min.js"></script>
<script src="../assets/js/util.js"></script>
<script src="../assets/js/main.js"></script>

</body>
</html>
{/block}
			