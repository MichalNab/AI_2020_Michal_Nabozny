
<!DOCTYPE html PUBLIC

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
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
				<li><a href="#" accesskey="2" title="">Oferta</a></li>
				<li><a href="#" accesskey="3" title="">O nas</a></li>
				<li><a href="#" accesskey="4" title="">Kontakt</a></li>
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
				<h2>Logowanie</h2></br>
				<form action="includes/login.inc.php" method="post">
	        <input type="text"  name="mailuid" placeholder="Nazwa lub E-mail"></br></br>
	            <input type="password"  name="pwd" placeholder="Hasło"></br></br>
	            <button type="submit" name="login-submit">Zaloguj</button>
	        </form>
			</div>
			<h2>Nie masz jeszcze konta?</h2>
		<a href="rejestracja.php">Zarejestruj się</a><ul class="actions">

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
