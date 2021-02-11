<!DOCTYPE HTML>

<html>
	<head>
		<title>Kalkulator kredytowy</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php print(_APP_ROOT); ?>/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php print(_APP_ROOT); ?>/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="<?php print(_APP_ROOT); ?>/app/calc.php">Prosty kalkulator kredytowy</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="<?php print(_APP_ROOT); ?>/app/calc.php">Home</a></li>
							<li><a href="<?php print(_APP_ROOT); ?>/app/other.php">Inna chroniona strona</a></li>
                            <li><a href="<?php print(_APP_ROOT); ?>/app/security/logout.php">Wyloguj</a></li>

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
								<form method="post" action=""<?php print(_APP_URL);?>/app/calc.php">
									<div class="row gtr-uniform gtr-50">
										<div class="col-12">
											<input type="text" name="amo" id="id_amo" value="<?php out($amo); ?>" placeholder="Kwota kredytu" />
										</div>
										<div class="col-12">
											<input type="text" name="yr" id="id_yr" value="<?php out($yr ); ?>" placeholder="Liczba lat" />
										</div>
										<div class="col-12">
											<input type="text" name="pct" id="id_pct" value="<?php out($pct); ?>" placeholder="Oprocentowanie" />
										</div>

										<div class="col-12">
												<input type="submit" value="Oblicz" class=" button primary fit" />
										</div>
									</div>
								</form>
							</section>
                        <?php
                        //wyświeltenie listy błędów, jeśli istnieją
                        if (isset($messages)) {
                            if (count ( $messages ) > 0) {
                                echo '<ol style="background: #fff200; margin: 1em; margin-top: 2em; margin-right: 0em; margin-bottom: 2em; margin-left: 0em; padding: .4em 2em; border-radius: 5px; color: #000000;">';
                                foreach ( $messages as $key => $msg ) {
                                    echo '<li>'.$msg.'</li>';
                                }
                                echo '</ol>';
                            }
                        }
                        ?>

                        <?php if (isset($result)){ ?>
                            <div style="background: #1fadfa; margin: 1em; margin-top: 2em; margin-right: 0em; margin-bottom: 3em; margin-left: 0em; padding: .3em 1em; border-radius: 5px; color: #fff;">
                                <?php echo 'Miesięczna rata będzie wynosić ok. : '.number_format($result, 2,'.',''); ?>
                            </div>
                        <?php } ?>
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