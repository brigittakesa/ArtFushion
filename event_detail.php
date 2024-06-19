<?php
	include "proses/koneksi.php";
	$id = $_GET['id'];
	$query = mysqli_query($kon,"SELECT * FROM event WHERE id = '$id'");
	$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>ArtFushion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="img/logo_.png" />
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
     <script type="text/javascript"  src="js/jquery-2.1.1.min.js"></script>
     <script  type="text/javascript" src="js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
	 <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	 <link rel="stylesheet" type="text/css" href="css/event.css" media="all">

	<script>
      $(function(){
        if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
          $('#ios-notice').removeClass('hidden');
          $('.parallax-container').height( $(window).height() * 0.5 | 0 );
        } else {
          $(window).resize(function(){
            var parallaxHeight =400;//Math.max($(window).height() * 0.7, 200) | 0;
            $('.parallax-container').height(parallaxHeight);
          }).trigger('resize');
        }
      });
    </script>
    <script src="js/parallax.min.js"></script>
  
 
</head>

<body>
<section id="header" class="clearfix header_about">
 <div class="col-sm-12 header clearfix">
  <p><a href="index.html"><span class="header_inner">A</span>rtFushion</a></p>
 </div>
 <div class="col-sm-12 header_1 clearfix cd-secondary-nav">
 <div class="header_1_center clearfix">
  <nav class="navbar" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.html" class="navbar-brand">ArtFushion</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				    <li><a href="index.html">Home</a></li>
					<li><a href="about.html">About us</a></li>
					<li><a class="active_1" href="events.php">Events</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
 	</div>
 </div>
</section>
</div>
<section id="about_top" class="clearfix">
 <div class="container">
  <div class="row">
   <div class="col-sm-12 about_top">
   <p style = "font-family:lucida bright;"> Event Detail </p>
   </div>
  </div>
 </div>
</section>
<section id="blog_detail">
 <div class="container">
  <div class="row">
   <div class="col-sm-12 space_all">
    <div class="blog_detail_1 clearfix">
	 <div class="col-sm-9">
	  <div class="blog_detail_1l clearfix">
	     <div class="grid clearfix">
				  <figure class="effect-jazz" style="height:550px;width:850px;">
					<img src="img/<?= $data['foto'] ?>" class="iw mgt" style="width:100%;height:100%;" alt="img25">
				  </figure>
		 </div>
		 <div class="article_1r clearfix">
		   <ul>
			<li><a class="date" href="#"><i class="fa fa-calendar"></i><?= $data['tanggal'] ?></a></li>
		   </ul>
		   <h2><a href="#"><?= $data['nama'] ?></a></h2>
		   <p><?= $data['tempat'] ?></p>
	  </div>
	  </div>
	  <div class="blog_detail_1l3 clearfix">
		  <p class="mgt">
			<?= $data['deskripsi'] ?>
		</p>
	  </div>
	  
	  <div class="blog_detail_1l5 clearfix">
	   <ul class="mgt">
	    <li><i class="fa fa-tag"></i> Tags</li>
		<li><a href="events.html">Events</a></li>
	   </ul>
	  </div>
	  <div class="blog_detail_1l6 clearfix">
	   <div class="col-sm-4 space_left">
	    <div class="blog_detail_1l6l clearfix">
		 <a href="#"><img src="img/tari.jpg" class="iw thumbnail mgt" alt="abc" height="180"></a>
		</div>
	   </div>
	   <div class="col-sm-8 space_right">
	    <div class="blog_detail_1l6r clearfix">
		 <div class="col-sm-10">
		 <div class="col-sm-6 space_left"><h3 class="mgt">About Author</h3></div>
		 <div class="col-sm-6 space_right"><ul class="social-network social-circle pull-right mgt">
			<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
		 </ul></div>
		 </div>
		 <div class="col-sm-12"><p>Ditulis oleh Azura Ananda</p></div>
		</div>
	   </div>
	  </div>
	  <div class="blog_detail_1l7 clearfix">
	   <h2>02 COMMENTS</h2>
	  </div>
	  <div class="blog_detail_1l6 clearfix">
	   <div class="col-sm-3 space_left">
	    <div class="blog_detail_1l6l clearfix">
		 <a href="#"><img src="img/komen1.jpg" alt="abc" class="iw thumbnail mgt" height="180"></a>
		</div>
	   </div>
	   <div class="col-sm-9 space_right">
	    <div class="blog_detail_1l6r clearfix">
		 <div class="col-sm-12">
		 <div class="col-sm-6 space_left"><h3 class="mgt">Dara Arafah <span>April 5, 2024</span></h3></div>
		 <div class="col-sm-6 space_right text-right"><h5 class="mgt"><a href="#">Reply</a></h5></div>
		 </div>
		 <div class="col-sm-12"><p>Acara bagus bangettt sukak, kita bisa liat semua karya yang menarik.</p></div>
		</div>
	   </div>
	  </div>
	  <div class="blog_detail_1l6 clearfix">
	   <div class="col-sm-3 space_left">
	    <div class="blog_detail_1l6l clearfix">
		 <a href="#"><img src="img/komen2.jpg" class="iw thumbnail mgt" alt="abc" height="180"></a>
		</div>
	   </div>
	   <div class="col-sm-9 space_right">
	    <div class="blog_detail_1l6r clearfix">
		 <div class="col-sm-12">
		 <div class="col-sm-6 space_left"><h3 class="mgt">Tari Azuraa <span>April 8, 2024</span></h3></div>
		 <div class="col-sm-6 space_right text-right"><h5 class="mgt"><a href="#">Reply</a></h5></div>
		 </div>
		 <div class="col-sm-12"><p>Aku ga dateng ke acaranya tapi ternyata udah ada semua disini jadi kita juga bisa nikmatin lewat web aja.</p></div>
		</div>
	   </div>
	  </div>
	  <div class="blog_detail_1l8 clearfix">
	   <div class="blog_detail_1l8i clearfix"> 
	    <div class="col-sm-6 space_left">
		</div>
		<div class="col-sm-6 space_right">
		</div>
	   </div>
	   <div class="blog_detail_1l8i clearfix"> 
		<div class="col-sm-12 space_all">
		</div>
		<div class="col-sm-12 space_all">
		</div>
		</div>
	   </div>
	  </div>
	 <div class="col-sm-3">
	   <div class="blog_detail_1r clearfix">
	    <div class="footer_1i2 clearfix">
	    <h3 class="mgt">Informasi Tiket Pameran</h3>
		<p><a href="ticket.php">Gallerist Choice</a></p>
		<h5><a href="#"><i class="fa fa-clock-o color_1 mr_5"></i> 2024</a></h5>
		<p><a href="ticket.php">THEM Exhibiton</a></p>
		<h5><a href="#"><i class="fa fa-clock-o color_1 mr_5"></i> 15 Juni - 29 Juli 2024</a></h5>
		<p><a href="ticket.php">Butterfly Eyes</a></p>
		<h5><a href="#"><i class="fa fa-clock-o color_1 mr_5"></i> 22 Juni - 11 Agustus 2024</a></h5>
	  </div>
		<div class="blog_detail_1r1 clearfix">
		 <div class="blog_detail_1r1m clearfix">
		   <h3 class="mgt">Upcoming Events</h3>
		   <div class="clearfix">
		      <div class="col-sm-4 space_left col-xs-4">
			  <div class="blog_detail_1r1l">
			   <h4 class="mgt"><span>11</span> <br>Juni</h4>
			  </div>
		      </div>
		      <div class="col-sm-8 space_all col-xs-8">
		  <div class="blog_detail_1r1r">
		   <p class="mgt"><a href="#">Fates<br>And Furies</a></p>
		  </div>
		 </div>
		   </div>
		  <h6><i class="fa fa-map-marker color_1"></i> Appetite, Singapore </h6>
		  <hr>
		 </div>
		 <div class="clearfix">
			<div class="col-sm-4 space_left col-xs-4">
			<div class="blog_detail_1r1l">
			 <h4 class="mgt"><span>14</span> <br>Juni</h4>
			</div>
			</div>
			<div class="col-sm-8 space_all col-xs-8">
		<div class="blog_detail_1r1r">
		 <p class="mgt"><a href="#">Irish<br>  Legends Through<br> Indonesian Eyes</a></p>
		</div>
	   </div>
		 </div>
		<h6><i class="fa fa-map-marker color_1"></i> Lobby WTC, Jakarta Selatan </h6>
		<hr>
	   </div>
		</div>
		</div>
	   </div>
	 </div>
	 </div>
	</div>
   </div>
  </div>
