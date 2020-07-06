<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EasyVest</title>

	<!-- JavaScript -->
	<script type="text/javascript" src="js/effects.js"></script>

	<!-- CSS Style -->
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Favicon -->
	<link rel="shortcut icon" href="images/favicon.ico"/>

</head>


<body>
	<!-- skip nav -->
	<div id="skip">
		<a href="#header_1">Header Principal</a>		
		<a href="#header_2">Header Secundário</a>
		<a href="#nav_1">Menu Principal</a>
		<a href="#nav_2">Menu Secundário</a>
		<a href="#contents">Conteúdo</a>
	</div>
	<!-- // skip nav -->

	<div id="wrap">
		
		<!-- header_1 -->
		<div id="header_1">
			<div>
				<div class="header_1-menu">
					<a href="https://github.com/swy-326/easyvest/">GitHub</a>
					<a href="univ/about.php">About</a>
				</div>
				<!-- // header_1 menu -->
				<div class="header_1-title">
					<div class="header_1-icon">
						<a href="http://easyvest.byethost9.com/">
							<img src="#" width="70" height="70"/>
						</a>
					</div>
					<h1>EasyVest</h1>
					<br>
					<a href="http://easyvest.byethost9.com/">easyvest.byethost9.com</a>
				</div>
				<!-- // header_1 title -->
			</div>		
		</div>
		<!-- // header_1 -->

		<!-- header_2 -->
		<div id="header_2">
			<div class="header_2-container">
				<div>
					<p>LISTA</p>
					<p>INFORMAÇÕES</p>
				</div>
			</div>		
			<!-- //header_2-container -->
		</div>
		<!-- // header_2 -->

		<!-- nav_1 -->
		<div id="nav_1">
			<div class="nav-main">
				<div>
					<ul>						
						<a href="calendar/index.php"><strong>CALENDÁRIO</strong></a><br><br>

						<a href="univ/enem.php"><strong>ENEM</strong></a>

						<br><br><strong>UNIVERSIDADES</strong>
						<li><a href="univ/famema.php">FAMEMA</a></li>
						<li><a href="univ/famerp.php">FAMERP</a></li>
						<li><a href="univ/fatec.php">FATEC</a></li>
						<li><a href="univ/ifsp.php">IFSP</a></li>
						<li><a href="univ/ita.php">ITA</a></li>
						<li><a href="univ/ufabc.php">UFABC</a></li>
						<li><a href="univ/ufscar.php">UFSCAR</a></li>
						<li><a href="univ/unesp.php">UNESP</a></li>
						<li><a href="univ/unicamp.php">UNICAMP</a></li>
						<li><a href="univ/unifesp.php">UNIFESP</a></li>
						<li><a href="univ/univesp.php">UNIVESP</a></li>
						<li><a href="univ/usp.php">USP</a></li>

					</ul>
				</div>
			</div>		
			<!-- // nav-main -->
		</div>
		<!-- // nav_1 -->
		
		<!-- nav_2 -->
		<div id="nav_2">
			<div class="nav-sub">
				<div>
					<?php
						echo $submenu;
					?>
				</div>
			</div>
			<!-- // nav-sub -->
		</div>
		<!-- // nav_2 -->

		<!-- contents -->
		<div id="contents">
			<div class="cont">
				<div class="cont-title">
					<?php
						echo $title;
					?>
				</div>
				<!-- //cont-title -->
				
				<div class="cont-cont">
					<?php
						echo $content;
					?>
				</div>	
				<!-- //cont-cont -->		
			</div>
		</div>
		<!-- // contents -->

		<!-- footer -->
		<div id="footer">
			<div class="footer-container">
				Copyright &copy; 2020, SWY. All Rights Reserved
			</div>
		</div>
		<!-- // footer -->
	
	
	</div>
</body>
</html>



