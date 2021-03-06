<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="admin/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/vendors/ti-icons/css/themify-icons.css">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css" rel="stylesheet"/>

    <title>Deba Store</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="img/deba.png" width="100px" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>

                            <!--
                                <li class="submenu">
                                    <a href="javascript:;">Drop Down</a>
                                    <ul>
                                        <li><a href="#">Drop Down Page 1</a></li>
                                        <li><a href="#">Drop Down Page 2</a></li>
                                        <li><a href="#">Drop Down Page 3</a></li>
                                    </ul>
                                </li>
                            -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Agen</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Pelayan</a></li>
                            <li class="scroll-to-section"><a href="#chefs">reseller</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Food</a></li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Hubungi kami</a></li>
                            <li>
                                    @auth
                                    <a class="nav-link" href="{{ url('showcart', Auth::user()->id) }}">
                                        <span class="badge badge-pill bg-danger">
                                        {{ $count }}
                                    </span>
                                    <span><i class="fas fa-shopping-cart"></i></span></a>
                                    @endauth
                                    @guest
                                    <a class="nav-link">
                                        <span class="badge badge-pill bg-danger">
                                        0
                                    </span>
                                    <span><i class="fas fa-shopping-cart"></i></span></a>
                                    @endguest
                            </li>
                            <li>
                                @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                <li class="scroll-to-section">
                                    <x-app-layout>

                                    </x-app-layout>
                                </li>
                            @else
                                <li class="scroll-to-section"><a href="{{ route('login') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                                @if (Route::has('register'))
                                    <li class="scroll-to-section"><a href="{{ route('register') }}"
                                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                    </li>
                                @endif
                            @endauth
                </div>
                @endif
                </li>
                </ul>
                <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <img src="img/deba.png" width="150px">
                            <h6>Molo so hita bah ise be?</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Pesan Tempat</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="img/gmb1.jpg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="img/gmb2.jpg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="img/gmb3.jpg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                        </div>
                        <p>Ijinkan kami memperkenalkan diri dari UMKM <strong>deba group</strong>Desa Hutapaung Kecamatan Polllung, Kabupaten Humbang Hasundutan Provinsi Sumatera Utara (profile terlampir). Adapun UMKM ???deba group??? saya dirikan awalnya untuk menggali potensi lokal di desa kami, serta memperkenalkan potensi tersebut ke luar.
                            Berawal dari akhir 2016 kami membuka bisnis sarapan pagi, serta membuka Loket Pengiriman JNE Express Pollung. Kemudian akhir 2017, usaha sarapan pagi tersebut kami tingkatkan menjadi Rumah Makan Nasional (Lapo Mangan Nasional).
                            Diawal 2018 melihat begitu besarnya potensi hasil Pertanian di kampung serta cuaca yang sejuk/dingin, kami menambah jasa menjadi Kode Kopi (coffeeshop speciality) serta mengeluarkan produk baru berupa BANDREK ANDALIMAN segar/cair.
                            Untuk meningkatkan penjualan kami mencoba memproduksi Bandrek andaliman tersebut dalam bentuk bubuk dalam kemasan sachet pcs, dan ternyata mendapat respon baik dari masyarakat. Jaringan UMKM semakin terjalin dengan adanya JNE yg semakin mempermudah distribusi #Bandal ke beberapa daerah. Perijinan dan lainnya kami lengkapi, merk kami daftarkan di Kemenhumham.
                            Kemudian kami terkendala di harga produksi yang agak tinggi dikarenakan masih di skala mikro/kecil. Untuk meningkatkan quantity dan menurunkan biaya produksi kami terkendala alat (mesin sachet & sealer) serta modal untuk beli bahan baku agar biaya produksi semakin kecil dan harga jual sesuai dengan keinginan konsumen.

                        </p>
                        <div class="row">
                            <div class="col-4">
                                <img src="img/gmb1.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="img/gmb2.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="img/gmb3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                            <img src="img/gmb2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->



    @include('food')



    @include('foodchef')


    @include('reservation')


    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/1587305851401800/posts/2565510400248002/"><i class="fa fa-facebook"></i></a></li>
                            {{-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li> --}}
                            <li><a href="https://www.instagram.com/bandrek_andaliman/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <p style="color: rgb(249, 249, 249)">QRIS</p>
                        <img width="100px" src="img/qris.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>?? Copyright Deba Store</p>
                        <p>?? Copyright Deba Store</p>
                        <p>?? Copyright Deba Store</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
</body>

</html>
