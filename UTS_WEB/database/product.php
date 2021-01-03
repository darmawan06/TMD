<!DOCTYPE html>
<html>
<head>
	<title>MonoCycle - Product</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/yourcode.js"></script>
	<?php
	include 'addlist.php';
	session_start();
	?>
</head>
<body>
	<div id="infopembelian" style="background-color: rgba(0,0,0,0.8); z-index: 1; position: fixed; width: 30vw; right:0; bottom: 50px; display:none">
		<i onclick="closeshowinfo()" class="btn fa fa-close text-danger" ></i>
			<div class="text-center bg-light" style="font-size: 2vw;">
				INFO PEMBELIAN ANDA
			</div>
			<div id="daftarpembelian" class="next-1" style="max-height: 48vh; height: auto; overflow-y: scroll; font-size: 1.3vw;" >
			</div>
			<div id="totalharga" class="item mt-1 mb-1 bg-info p-2" style="height: auto;">
				Total Harga : Rp 0
			</div>
		<form action="..\database/transaksi.php" method="post">
			<div class="d-flex">
				<div class="col">
					<span style="font-size: 1.4vw; color: white;">Jasa Pengiriman</span>
						<select class="form-control">
							<option>JNE</option>
							<option>J&T</option>
							<option>NINJA EXPRESS</option>
							<option>NINJA NARUTO</option>
						</select>
				</div>
				<div class="col">
					<span style="font-size: 1.4vw; color: white;">Pembayaran</span>
						<select class="form-control">
							<option>DANA</option>
							<option>OVO</option>
							<option>BCA</option>
							<option>BNI</option>
						</select>
				</div>
			</div>
			<div class=" d-flex p-3">
				<input type="button" onclick="nextbuy()" class="next-1 btn btn-danger col text-center" value="NEXT">
			</div>
			<div class="next-2 d-flex p-2 ">
				<span class=" next-2 text-white" style="font-size: 1.3vw;">Masukan Alamat Rumah</span>
				<textarea class="next-2" required="" style="width: 30vw; height: 10vw;"></textarea>
			</div>
			<div class="next-2 d-flex p-3">
				<input class="next-2" required="" type="checkbox" name="setuju">
				<span class="next-2" style="font-size: 1vw; color: white;">SETUJU DENGAN YANG DI BELI DAN ALAMAT BENAR</span>
			</div>
			<div class="next-2 mb-2 d-flex">
				<div class="col">
				<input type="submit" value="BELI" class="next-2 btn btn-danger col text-center">
				</div>
			</div>
		</form>
	</div>
	<div id="infoAbout" class="container-fluid" style="display: none;">
		<div class="row">
			<div class="col-12" style="background-color: rgba(0,0,0,0.8); height: 100vh; position: absolute; z-index: 2;">
				<div class="col-sm-8 m-auto bg-white" style="height: 100vh;">
				<button id="about-close" class="fa fa-close" style="margin:10px 0 0 auto; color: black; border:none; font-size: 7vh;" ></button>
						<p class=" bg-second text-white p-2 h1" style="text-align: center;"> ABOUT ME</p>
						<img src="..\img/slide/motor1.jpg" width="100%"height="300vw;">
						<div class="text-justify">
							MONOCYCLE adalah sebuah perusahaan yang berkerja dalam otomatif indonesia, perusahaan kami didirikan pada tahun 1999 dan perusahaan kami sudah memiliki lisensi resmi. MONOCYCLE menjual produk-produk local dan internasional, Kami memiliki misi untuk meningkatkan otomotif di indonesia supaya pasar nya bisa Go Internasional.
						</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		if (($_SESSION['status_login'] == 'gagal') && (isset($_SESSION['status_login']))){
				$_SESSION['status_login'] = 'kosong';
			echo '	<style type="text/css">
						#login-gagal{
							display:block;
						}
					</style>';
		}else{
			echo '	<style type="text/css">
						#login-gagal{
							display:none;
						}
					</style>';
		}

		if (($_SESSION['status_register'] == 'gagal') && (isset($_SESSION['status_register']))){
				$_SESSION['status_register'] = 'kosong';
			echo '	<style type="text/css">
						#register-gagal{
							display:block;
						}
					</style>';
		}else{
			echo '	<style type="text/css">
						#register-gagal{
							display:none;
						}
					</style>';
		}


		if (($_SESSION['transaksi_aman'] == 'sukses') && (isset($_SESSION['transaksi_aman']))){
				$_SESSION['transaksi_aman'] = 'kosong';
			echo '	<style type="text/css">
						#transaksi_sukses{
							display:block;
						}
					</style>';
		}else{
			echo '	<style type="text/css">
						#transaksi_sukses{
							display:none;
						}
					</style>';
		}



	?>
	<div id="login-gagal" class="container-fluid">
		<div class="row">
			<div class="col-12" style="background-color: rgba(0,0,0,0.8); height: 100vh; position: absolute; z-index: 2;">
				<div class="col-sm-8 m-auto bg-second" style="height: auto;">
				<button id="login-gagal-close" class="fa fa-close bg-second" style="margin:10px 0 0 auto; color: white; border:none; font-size: 7vh;" ></button>
						<p class=" bg-second text-white p-2 h1" style="text-align: center;"> USERNAME DAN PASSWORD SALAH</p>
				</div>
			</div>
		</div>
	</div>
	<div id="register-gagal" class="container-fluid">
		<div class="row">
			<div class="col-12" style="background-color: rgba(0,0,0,0.8); height: 100vh; position: absolute; z-index: 2;">
				<div class="col-sm-8 m-auto bg-second" style="height: auto;">
				<button id="register-gagal-close" class="fa fa-close bg-second" style="margin:10px 0 0 auto; color: white; border:none; font-size: 7vh;" ></button>
						<p class=" bg-second text-white p-2 h1" style="text-align: center;"> USERNAME SUDAH DIGUNAKAN</p>
				</div>
			</div>
		</div>
	</div>
	<div id="transaksi_sukses" class="container-fluid">
		<div class="row">
			<div class="col-12" style="background-color: rgba(0,0,0,0.8); height: 100vh; position: absolute; z-index: 2;">
				<div class="col-sm-8 m-auto bg-success" style="height: auto;">
				<button id="close" class="fa fa-close bg-success" style="margin:10px 0 0 auto; color: white; border:none; font-size: 7vh;" ></button>
						<p class=" bg-success text-white p-2 h1" style="text-align: center;"> PEMESANAN SUKSES</p>
						<p class=" bg-success text-white p-2 h5" style="text-align: center;">Code Pemesanan : <?php echo rand(1000000,9999999);?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid ">
		<div class="row header">
			<div class="navbar bg-change col-lg-2 navbar-me">
				<div class="navbar-brand text-change font-judul">MONOSPORT</div>
			</div>
			<div class="navbar bg-change col-lg-4 navbar-me">
				<div class="nav nav-me text-center">
					<a href="..\index.php" class="item text-change font-menu">Home</a>
					<a href="#" class="item font-menu text-change">Product</a>
					<a href="#" id="About" class="About item font-menu text-change">About</a>
					<a href="#" id="Contact" class="Contact item font-menu text-change">Contact</a>
					<a href="#" id="Contact2" class="Contact item font-menu text-change d-none">Contact</a>
				</div>
			</div>
			<div  class="col">
				<div class="navbar d-flex search">
						<input id="inputsearch" type="text" name="search" placeholder="SEARCH">
					<?php
						if ($_SESSION['status'] == 'login') {
							echo '

							<div class="nav nav-me2">
							<button id="logocart" onclick="showinfo();" class="btn fa fa-inbox " style="color:white; font-size: 3vw;"></button>
							</div>
							<div class="nav nav-me2">
								<a href="..\database/logout.php" id="LOGOUT" class="item btn bg-white font-menu">LOGOUT</a>
							</div>';
						}else{
							echo '
								<div class="nav nav-me2">
									<div id="LOGIN" class="item btn bg-second text-white font-menu">LOGIN</div>
									<div id="REGISTER" class="item btn bg-white font-menu">REGISTER</div>
								</div>
								';
						}
					?>
				</div>
			</div>
		</div>
		<div id="main" class="row">
			<div class="main col bg-second">
				<div class="row">
					<span class="text-center col-sm-12 font-judul text-white" style="font-size: 6vw;"><i class="fa fa-motorcycle blink"></i> PRODUCT <i class="fa fa-motorcycle blink" style="transform: scaleX(-1);"></i></span>
				</div>
				<div class="row ">
					<div class="ml-auto mr-auto col-sm-10" style=""><i class="fa fa-motorcycle moveline" style="color: white;"></i></div>
				</div>
				<div class="row">
					<div class="col bg-white" style="height: 1px;"></div>
				</div>
				<style type="text/css">
					#titleSearch,#Search{
						display: none;
					}
				</style>
				<div class="row" id="tangki">
					<div class="col mt-3 text-white font-menu">
						TANGKI MOTOR COSTUM
						<i class="fa fa-search text-white" style="font-size: 1vw;"></i>
					</div>
				</div>
				<div class="row mt-2 h-search">
					<div class="col">
						<div id="listtangki" class="d-flex product">
						</div>
					</div>
				</div>
				<div class="row mt-3" id="knalpot">
					<div class="col mt-3 text-white font-menu">
						KNALPOT COSTUM
						<i class="fa fa-search text-white" style="font-size: 1vw;"></i>
					</div>
				</div>
				<div class="row mt-2 h-search">
					<div class="col">
						<div id="listknalpot" class="d-flex product">
						</div>
					</div>
				</div>
			</div>
			<div id="login-register" class="login-register col-sm-3 bg-white" style="display: none; height: auto; position: absolute; right: 0;">
				<button id="login-register-close" class="fa fa-close" style="margin:10px 0 0 0; color: black; border:none;" ></button>
				<div id="login-form" class="row text-center p-2" style="display: none">
					<span style="font-size: 8vh;" class="col font-judul blink">LOGIN</span>
					<form action="..\database/login.php" method="post" class="row m-auto" id="login">
						<input type="text" name="username" placeholder="Username">
						<input type="password" name="password" placeholder="Password">
						<input type="submit" name="button" class="btn bg-second col text-white font-menu" value="LOGIN">
					</form>
				</div>


				<div id="register-form" class="row text-center p-2 blink" style="display: none">
					<span class="col font-judul" style="font-size: 6vh;">REGISTER</span>
					<form action="..\database/register.php" method="post" class="row m-auto" id="contact">
						<input required type="text" name="name" placeholder="Nama">
						<input required type="text" name="username" placeholder="Username">
						<input required type="password" name="password" placeholder="Password" style="width: 100%;">
						<input required type="email" name="email" placeholder="Email" style="width: 100%;">
						<input type="submit" name="bg-second" value="REGISTER" class="btn bg-second text-white col font-menu">
					</form>
				</div>

				<div id="contact-form" class="row text-center p-2">
					<span class="col font-judul blink" style="font-size: 6vh;">CONTACT ME</span>
					<form action="..\database/contact.php" method="post" class="row m-auto" id="contact">
						<input required id="email_contact" type="email" name="email" placeholder="Email" >
						<input required id="name_contact" type="text" name="nama" placeholder="Name">
						<textarea id="comment_contact" type="text" name="comment" class="col-sm-12" style="height: 100px;" placeholder="Pesan"></textarea>
						<input type="submit" name="button" class="btn bg-second col text-white font-menu" onclick="sendEmail()" value="SUBMIT">
					</form>
				</div>
			</div>
		</div>
		<div class="row footer">
			<div class="col-lg-6">
			</div>
			<div  class="bg-change col-lg-6">
				<div class="copyright mt-2 text-change font-menu"><i class="fa fa-thumbs-o-up" ></i> MOTORCYCLE COSTUM INDONESIA <i class="fa fa-thumbs-o-up"></i></div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script type="text/javascript" src="login.js"></script>
	<script type="text/javascript" src="about.js"></script>
	<script type="text/javascript" src="search.js"></script>
	<script type="text/javascript" src="contact.js"></script>
	<script type="text/javascript" src="listproduct.js"></script>
	<script type="text/javascript" src="varglobal.js"></script>
	<script type="text/javascript" src="addtocart.js"></script>
</body>
</html>
