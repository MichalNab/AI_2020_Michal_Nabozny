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
				<li><a href="oferta.php" accesskey="2" title="">Oferta</a></li>
				<li><a href="onas.php" accesskey="3" title-="">O nas</a></li>
				<li class="current_page_item"><a href="kontakt.php" accesskey="4" title="">Kontakt</a></li>
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
			<img src="images/kontakt.jpg" alt="" class="image-full" />
		</div>
		<div id="welcome">
			<div class="title">
				<h2>Sklep internetowy i serwis</h2></br>
				<span class="byline">Obsługa sklepu internetowego</span>
				<p>E-mail: <b>Kakutersklep@gmail.com</b></br>
				Telefon: <b>123 456 789</b></br></br>
				Godziny pracy:</br>
				Poniedziałek-Piątek <b>08:00-20:00</b><br>
				Sobota <b> 08:00-15:00</b></p>
				<span class="byline">Serwis</span>
				<p>E-mail: <b>Kakuterserwis@gmail.com</b></br>
				Telefon: <b>987 654 321</b></br></br>
				Godziny pracy:</br>
				Poniedziałek-Piątek <b>08:00-16:00</b><br>
				Sobota <b> 09:00-13:00</b></br></br>
				Adres:</br>
				<b>Uniwersytet Rzeszowski</b></br>
				<b>Aleja Rejtana 16c</b></br>
				<b>35-959 Rzeszów</b></br>
			</p>


				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2562.988709836661!2d22.01339121571622!3d50.03030737941961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spl!2spl!4v1589833986638!5m2!1spl!2spl" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>


		</div>

		<div id="copyright">
			<span>&copy; Nikt. Żadne prawa nie zastrzeżone. | Fotografie : <a href="https://www.shutterstock.com/pl/">Shutterstock</a></span>
			<span>Stworzone dzięki <a href="https://youtube.com" rel="nofollow">różnym poradnikom z YT</a>.</span>
		</div>
	</div>
</div>
</body>
</html>
