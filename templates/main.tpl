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

        {block name=main} Przykladowa zawartosc {/block}

    <div>
        {block name=content} Przykladowa zawartosc {/block}
    </div>

</div>


<!-- Footer -->
<footer id="footer">
    <ul class="copyright">
        <li>Design: <a href="http://html5up.net">HTML5 UP</a></li><li>Modified by Mateusz Ziarkiewicz</li>
    </ul>
</footer>

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