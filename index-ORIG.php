<?php include 'check_browser.php'; ?>

<?php  if (ae_detect_ie()) {  ?>
	<h2 style="text-align: center">It seems you are using Internet Explorer which didnt support Animation. :(  <br> please use Firefox or Chrome or contact your administrator</h2>
<?php }  ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Thank You SKY! | Nikko Zabala</title>
		<meta name="description" content="A perspective slideshow based on Franklin Ta's CSS matrix3d transforms" />
		<meta name="keywords" content="perspective, mockup, slideshow, transform, 3d, matrix, css" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome.min.css" />

		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/animate.css" />
		<link rel="stylesheet" type="text/css" href="css/mockup4.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />

		<script src="js/modernizr.custom.js"></script>
		

	</head>
	<body class="demo-4">
	
		<div class="container">
					
			<div id="wrap" class="wrap">
				<div class="mockup">
					<img class="mockup__img" src="img/nikkozabala-bg.jpg" />
					<div class="mobile">
						<ul id="slideshow-1" class="slideshow">
							<li class="slideshow__item"><img src="img/small/1.png"/></li>
							<li class="slideshow__item"><img src="img/small/2.png"/></li>
							<li class="slideshow__item"><img src="img/small/3.png"/></li>
							<li class="slideshow__item"><img src="img/small/4.png"/></li>
							<li class="slideshow__item"><img src="img/small/5.png"/></li>
						</ul>
					</div>
					<div class="screen">
						<ul id="slideshow-2" class="slideshow">
							<li class="slideshow__item current"><img src="img/large/1.png"/></li>
							<li class="slideshow__item"><img src="img/large/2.png"/></li>
							<li class="slideshow__item"><img src="img/large/3.png"/></li>
							<li class="slideshow__item"><img src="img/large/4.png"/></li>
							<li class="slideshow__item"><img src="img/large/5.png"/></li>
							<li class="slideshow__item"><img src="img/large/6.png"/></li>
							<li class="slideshow__item"><img src="img/large/7.png"/></li>
							<li class="slideshow__item"><img src="img/large/8.png"/></li>
							<li class="slideshow__item"><img src="img/large/9.png"/></li>
							<li class="slideshow__item"><img src="img/large/10.png"/></li>
							<li class="slideshow__item"><img src="img/large/11.png"/></li>
							<li class="slideshow__item"><img src="img/large/12.png"/></li>
							<li class="slideshow__item"><img src="img/large/13.png"/></li>
							<li class="slideshow__item"><img src="img/large/14.png"/></li>
							<li class="slideshow__item"><img src="img/large/15.png"/></li>
							<li class="slideshow__item"><img src="img/large/16.png"/></li>
							<li class="slideshow__item"><img src="img/large/17.png"/></li>
						</ul>
					</div>
					<header class="codrops-header">
			
						<h1 style="color:white;border:white"><p class="welcome"> </p> </h1>

		
					</header>
				</div>
			</div>
			
			
		</div>
		<script src="js/classie.js"></script>
		<script src="js/main.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/typed.min.js"></script>
		<script>
			(function() {
				new Slideshow( document.getElementById( 'slideshow-1' ) );
				setTimeout( function() {
					new Slideshow( document.getElementById( 'slideshow-2' ) );
				}, 1750 );

		
				var body = docElem = window.document.documentElement,
					wrap = document.getElementById( 'wrap' ),
					mockup = wrap.querySelector( '.mockup' ),
					mockupWidth = mockup.offsetWidth;

				scaleMockup();

				function scaleMockup() {
					var wrapWidth = wrap.offsetWidth,
						val = wrapWidth / mockupWidth;

					mockup.style.transform = 'scale3d(' + val + ', ' + val + ', 1)';
					mockup.style.WebkitTransform = 'scale3d(' + val + ', ' + val + ', 1)';
				}
				
				window.addEventListener( 'resize', resizeHandler );

				function resizeHandler() {
					function delayed() {
						resize();
						resizeTimeout = null;
					}
					if ( typeof resizeTimeout != 'undefined' ) {
						clearTimeout( resizeTimeout );
					}
					resizeTimeout = setTimeout( delayed, 50 );
				}

				function resize() {
					scaleMockup();
				}
			})();
		</script>

		<script type="text/javascript">


     function thankYou()
     {
     	 $(".welcome").typed({
    
          strings: ['THANK YOU!', 'SKY!!!','NIKKO ZABALA','NOW','SIGNING','', 'OFF...','SALAMAT PO!!',''],
        typeSpeed: 100,
        showCursor: false,

      });
     }

     setTimeout(thankYou,2000);

</script>
		

	</body>
</html>
