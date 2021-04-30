<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <link rel="stylesheet" type="text/css" href="sekolah/css/index.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <title>Starter Template · Bootstrap</title>
 
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">
 
    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
 
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/css/starter-template.css" rel="stylesheet">
  </head>
  <body>
		<!--New Item-->
		<div class="new">
			<h3>BAJU TERSEDIA</h3>
			<div class="fotonew">
				<div class="col1">
					<img src="assets/img/054.jpg" style="width: 180px; height: 200px;" >
					<div class ="des">
						<p>Casual Training</p>
						<p>Rp 50.000</p>
						<a href="sekolah/tambah.php">Tambah ke Keranjang</a>
					</div>
				</div>
				<div class="col1">
					<img src="assets/img/039.jpg" style="width: 180px; height: 200px;" >
					<div class ="des">
						<p>Casual Tshirt</p>
						<p>Rp 150.000</p>
						<a href="sekolah/tambah2.php">Tambah ke Keranjang</a>
					</div>
				</div>
				<div class="col1">
					<img src="assets/img/049.jpg" style="width: 180px; height: 200px;" >
					<div class ="des">
						<p>Dress Denim</p>
						<p>Rp 250.000</p>
						<a href="sekolah/tambah3.php">Tambah ke Keranjang</a>
					</div>
				</div>
				<div class="col1">
					<img src="assets/img/044.jpg" style="width: 180px; height: 200px;">
					<div class ="des">
						<p>Dress grey strict</p>
						<p>Rp 80.000</p>
						<a href="sekolah/tambah4.php">Tambah ke Keranjang</a>
					</div>
				</div>
				<div class="col1">
					<img src="assets/img/038.jpg" style="width: 180px; height: 200px;" >
					<div class ="des">
						<p>Flower Dress</p>
						<p>Rp 350.000</p>
						<a href="sekolah/tambah5.php">Tambah ke Keranjang</a>
					</div>
				</div>
				<div class="col1">
					<img src="assets/img/042.jpg" style="width: 180px; height: 200px;" >
					<div class ="des">
						<p>Hot Pants</p>
						<p>Rp 550.000</p>
						<a href="#">Tambah ke Keranjang</a>
					</div>
				</div>
				<div class="col1">
					<img src="assets/img/048.jpg" style="width: 180px; height: 200px;" >
					<div class ="des">
						<p>Jeans Pants Denim</p>
						<p>Rp 200.000</p>
						<a href="#">Tambah ke Keranjang</a>
					</div>
				</div>
				<div class="col1">
					<img src="assets/img/046.jpg" style="width: 180px; height: 200px;">
					<div class ="des">
						<p>Long Skirt</p>
						<p>Rp 300.000</p>
						<a href="#">Tambah ke Keranjang</a>
					</div>
				</div>
				<div class="col1">
					<img src="assets/img/041
					.jpg" style="width: 180px; height: 200px;" >
					<div class ="des">
						<p>Jeans Denim</p>
						<p>Rp 100.000</p>
						<a href="#">Tambah ke Keranjang</a>
					</div>
				</div>
				<div class="col1">
					<img src="assets/img/040.jpg" style="width: 180px; height: 200px;">
					<div class ="des">
						<p>Long Pants</p>
						<p>Rp 600.000</p>
						<a href="#">Tambah ke Keranjang</a>
					</div>
				</div>
			</div>
		</div>

    <!-- ------------------------------------------------- -->
    <nav class="navbar navbar-expand-md navbar-dark bg-warning fixed-top">
  <a class="navbar-brand" href="#">Tokonedono</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    
 
    <a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-outline-light">Logout</a>
 
  </div>
</nav>
  <main role="main" class="container">
  
    <div class="starter-template">
      <h1>Hallo <?php echo $_SESSION['nama']; ?></h1>
      <p class="lead">Keranjang Belanjamu</p>
      <a href="sekolah/index.php" class="btn btn-lg btn-warning"><b>Lihat</b></a>
    </div>
  
  </main><!-- /.container -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>

  	<!--Copyright--> 
		<footer>
			<div class="container">
				<small>Copyright &copy; 2021 - Kelompok 1. All Rights Reserved</small>
			</div>
		</footer>
</body>
</html>