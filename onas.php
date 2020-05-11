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
				<li class="current_page_item"><a href="onas.php" accesskey="3" title-="">O nas</a></li>
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
			<img src="images/tlo2.jpg" alt="" class="image-full" />
		</div>
		<div id="welcome2" >
			<div class="title">
				<h2>O nas</h2>

		<p>
		Drogi Kliencie, dziękujemy, że nas odwiedziłeś i chcesz się więcej o nas dowiedzieć.
		Od niemal 20 lat zajmujemy się sprzedażą elektroniki użytowej przez internet.
		Ecommerce (sprzedaż przez internet) to nasze naturalne środowisko i właśnie w tym typie sprzedaży się specjalizujemy.
		Mamy nadzieję, że nasz sklep, jego opcje i funkcjonalności przypadną Ci do gustu.
	  </p>

	</br></br>	<span class="byline">Budujemy przyjazny i godny zaufania sklep</span></br>
		<img src="images/ikona1.png" alt="" class="image-full2" /></br>
		<p>
		Rozwijamy nasz sklep pod kątem <b>przyjaznych Klientom</b> zakupów.
		Pragniemy tworzyć miejsce, w którym będą one przebiegały komfortowo oraz z zachowaniem <b>najwyższych standardów bezpieczeństwa</b>.
		</p>
	</br></br>		<span class="byline">Gwarantujemy niskie ceny i szeroką ofertę</span>
</br><img src="images/ikona2.png" alt="" class="image-full2" /></br>
		<p>
		Jesteśmy jednym z <b>największych</b> sklepów online z elektroniką użytkową w Polsce. Dopasowanie asortymentu do potrzeb i oczekiwań Klientów sprawia,
		że obok blisko <b>milionowej oferty produktowej</b>,
		kupujący mogą często korzystać z <b>dodatkowych opcji zakupu</b> skracając np. czas dostawy lub wybierając jeszcze niższą cenę.
		</p>
	</br></br>			<span class="byline">Wykorzystujemy innowacyjność by oferować jeszcze więcej</span></br>
		<img src="images/ikona3.png" alt="" class="image-full2" /></br>
		<p>
		Wdrażamy funkcjonalności, które na każdym kroku pozwalają Klientom na <b>łatwe i wygodne zakupy</b>. Spośród nich wymienić możemy m.in. aplikację mobilną,
		 przejrzysty design i intuicyjny interfejs szyte na miarę mobile, uproszczoną strukturę koszyka, rozwiązania typu „kliknij i kup” czy zakupy bez rejestracji.
	  </p>
	</br></br>			<span class="byline">Stawiamy Klienta na pierwszym miejscu</span></br>
		<img src="images/ikona4.png" alt="" class="image-full2" /></br>
		<p>
	  Dedykowane kanały obsługi Klienta, specjalistyczna wiedza doradców, nieustanne podnoszenie kompetencji zespołów
	  i stałe doskonalenie procesów to działania, których celem jest <b>dostarczanie jak największej satysfakcji</b> z zakupów naszym Klientom.
		</p></div>
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
