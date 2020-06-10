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
			<h1><a href="index.php">Kąkuter</a></h1>
			<span>Sklep internetowy</span>
		</div>
		<div id="menu">
			<ul>
				<li><a href="index.php" accesskey="1" title="">Strona główna</a></li>
				<li><a href="oferta.php" accesskey="2" title="">Oferta</a></li>
				<li><a href="onas.php" accesskey="3" title-="">O nas</a></li>
				<li><a href="kontakt.php" accesskey="4" title="">Kontakt</a></li>
				<li class="current_page_item"><a href="logowanie.php" accesskey="5" title="">Zaloguj się</a></li>
			</ul>
		</div>
	</div>
	<div id="main">
		<div id="banner">
			<img src="images/tlo.jpg" alt="" class="image-full" />
		</div>
		<div id="welcome">
			<div class="title">
				<h2>Utwórz konto</h2>
				<form action="includes/signup.inc.php" method="post">
				   <input type="text" name="uid" placeholder="Nazwa"></br></br>
				   <input type="text" name="mail" placeholder="E-mail"></br></br>
				   <input type="password" name="pwd" placeholder="Hasło"></br></br>
				   <input type="password" name="pwd-repeat" placeholder="Powtórz hasło"></br></br>
				   <button type="submit" name="signup-submit">Zarejestruj</button>


				</form>
				<?php
				 if(isset($_GET['error'])){
				   if($_GET['error'] == "emptyfields"){
				     echo '<p class="bad">Uzupełnij wszystkie pola</p>';
				   }
				   else if ($_GET['error'] == "invalidusernameandmail"){
				     echo '<p class="bad">Błędna nazwa użytkownika oraz e-mail</p>';
				   }
				   else if ($_GET['error'] == "invalidmail"){
				     echo '<p class="bad">Błędny e-mail</p>';
				   }
				   else if ($_GET['error'] == "passwordcheck"){
				     echo '<p class="bad">Błędnie powtórzone hasło</p>';
				   }
				   else if ($_GET['error'] == "usertaken"){
				     echo '<p class="bad">Użytkownik o takiej nazwie już istnieje</p>';
				   }
				   else if ($_GET['error'] == "invalidusername"){
				     echo '<p class="bad">Błędna nazwa uż</p>';
				   }
				 }
				 else if ($_GET["error"] == "noerrors"){
				    echo '<p class="good">ZAJESTROWANY POPRAWNIE</p>';
				 }

				?>
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
