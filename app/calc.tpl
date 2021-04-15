<!DOCTYPE HTML>

<html>
	<head>
		<title>Kalkulator kredytowy</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{$app_url}/assets/css/main.css" />
        <link rel="stylesheet" href="{$app_url}/assets/css/other.css" />
		<noscript><link rel="stylesheet" href="{$app_url}/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="{$app_url}/app/calc.php">Prosty kalkulator kredytowy</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="{$app_url}/app/calc.php">Home</a></li>
							<li><a href="{$app_url}/app/other.php">Inna chroniona strona</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<div id="main" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2>Uproszczony kalkulator kredytowy</h2>
							<p>Spróbuj policzyć przybliżoną ratę kredytu</p>
						</header>

						<!-- Form -->
							<section>
								<h3>Kalkulator</h3>
								<form method="post" action="{$app_url}/app/calc.php">
									<div class="row gtr-uniform gtr-50">
										<div class="col-12">
                                            <input type="text" name="amo" id="id_amo" value="{$form['amo']}" placeholder="Kwota kredytu" />
                                        </div>
                                        <div class="col-12">
                                            <input type="text" name="yr" id="id_yr" value="{$form['yr']}" placeholder="Liczba lat" />
                                        </div>
                                        <div class="col-12">
                                            <input type="text" name="pct" id="id_pct" value="{$form['pct']}" placeholder="Oprocentowanie" />
                                        </div>

										<div class="col-12">
												<input type="submit" value="Oblicz" class=" button primary fit" />
										</div>
									</div>
								</form>
							</section>

						{* wyświeltenie listy błędów, jeśli istnieją *}
                        {if (isset($messages)) }
                            {if (count ( $messages ) > 0) }
								<p>Lista błędów:</p>
								<ol class="messages">
									{foreach $messages as $msg }
										{strip}
											<li>{$msg}</li>
										{/strip}
									{/foreach}
								</ol>
							{/if}
						{/if}

						{* wyświeltenie listy informacji, jeśli istnieją *}
						<div>
						{if (isset($infos)) }
                        	{if (count ( $infos ) > 0) }
								<p>Lista informacji:</p>
								<ol class="infos">
									{foreach $infos as $msg }
										{strip}
											<li>{$msg}</li>
										{/strip}
									{/foreach}
                            {/if}
                        {/if}
						</div>

						{* wyświeltenie rezultatu *}
						{if (isset($result)) }
							<p>Miesięczna rata będzie wynosić:</p>
							<div class="result">
								{$result|string_format:"%.2f"}
                            </div>
						{/if}

					</div>
				</div>

			<!-- Footer -->
				<footer id="footer">
					<ul class="copyright">
						<li>Design: <a href="http://html5up.net">HTML5 UP</a></li><li>Modified by Mateusz Ziarkiewicz</li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
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