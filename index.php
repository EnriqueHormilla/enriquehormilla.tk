<!--
****************************************************************
			Página en construcción
****************************************************************
 -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Enrique Hormilla CV </title>
	<meta name="author" content="Enrique Hormilla Aragón" />
	<meta name="description" content="Pagina de presentación de mi cv,esta página esta en construcción" />
	<meta name="keywords"  content="Pagian de presentacion,CV,Enrique" />
	<meta name="Resource-type" content="Document" />
<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
<!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" type="text/css" href="css/style.css" />

</head>
<body>

<?php include ("./modules/header/header.php"); ?>

<div id="fullpage">

	<?php
		for ($i = 0; $i <= 3; $i++) {
			include("./modules/section/section".$i.".php");
		}
	?>

</div>
<footer>

</footer>

	<script type="text/javascript" src="js/jquery(2.1.1).min.js"></script>
	<script type="text/javascript"src="js/jquery-ui.min.js"></script>

	<script type="text/javascript" src="js/materialize.js"></script>
	<script type="text/javascript" src="js/jquery.fullPage.js"></script>

	<script type="text/javascript">

		$(document).ready(function() {
			//Habilita la opcion de hamburgesa en formato movil
			$(".button-collapse").sideNav();

			$('#fullpage').fullpage({
				'verticalCentered': true,
				'css3': true,
				'sectionsColor': ['#F0F2F4', '#fff', '#fff', '#fff'],
				'navigation': true,
				'navigationPosition': 'right',
				'navigationTooltips': ['fullPage.js', 'Powerful', 'Amazing', 'Simple'],
				//Hace que cuando el tamaño sea inferior a eso no funcione el efecto paginacion
				'responsiveWidth': 1000,
				'responsiveHeight': 600,
				//Hablilita la opcion de loopin para top y botton

				'anchors': ['page0', 'page1', 'page2','page3'],
				'menu': '.menu',
				'loopTop': true,
				'loopBottom': true,
								//Produce como un efecto rebote en el bottom interesante NO BORRAR
								//'easingcss3': 'cubic-bezier(0.175, 0.885, 0.320, 1.275)',
				'afterRender': function(){

					//playing the video
					$('video').get(0).play();
				},
				'afterLoad': function(anchorLink, index){
					if(index == 2){
						$('#iphone3').addClass('active');
						//Ejemplo para pomer la imagen 3 con un delay a la izquierda
							// $('#section1').find('#iphone3').delay(900).animate({
								// left: '-45%'
							// }, 1500, 'easeOutExpo');
					}
					if(index == 3){
						$('#section2').find('#icono1Section2').first().fadeIn(1000, function(){
							$('#section2').find('#icono1Section2').last().fadeIn(4000);
						});;
						$('#section2').find('#icono2Section2').first().fadeIn(1000, function(){
							$('#section2').find('#icono2Section2').last().fadeIn(40000);
						});;
						$('#section2').find('#icono3Section2').first().fadeIn(1000, function(){
							$('#section2').find('#icono3Section2').last().fadeIn(4000);
						});;
						$('#section2').find('#icono4Section2').first().fadeIn(1000, function(){
							$('#section2').find('#icono4Section2').last().fadeIn(4000);
						});;
				//	$('.iconoSection2').addClass('active');
					}

				},

				'onLeave': function(index, nextIndex, direction){
					if (index == 3 && direction == 'down'){
						$('.section').eq(index -1).removeClass('moveDown').addClass('moveUp');
					}
					else if(index == 3 && direction == 'up'){
						$('.section').eq(index -1).removeClass('moveUp').addClass('moveDown');
					}

					$('#staticImg').toggleClass('active', (index == 2 && direction == 'down' ) || (index == 4 && direction == 'up'));
					$('#staticImg').toggleClass('moveDown', nextIndex == 4);
					$('#staticImg').toggleClass('moveUp', index == 4 && direction == 'up');
				}
			});
		});
	</script>

</body>
</html>
