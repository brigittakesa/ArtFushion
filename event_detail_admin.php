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
   
      <form action="proses/tambah_event.php" method="POST">
   <div class="col-sm-12 space_all">
    <div class="blog_detail_1 clearfix">
	 <div class="col-sm-9">
	  <div class="blog_detail_1l clearfix">
	     <div class="grid clearfix">
				  <figure class="effect-jazz">
                    <div style="height: 300px;width:1170px;display:flex;align-items:center;justify-content:center">
                    <h3 style="margin-left:-10em; margin-right:2em">Masukkan Gambar Event disini: </h3>    
                    <input type="file" name="foto">
                    </div>
				  </figure>
		 </div>
		 <div class="article_1r clearfix">
			<p>
                <input type="text" style="all:unset; background-color:#B97A5760;border-radius:5px;width:100%;" placeholder="Tanggal Event" name="tanggal">
		   </p>
		   <p>
                <input type="text" style="all:unset; background-color:#B97A5760;border-radius:5px;width:100%;" placeholder="Judul Event" name="nama">
           </p>
		   <p>
                <input type="text" style="all:unset; background-color:#B97A5760;border-radius:5px;width:100%;" placeholder="Tempat Event" name="tempat">
           </p>
	  </div>
	  </div>
	  <div class="blog_detail_1l3 clearfix">
		 <p>
            <textarea type="text" style="all:unset; background-color:#B97A5760;border-radius:5px;height:20em;width:100%;" name="deskripsi" placeholder="Deskripsi Event (gunakan <br> sebagai enter antar paragraf)"></textarea>
         </p> 
            <input type="submit" style="all:unset; background-color:none;border:1px solid #B97A57;border-radius:50px;height:3em; width:100%; text-align:center; margin-bottom:5em;">
	  </div>
    </form>

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
