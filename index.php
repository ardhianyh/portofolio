<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Ardhian Yuliandra Hanum</title>
		<link rel="shortcut icon" href="img/andra.png"/>

		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/font.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/jquery.sweet-modal.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.sweet-modal.min.js"></script>

		<script>
			$(document).ready(function() {
				var variants = {
					'web-popup': {
						args: [
							{
								title: '<center>Toeman Website </center>',
								content: '<a href="http://www.toeman.dx.am/index.html" target="_blank"><img class="img-responsive" src="img/toeman.png" alt=""></a>'
							}
						]
					},
					'web-popup2': {
						args: [
							{
								title: '<center>Portal Website </center>',
								content: '<a href="#" target="_blank"><img class="img-responsive" src="img/portal.png" alt=""></a>'
							}
						]
					},
				};

				for (var key in variants) {
					if (variants.hasOwnProperty(key)) {
						var variant = variants[key];
						$('#' + key).on('click', { variant: variant }, function(e) {
							var variant = e.data.variant;
							variant.fn = variant.fn || $.sweetModal;
							variant.fn.apply(this, variant.args);
						});
					}
				}
			});
		</script>
	</head>
	<body>

		<nav id="nav-wrap">
          <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Menu</a>
          <a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>
          <ul id="nav" class="nav">
             <li class="current"><a class="smoothscroll" href="#wrapper">Home</a></li>
						 <li><a class="smoothscroll" href="#portofolio">Portofolio</a></li>
             <li><a class="smoothscroll" href="#about">About Me</a></li>
             <li><a class="smoothscroll" href="#contact">Contact</a></li>
          </ul>
       </nav>

		<div id="wrapper">
			<div class="logo">
					<p class="animated  rubberBand">Ardhian Yuliandra Hanum</p>
			</div>
		<div class="caption">
			<div class="body">
				<p class="animated flipInX">
					“Barang siapa yang ingin dilapangkan rizkinya dan <br>
					dipanjangkan umurnya, maka hendaklah ia <br>
					menyambung tali silaturahmi”
				</p>
				<br>
				<div class="end">
					<p>[Muttafaqun 'alaihi]</p>
				</div>
			</div>
				<a href="#portofolio" ><img src="img/down.png" class="animated infinite swing" alt=""></a>
		</div>
		</div>
</div>

		<div id="portofolio">
		<div class="container-fluid">
			<div class="col-md-12">
				<div class="col-md-5">
					<center><img class="img-responsive" src="img/andra.png" alt="Ardhian Yuliandra Hanum" align="center" /></center> <br>
					<center><a href="file/cv.pdf" target="_blank"><img src="img/download.png" alt=""></a></center>
				</div>
				<div class="col-md-7">
					<div class="name-head">
						<h1>Ardhian Yuliandra Hanum</h1>
						<small>- Andra, Since 22 Juli 1997</small>
						<hr>
						<p><q>Seorang Junior Programer yang suka akan dunia
						Perkodingan, bagi saya Code merupakan hal yang unik
						dan juga asik, yaa walaupun terkadang bikin pusing
						tapi itulah Sesansi seorang Programer</q></p>
						<br>
						</div>
						<div class="quote">
						<blockquote>- <q>Mengubah angka 0 menjadi 1 adalah proses seumur hidup, berbagilah dengan sesama. Selagi masih diberi sehat, harus bermanfaat</q></blockquote>
						</div>
						<br>
						</div>
				</div>
			</div>
		</div>
		<div class="container"><hr>
		<div class="page-header">
				<center><h2>My Project</h2></center>
				<br>
		</div>
		<div class="col-lg-6 col-md-2 thumb ">
				<a class="thumbnail" id="web-popup"  data-toggle="modal">
						<img class="img-responsive" src="img/toeman.png" alt="">
				</a>
		</div>
		<div class="col-lg-6 col-md-2 thumb">
				<a class="thumbnail"  id="web-popup2"  data-toggle="modal">
						<img class="img-responsive" src="img/portal.png" alt="">
				</a>
		</div>
		</div>
		</div>
		<br>
		<div id="about">
			<div class="head">
				<h2> <span></span></h2>
			</div>
			<div class="container">
				<div class="col-md-12">
					<div class="col-md-4">
						<h3><b>Education</b></h3><br>
						<div class="about-edu">
						<p>- SD N 1 Wonosari Gunung Kidul <br>
							<small>Student  - Juli 2004 - 2010</small> <br>
							<br>
							- SMP N 2 Depok Sleman Yogyakarta <br>
							<small>Student  - Juli 2010 - 2013 </small><br>
							<br>
							- SMK N 2 Depok Slmean Yogyakarta <br>
							Teknik Komputer Jaringan	<br>
							<small>Student  - Juli 2013 - 2017</small></p>
							</div>
					</div>
					<div class="col-md-4"><center><img class="img-responsive" src="img/andra.png" alt=""></center></div>
					<div class="col-md-4">
						<div class="about-work">
						<h3><b>Work</b></h3><br>
							<p>PT Aino Indonesia <br>
							 (Magang/PKL) <br>
							<small>Juni - Desember 2016</small> <br>
							<br>
							Divisi IT Support Officer <br>
							Maintance Networking Internet <br>
							and Hardwear Softwear Computer
						</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12">
					<br>
					<center>
						<a href='#wrapper' ><img src="img/up.png" class="animated infinite  jello" alt=""></a>
					</center>
					<br>
				</div>
			</div>
		</div>


		<div id="contact">
			<div class="head">
				<h2>Get in Touch with Me!</h2>
			</div>
			<div class="container-fluid">
				<div class="contact-row">
					<div class="col-lg-6 col-md-2 col-xs-6">
						<div class="contact-head">
						<h3>Address :</h3>
						<br>
						<p>
							<span class="glyphicon glyphicon-map-marker left"> </span>
							 Pondok 1, Rt 05 Rw 31 <br>
							Widodomartani Ngemplak, Sleman <br>
							Daerah Istimewa Yogyakarta <br>
							Indonesia 55584 <br>
						</p>
						<p>
							<span class="glyphicon glyphicon-phone "></span> 0857-2580-2623 <br>
							<span class="glyphicon glyphicon-envelope "></span> ardhian.hanum@gmail.com
						</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-2 col-xs-6">
						<h3 style="text-align: center;">Follow Me !</h3>
						<br>
						<div class="sosial-media">
							<ul>
								<li ><a href="http://line.me/ti/p/AcMFHcXEQg" target="_blank" ><img src="img/line.png" alt=""></a></li>
								<li ><a href="mailto:ardhian.hanum@gmail.com"><img src="img/google.png" alt=""></a> </li>
								<li><a href="https://www.instagram.com/ardhianyh/" target="_blank" ><img src="img/ig.png" alt=""></a> </li>
								<li><a href="https://www.facebook.com/ardhian.y.hanum" target="_blank" ><img src="img/facebook.png" alt=""></a> </li>
								<li><a href="https://twitter.com/ardhianyh" target="_blank" ><img src="img/twitter.png" alt=""></a> </li>
							</ul>
							<p>Ardhian Yuliandra Hanum</p>
							</div>
					</div>
				</div>
			</div>
			<br>
			<br>
		</div>
		<div id="footer">
			<p>&copy; Copyright 2017  &hearts;Ardhian Yuliandra Hanum</p>
		</div>
	</body>



<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1500, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
</html>
