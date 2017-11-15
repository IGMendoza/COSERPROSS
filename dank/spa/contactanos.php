<!--
	File:		Home.html
	Author:		Inti Mendoza
	Comments:	contactanos
-->

<!DOCTYPE html>

<html id = "contact_us">
	<head>
		<title>COSERPROSS | Cooperativa de Servicios Profesionales Simiente de Saber</title>
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css">
		<meta name = "home" content = "width = device-width initial-scale = 1">
		<meta charset = "UTF-8">
	</head>
	<body>
		<header>
			<div class = "menu_bar">
				<a href="home.html"><img src = "../media/logo/logo2.png"/></a>
				<a href="#" class = "bt-menu"><img src = "../media/icons/menu_list.png" style = "width:30px;height:30px"/></a>
			</div>
			<h1 id = "logo">
				<a href = "home.html"><img src = "../media/logo/logo1.png"/></a>
			</h1>
			<nav>
			<ul id = "navbar">
				<li><a href = "nosotros.html">Nosotros</a></li>
				<li><a href = "blog.html">Blog</a></li>
				<li class = "dropdown">
					<a href = "cooperativas.html" class = "dropbtn">Cooperativas</a>
					<div class = "dropdown-content">
						<a href = "#">Cooperativa 1</a>
						<a href = "#">Cooperativa 2</a>
						<a href = "#">Cooperativa 3</a>
					</div>
				</li>
				<li><a href = "contactanos.php">Contáctanos</a></li>
				<li><a href = "#">Iniciar Sesión</a></li>
				<li class = "dropdown" id = "nav-flag">
					<a href = "javascript:void(0)" class = "dropbtn"><img src = "../media/icons/LAN_flag.png" style = "width: 23px;"/></a>
						<div class = "dropdown-content">
							<a href = "../en/contactanos.php"><img src = "../media/icons/EN_flag.png" style = "width:23px"/></a>
							<a href = "../de/contactanos.php"><img src = "../media/icons/DE_flag.png" style = "width:23px"/></a>
						</div>
					</div>
				</li>
				<li id = "all_flags">
					<a href = "../en/contactanos.php"><img src = "../media/icons/EN_flag.png" style = "width:23px"/></a>
					<a href = "../de/contactanos.php"><img src = "../media/icons/DE_flag.png" style = "width:23px"/></a>
				</li>
			</ul>
			</nav>
		</header>
		<section>
			<!--
			<div class = "slideshow">
				<div class = "slideshow-container">
					<div class = "mySlides fade">
						<div class = "numbertext">1 / 5</div>
						<img src="../media/photos/brekfest.jpg" style = "width:100%">
					</div>

					<div class = "mySlides fade">
						<div class = "numbertext">2 / 5</div>
						<img src="../media/photos/cat_thug_life_1.jpg" style = "width:100%">
					</div>

					<div class = "mySlides fade">
						<div class = "numbertext">3 / 5</div>
						<img src="../media/photos/dog_thug_life_1.jpg" style = "width:100%">
					</div>

					<div class = "mySlides fade">
						<div class = "numbertext">4 / 5</div>
						<img src="../media/photos/dog_thug_life_2.jpg" style = "width:100%">
					</div>

					<div class = "mySlides fade">
						<div class = "numbertext">5 / 5</div>
						<img src="../media/photos/dog_thug_life_3.jpg" style = "width:100%">
					</div>
					<a class = "prev" onclick = "plusSlides(-1)">&#10094</a>
					<a class = "next" onclick = "plusSlides(1)">&#10095</a>
				</div>
				
				<br>

				<div style = "text-align: center">
					<span class = "dot" onclick = "currentSlide(1)"></span>
					<span class = "dot" onclick = "currentSlide(2)"></span>
					<span class = "dot" onclick = "currentSlide(3)"></span>
					<span class = "dot" onclick = "currentSlide(4)"></span>
					<span class = "dot" onclick = "currentSlide(5)"></span>
				</div>
			</div>
			-->
			<script>
				var slideIndex = 1;
				showSlides(slideIndex);

				function plusSlides(n) {
					showSlides(slideIndex += n);
				}

				function currentSlide(n) {
					showSlides(slideIndex = n);
				}

				function showSlides(n) {
					var i;
					var slides = document.getElementsByClassName("mySlides");
					var dots = document.getElementsByClassName("dot");
					if (n > slides.length) {slideIndex = 1}	 
					if (n < 1) {slideIndex = slides.length}
					for (i = 0; i < slides.length; i++) {
						slides[i].style.display = "none";  
					}
					for (i = 0; i < dots.length; i++) {
						dots[i].className = dots[i].className.replace(" active", "");
					}
					slides[slideIndex-1].style.display = "block";  
					dots[slideIndex-1].className += " active";
				}
			</script>

			<div class = "social_media">
				<iframe src="https://www.facebook.com/plugins/follow.php?href=https%3A%2F%2Fwww.facebook.com%2Fzuck&width=200&height=80&layout=standard&size=small&show_faces=true&appId" width="200" height="120" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			</div>

			 <div id="map"></div>
			<script>
				function initMap() {
					var uluru = {lat: 13.851, lng: -86.3630};
					var map = new google.maps.Map(document.getElementById('map'), {
						zoom: 4,
						center: uluru,
						styles: [
							{elementType: 'geometry', stylers: [{color: '#242f3e'}]},
							{elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
							{elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
							{
								featureType: 'administrative.locality',
								elementType: 'labels.text.fill',
								stylers: [{color: '#d59563'}]
							},
							{
								featureType: 'poi',
								elementType: 'labels.text.fill',
								stylers: [{color: '#d59563'}]
							},
							{
								featureType: 'poi.park',
								elementType: 'geometry',
								stylers: [{color: '#263c3f'}]
							},
							{
								featureType: 'poi.park',
								elementType: 'labels.text.fill',
								stylers: [{color: '#6b9a76'}]
							},
							{
								featureType: 'road',
								elementType: 'geometry',
								stylers: [{color: '#38414e'}]
							},
							{
								featureType: 'road',
								elementType: 'geometry.stroke',
								stylers: [{color: '#212a37'}]
							},
							{
								featureType: 'road',
								elementType: 'labels.text.fill',
								stylers: [{color: '#9ca5b3'}]
							},
							{
								featureType: 'road.highway',
								elementType: 'geometry',
								stylers: [{color: '#746855'}]
							},
							{
								featureType: 'road.highway',
								elementType: 'geometry.stroke',
								stylers: [{color: '#1f2835'}]
							},
							{
								featureType: 'road.highway',
								elementType: 'labels.text.fill',
								stylers: [{color: '#f3d19c'}]
							},
							{
								featureType: 'transit',
								elementType: 'geometry',
								stylers: [{color: '#2f3948'}]
							},
							{
								featureType: 'transit.station',
								elementType: 'labels.text.fill',
								stylers: [{color: '#d59563'}]
							},
							{
								featureType: 'water',
								elementType: 'geometry',
								stylers: [{color: '#17263c'}]
							},
							{
								featureType: 'water',
								elementType: 'labels.text.fill',
								stylers: [{color: '#515c6d'}]
							},
							{
								featureType: 'water',
								elementType: 'labels.text.stroke',
								stylers: [{color: '#17263c'}]
							}
						  ]

					});
					var marker = new google.maps.Marker({
						position: uluru,
						map: map
					});
				}
			</script>
			<script async defer
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5qm7F_9eZALumEgtaXN8DWhm8kmNKvK4&callback=initMap">
			</script>

			<div class = "enviar_mensaje">
				<div id = "env_msg_h">
				Envíanos un mensaje!<br>
				</div>
				<form action = "contact-us-send.php" method = "post">
					<ul style="list-style: none" id = "input-form">
						<li>
							<label for = "name"><br>Tu Nombre:<br></label>
							<input type = "text" id = "name" name = "name" placeholder = "Nombre.." />
						</li>
						<li>
							<label for = "email">Tu Email:<br></label>
							<input type = "text" id = "email" name = "email" placeholder = "Email..">
						</li>
						<li>
							<label for = "message">Tu Mensaje:<br></label>
							<textarea name = "message" id = "message" rows = "5" placeholder = "Mensaje.."></textarea>
						</li>
						<li>
							<input type = "submit" name = "submit" value = "Enviar Mensaje"/>
						</li>
					</ul>
				</form>
			</div>
			<br><br><br><br><br>
		</section>
	<script src = "../js/jquery-latest.js"></script>
	<script src = "../js/menu.js"></script>

	</body>
</html>