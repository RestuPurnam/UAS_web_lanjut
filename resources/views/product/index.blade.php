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
    <title>produk </title>
</head>
<body>
    <main class="flex-shrink-0" >
    <nav>
		<input type="checkbox" id="check">
		<label for="check" class="checkbtn">
			<i class="fa fa-bars"></i>
		</label>
		<label class="logo">Purnama Market</label>
		<ul>
			<li class="nav-item" ><a class="nav-link" href="{{ url('halaman') }}">Halaman Utama</a></li>

			<li class="nav-item">
                <a class="nav-link" href="{{ url('product') }}">produk</a>
            </li>

             <li class="nav-item">
             <a class="nav-link" href="{{ url('login') }}">Login</a>
            </li>
		</ul>
	</nav>
    <section id="about" class="about">
        <div class="container  course pb-5 pt-5 ">
            <h2 class="text-center">Produk</h2>
            <br>
        <div class="row row-cols-1 row-cols-md-3 g-4 text-center custom-gallery">
            @forelse ($data as $row)
            <div class="col">
                <div class="card shadow-sm">
                    <div class="">
                        <img src="/images/{{ $row->image }}" alt="{{ $row->image }}" width="350" height="200">
                    </div>

                    <div class="card-body">
                        <p><strong>Nama Produk: </strong> {{ $row->nama_produk }}</p>
                        <p><strong>Keterangan: </strong>{{ $row->keterangan }}</p>
                        <p><strong>Harga: </strong>{{ $row->harga }}
                        </p>
                    </div>
                </div>
            </div>
            @empty
                <div class="alert alert-danger">
                    Data news belum tersedia
                </div>
            @endforelse
        </div>
        </div>
    </section>
    <br>
    <br>
    <br>
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
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="backend/js/scripts.js"></script>
</body>
</html>
