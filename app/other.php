<?php
require_once dirname(__FILE__).'/../config.php';
//ochrona widoku
include _ROOT_PATH.'/app/security/check.php';
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Kalkulator kredytowy</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header">
				<h1 id="logo"><a href="../app/calc.php">Prosty kalkulator kredytowy</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="../app/calc.php">Home</a></li>
						<li><a href="../app/other.php">Inna chroniona strona</a></li>
                        <li><a href="../app/security/logout.php">Wyloguj</a></li>
					</ul>
				</nav>
			</header>

			<!-- Four -->
				<section id="four" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2>Inna chroniona strona</h2>
							<p>Przykładowy tekst na stronie</p>
						</header>
						<pre>
							<code>
ArrayList int list = new ArrayList<>();
Random random = new Random();
for (int x = 0; x < 10; x ++) {
list.add(random.nextInt(100));
}

System.out.println("Lista przed sortowaniem:");
for (int x : list) {
System.out.print( x + " | ");
}

Collections.sort(list);

System.out.println("\nLista po sortowaniu:");
for (int x : list) {
System.out.print( x + " | ");
}

/*Lista przed sortowaniem:
22 | 60 | 5 | 19 | 5 | 4 | 31 | 13 | 23 | 73 |
Lista po sortowaniu:
4 | 5 | 5 | 13 | 19 | 22 | 23 | 31 | 60 | 73 |*/
							</code>
						</pre>

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