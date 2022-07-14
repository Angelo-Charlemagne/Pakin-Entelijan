<?php
	include "PakinEntelijanServiceWeb.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>PAKIN ENTELIJAN</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  <style>
	  body {
		font: 400 15px Lato, sans-serif;
		line-height: 1.8;
		color: #818181;
	  }
	  .borderR{
		  border-right:1px solid red;
	  }
	  h2 {
		font-size: 24px;
		text-transform: uppercase;
		color: #303030;
		font-weight: 600;
		margin-bottom: 30px;
	  }
	  h4 {
		font-size: 19px;
		line-height: 1.375em;
		color: #303030;
		font-weight: 400;
		margin-bottom: 30px;
	  }  
	  .jumbotron {
		background-color: #f4511e;
		color: #fff;
		padding: 100px 25px;
		font-family: Montserrat, sans-serif;
	  }
	  .container-fluid {
		padding: 60px 50px;
	  }
	  .bg-grey {
		background-color: #f6f6f6;
	  }
	  .logo-small {
		color: #f4511e;
		font-size: 50px;
	  }
	  .logo {
		color: #f4511e;
		font-size: 200px;
	  }
	  .thumbnail {
		padding: 0 0 15px 0;
		border: none;
		border-radius: 0;
	  }
	  .thumbnail img {
		width: 100%;
		height: 100%;
		margin-bottom: 10px;
	  }
	  .carousel-control.right, .carousel-control.left {
		background-image: none;
		color: #f4511e;
	  }
	  .carousel-indicators li {
		border-color: #f4511e;
	  }
	  .carousel-indicators li.active {
		background-color: #f4511e;
	  }
	  .item h4 {
		font-size: 19px;
		line-height: 1.375em;
		font-weight: 400;
		font-style: italic;
		margin: 70px 0;
	  }
	  .item span {
		font-style: normal;
	  }
	  .panel {
		border: 1px solid #f4511e; 
		border-radius:0 !important;
		transition: box-shadow 0.5s;
	  }
	  .panel:hover {
		box-shadow: 5px 0px 40px rgba(0,0,0, .2);
	  }
	  .panel-footer .btn:hover {
		border: 1px solid #f4511e;
		background-color: #fff !important;
		color: #f4511e;
	  }
	  .panel-heading {
		color: #fff !important;
		background-color: #f4511e !important;
		padding: 25px;
		border-bottom: 1px solid transparent;
		border-top-left-radius: 0px;
		border-top-right-radius: 0px;
		border-bottom-left-radius: 0px;
		border-bottom-right-radius: 0px;
	  }
	  .panel-footer {
		background-color: white !important;
	  }
	  .panel-footer h3 {
		font-size: 32px;
	  }
	  .panel-footer h4 {
		color: #aaa;
		font-size: 14px;
	  }
	  .panel-footer .btn {
		margin: 15px 0;
		background-color: #f4511e;
		color: #fff;
	  }
	  .navbar {
		margin-bottom: 0;
		background-color: #f4511e;
		z-index: 9999;
		border: 0;
		font-size: 12px !important;
		line-height: 1.42857143 !important;
		letter-spacing: 4px;
		border-radius: 0;
		font-family: Montserrat, sans-serif;
	  }
	  .navbar li a, .navbar .navbar-brand {
		color: #fff !important;
	  }
	  .navbar-nav li a:hover, .navbar-nav li.active a {
		color: #f4511e !important;
		background-color: #fff !important;
	  }
	  .navbar-default .navbar-toggle {
		border-color: transparent;
		color: #fff !important;
	  }
	  footer .glyphicon {
		font-size: 20px;
		margin-bottom: 20px;
		color: #f4511e;
	  }
	  .slideanim {visibility:hidden;}
	  .slide {
		animation-name: slide;
		-webkit-animation-name: slide;
		animation-duration: 1s;
		-webkit-animation-duration: 1s;
		visibility: visible;
	  }
	  @keyframes slide {
		0% {
		  opacity: 0;
		  transform: translateY(70%);
		} 
		100% {
		  opacity: 1;
		  transform: translateY(0%);
		}
	  }
	  @-webkit-keyframes slide {
		0% {
		  opacity: 0;
		  -webkit-transform: translateY(70%);
		} 
		100% {
		  opacity: 1;
		  -webkit-transform: translateY(0%);
		}
	  }
	  @media screen and (max-width: 768px) {
		.col-sm-4 {
		  text-align: center;
		  margin: 25px 0;
		}
		.btn-lg {
		  width: 100%;
		  margin-bottom: 35px;
		}
	  }
	  @media screen and (max-width: 480px) {
		.logo {
		  font-size: 150px;
		}
	  }
	  </style>
	</head>
	<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			  </button>
			  <a class="navbar-brand" href="#myPage">PAKIN-ENTELIJAN</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="#facture">FACTURE</a></li>
				<li><a href="#payerFact">PAYER LA FACTURE</a></li>
				<li><a href="#about">&Agrave; PROPOS</a></li>
				<li><a href="#contact">CONTACT</a></li>
			  </ul>
			</div>
		  </div>
		</nav>

		<div class="jumbotron text-center">
		  <h1>PAKIN ENTELIJAN</h1> 
		  <p>Parking qui compte le temps de parking et émet une facture.</p> 
		  
		</div>
		<!-- Container (Facture Section) -->
		<div id="facture" class="container-fluid text-center">
		  <h2>FACTURE</h2>
		  <br>
		  <div class="row slideanim">
			<div class="col-sm-6 borderR">
			  <span class="glyphicon glyphicon-time logo-small"></span>
			  <h4><?php $dureeP=dureeGarage(); echo $dureeP." Secondes";?></h4>
			  <p>Dur&eacute;e du garage</p>
			</div>
			<div class="col-sm-6 ">
				<br/><br/>
			  <h4>FACTURE &Agrave; PAYER : <?php $montantG=facture($GLOBALS['dureeP']); echo $montantG." Gourdes";?></h4>
			  </div>
		  </div>
		</div>

		<!-- Container (Payer la facture Section) -->
		<div id="payerFact" class="container-fluid">
		  <div class="text-center">
			<h2>PAYER LA FACTURE</h2>
			<h4>Fonctionalit&eacute; &agrave; implementer dans une autre version</h4>
		  </div>
		</div>

		<!-- Container (A propos Section) -->
		<div id="about" class="container-fluid">
		  <div class="row">
			<div class="col-sm-8">
			  <h2>&Agrave; Propos</h2>
			 </div>
		  </div>
		</div>

		<div class="container-fluid bg-grey">
		  <div class="row">
			<div class="col-sm-4">
			  <span class="glyphicon glyphicon-globe logo slideanim">
				<img src=""/>
			  </span>
			</div>
			<div class="col-sm-8">
			  <h4>Un parking entièrement automatisé, calcule le temps de garage de différents véhicules et émet une facture qui après règlement ouvre la barrière de sortie (La gestion du paiement ne sera pas pris en compte dans ce projet). A l'entrée du parking, le conducteur reçoit une carte avec une puce RFID d'un distributeur et déclenche un compteur. Quand il se gare, un capteur de proximité placé à chaque place de parking indique que cette place n'est plus disponible. Le système associe le véhicule au compteur déclenché par le capteur de proximité. A la récupération du véhicule. L'éloignement du véhicule du capteur de proximité arrête le compteur. A la sortie, le conducteur dépose la carte avec la puce RFID dans une machine qui affiche les détails pour le véhicule en question (temps de garrage, prix, ...) et ouvre la barrière.</h4>
			 </div>
		  </div>
		</div>

		<!-- Container (Contact Section) -->
		<div id="contact" class="container-fluid bg-grey">
		  <h2 class="text-center">CONTACT</h2>
		  <div class="row">
			<div class="col-sm-5">
			  <p>Contacter nous pour de plus amples informations.</p>
			  <p><span class="glyphicon glyphicon-map-marker"></span> Port-au-Prince, HT</p>
			  <p><span class="glyphicon glyphicon-phone"></span> +509 00000000</p>
			  <p><span class="glyphicon glyphicon-envelope"></span> pakinentelijan@pakin.ht</p>
			</div>
			<div class="col-sm-7 slideanim">
			  <div class="row">
				<div class="col-sm-6 form-group">
				  <input class="form-control" id="name" name="name" placeholder="Nom" type="text" required>
				</div>
				<div class="col-sm-6 form-group">
				  <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
				</div>
			  </div>
			  <textarea class="form-control" id="comments" name="comments" placeholder="Message" rows="5"></textarea><br>
			  <div class="row">
				<div class="col-sm-12 form-group">
				  <button class="btn btn-default pull-right" type="submit">Send</button>
				</div>
			  </div>
			</div>
		  </div>
		</div>


		<footer class="container-fluid text-center">
		  <a href="#myPage" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		  </a>
		  <p>Pakin-Entelijan &copy; 2022</p>
		  <p>Angelo Dimitrov CHARLEMAGNE | Roberton C. PHILISTIN | Jean Paul GENISMA | 
		  Kesner SILIEN | Frandy DARIUS | Jean Eddy RIFIN </p>
		</footer>

		<script>
		$(document).ready(function(){
		  // Add smooth scrolling to all links in navbar + footer link
		  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
			// Make sure this.hash has a value before overriding default behavior
			if (this.hash !== "") {
			  // Prevent default anchor click behavior
			  event.preventDefault();

			  // Store hash
			  var hash = this.hash;

			  // Using jQuery's animate() method to add smooth page scroll
			  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
			  $('html, body').animate({
				scrollTop: $(hash).offset().top
			  }, 900, function(){
		   
				// Add hash (#) to URL when done scrolling (default click behavior)
				window.location.hash = hash;
			  });
			} // End if
		  });
		  
		  $(window).scroll(function() {
			$(".slideanim").each(function(){
			  var pos = $(this).offset().top;

			  var winTop = $(window).scrollTop();
				if (pos < winTop + 600) {
				  $(this).addClass("slide");
				}
			});
		  });
		})
		</script>

	</body>
</html>
