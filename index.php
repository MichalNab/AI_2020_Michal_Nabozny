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
				<li class="current_page_item"><a href="index.php" accesskey="1" title="">Strona główna</a></li>
				<li><a href="oferta.php" accesskey="2" title="">Oferta</a></li>
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
				<h2>Najlepsza oferta na rynku</h2>
				<span class="byline">Nie ma takiego drugiego super sklepu</span>
			</div>
			<?php
			if(isset($_SESSION['userId'])){
				echo '
				<p> Abarisa, Acisa, Adonisa, adonisa, Agisa, aksisa, aldisa, Alexisa, Aloisa, Amadisa, amarylisa, amaryllisa, Amicisa, anolisa, antropornisa, Anubisa, Apisa, Aramisa, bajkopisa, Baublisa, Borisa, Cacoyannisa, cassisa, cefalaspisa, Celtisa, Chrisa, Cisa, cisa, clematisa, Czeremisa, Davisa, Denisa, Dennisa, Dewajtisa, diakonisa, dinornisa, dipisa, disa, dziejopisa, eblisa, elemisa, Elvisa, Energisa, Fidelisa, fidelisa, flisa, Francisa, fraszkopisa, Golisa, hafisa, haliotisa, hamamelisa, Harrisa, helisa, hesperornisa, hipisa, hippisa, ibisa, iblisa, ichtiornisa, idisa, Idrisa, indrisa, infamisa, irbisa, ISA, Jarvisa, Juwenalisa, Kakojanisa, Karamanlisa, Kawafisa, Kempisa, klematisa, Kotsisa, Kubisa, kulisa, Kupisa, Kwisa, Landisa, Landsbergisa, latopisa, Laurentisa, Lelisa, Lewisa, Lisa, lisa, Louisa, Luisa, Magrisa, Marcjalisa, Marsalisa, melisa, Melisa, misa, Morisa, Morrisa, morrisa, Natalisa, nawisa, Nobisa, Norrisa, Novalisa, obwisa, Orisa, Otisa, Pakulnisa, Papisa, Paschalisa, Paunisa, pelisa, penisa, Pisa, plisa, Polarisa, polarisa, polisa, poobwisa, półmisa, Preisa, rozkisa, rymopisa, Santisa, Sarapisa, sarisa, Serapisa, sodalisa, Solarisa, spahisa, spisa, Staniszkisa, stefanotisa, syfilisa, szaulisa, sztukopisa, tenisa, tennisa, Tespisa, Theodorakisa, Travisa, Tutmosisa, urwisa, Vangelisa, Visa, visa, wierszopisa, Willisa, wisa, Witalisa, yarisa, zawisa, Zemeckisa, zisa, zwisa</p>
				';
			}
			else{
					echo '	<p>Zaloguj się  aby widzieć zawartość</p>
					';
			}
			?>
		<ul class="actions">

			</ul>
		</div>

		<div id="copyright">
			<span>&copy; Nikt. Żadne prawa nie zastrzeżone. | Fotografie : <a href="https://www.shutterstock.com/pl/">Shutterstock</a></span>
			<span>Stworzone dzięki <a href="https://youtube.com" rel="nofollow">różnym poradnikom z YT</a>.</span>
		</div>
	</div>
</div>
</body>
</html>
