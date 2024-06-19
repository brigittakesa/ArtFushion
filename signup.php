<?php
    $date=date("Y/m/d");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ArtFushion: Register Form</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <!-- Slick slider -->
    <link href="assets/css/slick.css" rel="stylesheet">

    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <link href="style.css" rel="stylesheet">
    <link href="css/log.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Lato for Title -->
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
    

</head>
<body>
    <div class="wrapper">
        <div class="text-center mt-4 name"><br>
        <h4>REGISTER TO OUR ARTFUSHION</h4>
        </div>

        <form class="p-3 mt-3" method="POST" action="proses/signup.php">
            <input type="hidden" value="user" name="tipe">
            <div class="form-field d-flex align-items-center">
                <span class="input-group-text"></span>
                <input type="text" name="nama" id="nama" placeholder="Nama">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="input-group-text"></span>
                <input type="date" value="<?php echo $date?>" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="input-group-text"> </span>
                <input type="text" name="asal" id="asal" placeholder="Asal">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="input-group-text"></span>
                <input type="email" name="email" id="email" placeholder="Your Email">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="input-group-text"></span>
                <input type="text" name="userName" id="userName" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="input-group-text"></span>
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <button class="btn mt-3">Sign Up</button>
        </form>

        <div class="text-center fs-6">
           <a href="login.html">Login</a>
        </div>
    </div>
</body>
</html>


