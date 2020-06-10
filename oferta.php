<?php
session_start();
?>
<!DOCTYPE html PUBLIC


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="stylee.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<div id="page" class="container">
	<div id="header">
		<div id="logo">
			<img src="images/logo.jpg" alt="" />
			<h1><a href="#">Kąkuter</a></h1>
			<span>Sklep internetowy</span>
		</div>
		<div id="menu">
			<ul>
				<li><a href="index.php" accesskey="1" title="">Strona główna</a></li>
				<li class="current_page_item"><a href="oferta.php" accesskey="2" title="">Oferta</a></li>
				<li><a href="onas.php" accesskey="3" title-="">O nas</a></li>
				<li><a href="kontakt.php" accesskey="4" title="">Kontakt</a></li>
				<?php
				if(isset($_SESSION['userId'])){
					echo '	<li><a href="konto.php" title="">Twoje konto</a></li>
					';
				}
				else{
						echo '	<li><a href="logowanie.php" title="">Zaloguj się</a></li>
						';
				}
				?>

			</ul>
		</div>
	</div>

	<div id="main">
		<div id="banner">
			<img src="images/tlo.jpg" alt="" class="image-full" />
		</div>
		<div id="welcome">
			<div class="title">
				<h2>Oferta sklepu</h2>
				<span class="byline">Wybierz kategorie</span>
			</div>
<form action="ofertakategorie.php" method="post">
			<button class="buttonOferta" type="submit" name="przedmiot" value="procesor">Procesor</button>
			<button class="buttonOferta" type="submit" name="przedmiot" value="Pamięć RAM">Pamięć RAM</button>
			<button class="buttonOferta" type="submit" name="przedmiot" value="Płyta główna">Płyta główna</button>
			<button class="buttonOferta" type="submit" name="przedmiot" value="Karta graficzna">Karta graficzna</button>
			<button class="buttonOferta" type="submit" name="przedmiot" value="Monitor">Monitor</button>
			<button class="buttonOferta" type="submit" name="przedmiot" value="Zasilacz">Zasilacz</button>
			<button class="buttonOferta" type="submit" name="przedmiot" value="Chłodzenie">Chłodzenie</button>
			<button class="buttonOferta" type="submit" name="przedmiot" value="Dyski twarde">Dyski twarde</button>
</form>
		<br>
		</div>

		<div id="copyright">
			<span>&copy; Nikt. Żadne prawa nie zastrzeżone. | Fotografie : <a href="https://www.shutterstock.com/pl/">Shutterstock</a></span>
			<span>Stworzone dzięki <a href="https://youtube.com" rel="nofollow">różnym poradnikom z YT</a>.</span>
		</div>
	</div>
</div>
</body>
</html>
