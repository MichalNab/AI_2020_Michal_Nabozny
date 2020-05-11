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
				<li ><a href="index.php" accesskey="1" title="">Strona główna</a></li>
				<li><a href="oferta.php" accesskey="2" title="">Oferta</a></li>
				<li><a href="onas.php" accesskey="3" title-="">O nas</a></li>
				<li><a href="kontakt.php" accesskey="4" title="">Kontakt</a></li>
				<?php
				if(isset($_SESSION['userId'])){
					echo '	<li class="current_page_item"><a href="konto.php" title="">Twoje konto</a></li>
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
				<h2>Najlepsza oferta na rynku</h2>
				<span class="byline">Nie ma takiego drugiego super sklepu</span>
			</div>
			<?php
			if(isset($_SESSION['userId'])){
				echo '
				<p>To jest Twoje konto</p>
				<form class="buttona" action="includes/logout.inc.php" method="post">
				<button type="submit" name="logout-submit">
				Wyloguj się</button>
				';
			}
			else{
					echo '	<p>Zaloguj się  aby widzieć zawartość</p>
					';
			}
			?>
		<p>tu beda rozne informacje</P><br>
					<p>tu beda rozne informacje</P><br>
								<p>tu beda rozne informacje</P><br>
											<p>tu beda rozne informacje</P><br>
												
		</div>

		<div id="copyright">
			<span>&copy; Nikt. Żadne prawa nie zastrzeżone. | Fotografie : <a href="https://www.shutterstock.com/pl/">Shutterstock</a></span>
			<span>Stworzone dzięki <a href="https://youtube.com" rel="nofollow">różnym poradnikom z YT</a>.</span>
		</div>
	</div>
</div>
</body>
</html>
