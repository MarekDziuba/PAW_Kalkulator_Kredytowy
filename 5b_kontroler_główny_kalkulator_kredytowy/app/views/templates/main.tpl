<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>{$page_title|default:"Tytuł domyślny"}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="{$conf->app_url}assets/css/noscript.css" /></noscript>
		<noscript><link rel="stylesheet" href="{$conf->app_url}/../assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload landing">
		

			
			{block name=header}{/block}

			{block name=banner}{/block}

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

			{block name=content}{/block}

			{block name=source}{/block}

			{block name=footer}{/block}