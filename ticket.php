<?php
	session_start();
	if($_SESSION['tipe']=='seniman'){
		header("Location: galleryseniman.php");
	}
	else{
	include "proses/koneksi.php";
	$query = mysqli_query($kon,"SELECT * FROM karya_seni");
	}
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
   <p style = "font-family:lucida bright;"> Ticket Pameran </p>
   </div>
  </div>
 </div>
</section>
<section id="galary" class="clearfix">
    <div class="container">
        <div class="row galary_top">
            <div class="col-sm-4 galary_top_left">
                <div class="grid">
                    <figure class="effect-zoe">
                        <img src="img/galleristchoice.jpeg" alt="img26"/>
                        <figcaption>
                            <h2>Gallerist <span>Choice</span></h2>
                            <p class="description">Gallerist Choice 2024 at Wijaya.</p>
                        </figcaption>			
                    </figure>
                </div>
            </div>
            <div class="col-sm-8 about_bottom_main">
                <div class="about_bottom_main_left_top">
                    <div class="about_bottom_main_right_top">
                        <div class="about_bottom_main_right_top_1">
                            <div class="about_bottom_main_left_top_2_left"> 
                                <h4>Gallerist Choice</h4>
                                <h5>Wijaya Gallery <span class="tripping">2024</span></h5>
                                <p>Wijaya Gallery mempersembahkan "Gallerist Choice," koleksi seni pilihan para ahli kami. Karya-karya yang dipilih menampilkan keindahan dan keunikan luar biasa, dari lukisan abstrak hingga patung memukau. Nikmati keajaiban seni yang telah dikurasi dengan cermat, menghadirkan pengalaman visual yang memukau dan menginspirasi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
<div class="container">
  <div class="row">
   <div class="col-sm-12 about_bottom_main">
   </div>
 <div class="col-sm-12 about_center_2 text-center">
    <div class="col-sm-6 about_center_2_left center-block">
        <div class="about_center_2_left_top">
            <div class="row billing-fields">
                    <div class="create-ac-content bg-light-gray padding-20px-all">
                        <form>
                            <fieldset>
                                <h2 class=> <b>Pembelian Tiket Pameran</b></h2>
                                <div class="row">
                                    <div class="form-group required">
                                        <label for="input-name"> Nama Lengkap <span class="required-f">* &emsp;</span></label> 
                                        <input name="nama" value="" id="input-nama" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                <div class="form-group required">
                                        <label for="input-email"> &emsp;&emsp; E-Mail <span class="required-f">* &emsp;&emsp;</span></label>
                                        <input name="email" value="" id="input-email" type="email">
                                    </div>
                                 </div>
                                    <div class="row">
                                    <div class="form-group required">
                                        <label for="input-telephone">&emsp; No. Hp <span class="required-f">* &emsp;&emsp;&emsp;</span></label>
                                        <input name="telephone" value="" id="input-telephone" type="tel">
                                    </div>
                                </div>
                                <div class="row">
                                <div class="form-group required">
                                <label for="input-pameran">&emsp; Pameran <span class="required-f">* &emsp;&emsp;</span></label>
                                <input name="pameran" value="" id="input-pameran" type="text">
                                </div>
                                </div>
                                    <div class="row">
                                    <div class="form-group required">
                                        <label for="input-address-1"> &emsp; Alamat <span class="required-f">* &emsp;&emsp;&emsp;</span></label>
                                        <input name="address_1" value="" id="input-address-1" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                <div class="form-group required">
                                    <label for="input-country"> Jumlah tiket <span class="required-f">* &emsp;&emsp;</span></label>
                                        <select name="country_id" id="input-country">
                                            <option value=""> --- Please Select --- </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                      </div>
                                    </div>
            <div class="your-payment">
              <h2 class="payment-title mb-3"><b> Pembayaran Melalui </b></h2>
                <div class="payment-method">
                    <div class="payment-accordion">
                       <div id="accordion" class="payment-section">
                         <div class="card mb-2">
                            <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne"> <h4>Transfer Bank</h4> </a>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                            <p class="no-margin font-15"> <h5>Lakukan pembayaran Anda langsung ke rekening bank kami. Silakan gunakan ID Pesanan Anda sebagai referensi pembayaran. Pesanan Anda tidak akan dikirimkan sampai dana telah masuk ke rekening kami. </h5></p>
                            </div>
                          </div>
                       </div>
                            <div class="card mb-2">
                                <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour"><h4>Informasi Pembayaran</h4></a>
                                </div>
                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                                <fieldset>
                                    <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-cardname">Name on Card <span class="required-f">*</span></label>
                                    <input name="cardname" value="" placeholder="Card Name" id="input-cardname" class="form-control" type="text">
                                    </div>
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                <label for="input-country">Card Type<span class="required-f">*</span></label>
                                <select name="country_id" class="form-control">
                                    <option value=""> --- Please Select --- </option>
                                    <option value="1">Debit Card</option>
                                    <option value="2">Visa Card</option>
                                    <option value="3">Master Card</option>
                                    <option value="4">Credit Card</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                            <label for="input-cardno">Credit Card Number  <span class="required-f">*</span></label>
                            <input name="cardno" value="" placeholder="Credit Card Number" id="input-cardno" class="form-control" type="text">
                            </div>
                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                            <label for="input-cvv">CVV Code <span class="required-f">*</span></label>
                            <input name="cvv" value="" placeholder="Card Verification Number" id="input-cvv" class="form-control" type="text">
                            </div>
                        </div>
                    <div class="row">
                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                        <label>Expiration Date <span class="required-f">*</span></label>
                        <input type="date" name="exdate" class="form-control">
                        </div>
                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                            <img class="padding-25px-top xs-padding-5px-top" src="img/payment-img.jpg" alt="card" title="card" />
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.order-button-payment {
    display: flex;
    justify-content: center;
    align-items: center;
}

.col-sm-4.menu_topper_2_bottom_main_top_2 {
    text-align: center;
}
</style>

<div class="order-button-payment">
    <div class="col-sm-4 menu_topper_2_bottom_main_top_2">
        <br><p><a href="#">Order</a></p>
    </div>
</div>
   </div>
  </div>
 </div>
 </div>
</div>
</section>

<br>
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
