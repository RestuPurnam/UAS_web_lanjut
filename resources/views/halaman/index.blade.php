<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" type = "text/css" href = "backend/css/bootstrap.css " />
	<link rel = "stylesheet" type = "text/css" href = "backend/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="backend/css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src = "backend/js/jquery.js"></script>
    <script src = "backend/js/bootstrap.js"></script>
    <title>Document</title>
</head>
<body>
    <nav>
		<input type="checkbox" id="check">
		<label for="check" class="checkbtn">
			<i class="fa fa-bars"></i>
		</label>
		<label class="logo">Purnama Market</label>
		<ul>
			<li class="nav-item">
                <a class="nav-link" href="{{ url('halaman') }}">Halaman Utama</a>
            </li>

			<li class="nav-item">
                <a class="nav-link" href="{{ url('product') }}">produk</a>
            </li>

             <li class="nav-item">
                <a class="nav-link" href="{{ url('login') }}">Login</a>
            </li>


		</ul>
	</nav>
	<div id="myCarousel" class="carousel slide container-fluid" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
		</ol>
		<div style = "margin:auto;" class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="backend/bg/depan.jpg" style = "width:100%; height:450px;" />
			</div>
			<div class="item">
				<img src="backend/bg/mall.jpg" style = "width:100%; height:450px;" />
			</div>
			<div class="item">
				<img src="backend/bg/buah.jpg" style = "width:100%; height:450px;" />
			</div>
			<div class="item">
				<img src="backend/bg/roti.jpg" style = "width:100%; height:450px;" />
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<br>

		<div class="container" style="text-align: center; font-size: 20px;">
			<h1>SELAMAT DATANG DI PURNAMA MARKET</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>


	<div style = "margin: auto;" class = "container" >
		<div class = "panel panel-default">
			<div class = "panel-body" style="width: 100%">
				<strong style="text-align: center;"><h3>GAMBAR TAMBAHAN</h3></strong>
				<br />
				<br />
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "backend/gambar/baju.jpg" width = "250" height = "250"/>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "backend/gambar/handuk.jpg" width = "250" height = "250"/>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "backend/gambar/jas.jpg" width = "250" height = "250"/>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "backend/gambar/minuman.jpg" width = "250" height = "250"/>
				</div>
				<br style = "clear:both;" />
				<br />
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "backend/gambar/pakean.jpg" width = "250" height = "250"/>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "backend/gambar/singlet.jpg" width = "250" height = "250"/>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "backend/gambar/tas.jpg" width = "250" height = "250"/>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "backend/gambar/kumis.jpg" width = "250" height = "250"/>
				</div>


			</div>
		</div>
	</div>
    <footer class="text-center text-lg-start bg-dark py-3 text-white">

        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <img src="backend/gambar/logo2.png" alt="M Restu P" class="img-fluid" width="50%">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">

                        </h6>
                        <p>
                           PURNAMA MARKET
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Sosial Media
                        </h6>
                        <p>
                            <i class="fa-brands fa-instagram"></i>
                            <a href="https://www.instagram.com/mrestp__?igsh=dXk2cmd4YW92MnZp" class="text-reset">Instagram

                            </a>
                        </p>
                        <p>
                            <i class="fa-brands fa-facebook"></i>
                            <a href="https://www.facebook.com/m.restu.7568?mibextid=ZbWKwL" class="text-reset">Facebook</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Hubungi Saya
                        </h6>
                        <p>
                            <i class="fa-solid fa-location-dot"></i>
                            Alamat: Jalan Pariwisata Kuta mandalika, kuta, Kec. pujut, Kab. Lombok Tengah, NTB.
                        </p>
                        <p>
                            <i class="bi bi-envelope"></i>
                            restupurnama223@gmail.com
                        </p>
                        <p><i class="bi bi-phone"></i> (+62) 83112252388</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center py-4" style="background-color: rgba(0, 0, 0, 0.05);">
            Copyright &copy; 2024 Restu Purnama
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="backend/js/scripts.js"></script>
</body>
</html>
