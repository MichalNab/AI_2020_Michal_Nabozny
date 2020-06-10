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
				<h2>Najlepsza oferta na rynku</h2>
				<span class="byline">Nie ma takiego drugiego super sklepu</span>
			</div>

			<?php
require 'includes/dbh.inc.php';
	$przedmiot=$_POST['przedmiot'];
	$nazwa=$_POST['nazwa'];
	$cenaod=$_POST['cenaod'];
	$cenado=$_POST['cenado'];
	if($nazwa=="Nazwa" && $cenaod=="Cena od" && $cenado=="Cena do"){
		echo "JD";
	}
	else{
	$wynik = mysqli_query($conn,"SELECT * FROM produkty WHERE rodzajProduktu = '$przedmiot' AND nazwaProduktu LIKE '%$nazwa%';");

if (mysqli_num_rows($wynik)!=0){
	while ($row = mysqli_fetch_array($wynik)) {

		echo " ". $row['rodzajProduktu'] ."</br> ";
		echo " " . $row['nazwaProduktu'] . "</br> ";
		echo " " . $row['cenaProduktu'] . "</br> ";
			echo " " . $row['opisProduktu'] . " </br>";
}}
else{
	echo "Brak produktu w ofercie"."</br>"."</br>";
	echo "Przepraszamy";
}}
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
<?php
$polaczenie = new mysqli('localhost', 'root', '', 'apka');
if (!$polaczenie) {
    die('Could not connect: ' . mysql_error());
}
$wynik = mysqli_query($polaczenie, "SELECT * FROM auta WHERE 1");
while ($row = mysqli_fetch_array($wynik)) {
	echo "<article style=text-align:center><form action=potwierdzenie.php method=post>";
	echo "<img src=". $row['img'] ." >";
	echo " ". $row['Marka'] ."";
	echo " " . $row['Model'] . "";
	echo " " . $row['Cena'] . " ";
	echo "<input type=hidden name=id_auta value=$row[id_auta]>";
	echo "<input type=hidden name=img value=$row[img]>";
	echo "<input type=hidden name=Marka value=$row[Marka]>";
	echo "<input type=hidden name=Model value=$row[Model]>";
	echo "<input type=hidden name=Cena value=$row[Cena]>";
	echo "<button class='dodaj' value=cos type=submit><span>Wypożycz </span></button></form></article>";
}
?>