</section>
<section id="footer" class="clearfix">
	<div class="container">
	 <div class="row">
	  <div class="col-sm-12 footer">
	   <p><a href="#"><span class="header_inner">A</span>rtFushion</a></p>
	  </div>
	  <div class="col-sm-12 footer_n">
		<div class="col-sm-4">
		<div class="footer_n1 clearfix">
		 <h3 class="mgt col">Head Office</h3>
		 <p class="col">1001 Sleman, Yogyakarta
					   VA 130xz, INA<br>
					   Email: artfushion@gmail.com<br>
					   Telephone: +628-123-456-789 </p>
		<p class="col">Mon-Thu: 9:30 - 21:00<br>Fri: 6:00 - 21:00<br>Sat: 10:00 - 15:00</p>
		</div>
	   </div>
	   <div class="col-sm-4">
		<div class="footer_n1 clearfix">
		  <h3 class="mgt col">Get Your Solutions!</h3>
		  <input type="text" class="form-control" placeholder="Enter Your Email *">
		  <h5><a class="button" href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJfqcGZZBkptTbgfvHtkDHzZxzGDbVZtkBXWVFGQMCPWRDfBjKVtSccZgvDKgNQvGGhMCcL">Submit</a></h5>
	 </div>
	</div>
  <div class="widget">
    <img src="img/footer_.png" alt="about" />
   </div>
  </div>
 </div>
</div>
</section>
<section id="footer_last" class="clearfix">
 <div class="container">
  <div class="row">
   <div class="col-sm-12 footer_last">
    <p class="website">2024 ArtFushion. All rights reserved | Kelompok 4 </a></p>
   </div>
  </div>
 </div>
</section>

<script>
$(document).ready(function(){
	/*****Fixed Menu******/
	var secondaryNav = $('.cd-secondary-nav'),
	   secondaryNavTopPosition = secondaryNav.offset().top;
	   navbar_height = document.querySelector('.navbar').offsetHeight;
	   
		$(window).on('scroll', function(){
		    if($(window).scrollTop() > secondaryNavTopPosition + navbar_height ) {
				secondaryNav.addClass('is-fixed');	
				document.body.style.paddingTop = navbar_height + 'px';
				
			} else {
				secondaryNav.removeClass('is-fixed');
				document.body.style.paddingTop = '0'
			}
		});	
		
});
</script>
</body>
</html>
