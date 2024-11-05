<!doctype html>
<html lang="en" class="no-js">

<head>
    <title>RimaBatik</title>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="meta description">
    <link rel="shortcut icon" href="assets/img/mini-logo.png" type="image/x-icon">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- swiper js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- all css -->
    <style>
        :root {
            --primary-color: #4D280E;
            --secondary-color: #CB9E47;

            --btn-primary-border-radius: 0.25rem;
            --btn-primary-color: #fff;
            --btn-primary-background-color: #4D280E;
            --btn-primary-border-color: #4D280E;
            --btn-primary-hover-color: #fff;
            --btn-primary-background-hover-color: #A18E6D;
            --btn-primary-border-hover-color: #A18E6D;
            --btn-primary-font-weight: 500;

            --btn-secondary-border-radius: 0.25rem;
            --btn-secondary-color: #00234D;
            --btn-secondary-background-color: transparent;
            --btn-secondary-border-color: #00234D;
            --btn-secondary-hover-color: #fff;
            --btn-secondary-background-hover-color: #00234D;
            --btn-secondary-border-hover-color: #00234D;
            --btn-secondary-font-weight: 500;

            --heading-color: #4D280E;
            --heading-font-family: 'Poppins', sans-serif;
            --heading-font-weight: 700;

            --title-color: #4D280E;
            --title-font-family: 'Poppins', sans-serif;
            --title-font-weight: 400;

            --body-color: #000;
            --body-background-color: #fff;
            --body-font-family: 'Poppins', sans-serif;
            --body-font-size: 14px;
            --body-font-weight: 400;

            --section-heading-color: #000;
            --section-heading-font-family: 'Poppins', sans-serif;
            --section-heading-font-size: 48px;
            --section-heading-font-weight: 600;

            --section-subheading-color: #000;
            --section-subheading-font-family: 'Poppins', sans-serif;
            --section-subheading-font-size: 16px;
            --section-subheading-font-weight: 400;
        }
    </style>

    <link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="body-wrapper">
        <!-- header navbar start --> 
            @include('partials.navbar')
        <!-- header  navbar end -->

        <main id="MainContent" class="content-for-layout">
            <div class="about-page">
                <!-- about hero start -->
                <div class="about-hero mt-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="about-hero-content">
                                    <h2 class="about-hero-title">Rima Batik</h2>
                                    <p class="about-hero-subtitle" style="text-align: justify">
                                        Rima Batik adalah usaha batik khas Kota Depok yang menggabungkan kekayaan budaya lokal dengan sentuhan modern. Setiap motif batik yang dihasilkan oleh Rima Batik dirancang dengan teliti untuk mencerminkan kearifan lokal dan memperkuat identitas budaya Depok. Usaha ini menawarkan berbagai koleksi batik berkualitas tinggi yang unik dan elegan, menjadikannya pilihan tepat bagi para pecinta batik yang menghargai nilai-nilai tradisional dalam balutan desain kontemporer.
                                        <br>
                                        Dengan berfokus pada kualitas bahan dan keindahan motif, Rima Batik menggunakan kain katun primisima yang nyaman dan tahan lama. Motif-motif batik Rima terinspirasi dari keindahan alam, kekayaan budaya, dan cerita-cerita khas Depok, seperti motif Gong Si Bolong, belimbing, dan berbagai elemen lain yang memiliki nilai historis dan budaya tinggi. Setiap helai batik diproduksi dengan teknik batik tulis yang detail dan dikerjakan oleh para pengrajin berpengalaman, memastikan kualitas dan ketelitian yang terjaga di setiap prosesnya.
                                        <br>
                                        Rima Batik hadir tidak hanya sebagai produk fesyen, tetapi juga sebagai bentuk pelestarian budaya dan promosi kearifan lokal. Dalam perjalanannya, Rima Batik ingin membawa batik Depok lebih dikenal di kancah nasional dan internasional, sehingga semakin banyak orang yang bisa mengenal dan mengapresiasi keindahan budaya Indonesia melalui batik.
                                    </p>
                                    
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="about-hero-img">
                                    <img src="{{asset('assets/img/about/rimabatik.jpg')}}" alt="img" style="border-radius: 10px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- about hero end -->

                <!-- about promotion start -->
                <div class="promotional-area mt-100">
                    <div class="row g-0 justify-content-center">
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-duration="300">
                            <div class="promotional-item overlay-blue">
                                <img src="assets/img/about/p1.jpg" alt="img">
                                <div class="promotional-absolute">
                                    <div class="promotional-content text-center">
                                        <h2 class="promo-title">Motif Khas Lokal yang Unik</h2>
                                        <p class="promo-subtitle">Rima Batik menonjol dengan motif-motif khas Kota Depok, seperti Gong Si Bolong dan belimbing, yang mencerminkan budaya dan kekayaan alam lokal. Setiap motif dirancang untuk mengangkat nilai-nilai budaya Depok, menjadikan Rima Batik tidak hanya indah, tetapi juga penuh makna.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-duration="700">
                            <div class="promotional-item overlay-black">
                                <img src="assets/img/about/p2.jpg" alt="img">
                                <div class="promotional-absolute">
                                    <div class="promotional-content text-center">
                                        <h2 class="promo-title">Kualitas Tinggi dengan Bahan Premium</h2>
                                        <p class="promo-subtitle">Rima Batik menggunakan bahan katun primisima yang lembut, nyaman, dan tahan lama. Proses produksinya mengutamakan teknik batik tulis yang teliti, sehingga setiap kain memiliki kualitas yang unggul dan detail yang memikat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-duration="1000">
                            <div class="promotional-item overlay-yellow">
                                <img src="assets/img/about/p3.jpg" alt="img">
                                <div class="promotional-absolute">
                                    <div class="promotional-content text-center">
                                        <h2 class="promo-title">Desain Modern yang Tetap Berakar pada Tradisi </h2>
                                        <p class="promo-subtitle">Rima Batik menggabungkan desain modern dengan elemen tradisional, menciptakan batik yang cocok untuk berbagai kesempatan. Dengan gaya yang elegan dan kontemporer, koleksi Rima Batik mampu menarik minat generasi muda sekaligus mempertahankan nilai-nilai budaya.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- about promotion end -->

                <!-- about banner start -->
                <div class="about-banner mt-100" data-aos="fade-up" data-aos-duration="700">
                    <div class="container">
                        <div class="about-banner-wrapper">
                            <div class="about-banner-content">
                                <p class="about-banner-text heading_48">Lebih dekat dengan kami</p>
                                <a href="{{route ('kontak')}}" class="about-banner-btn">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- about banner end -->



            </div>            
        </main>
        
        
        {{-- Footer --}}
            @include('partials.footer')
        {{-- Footer --}}

        <!-- Humberger Navigasi Responsive -->
            @include('partials.humberger')
        <!-- Humberger Navigasi Responsive -->
        
        <!-- scrollup start -->
        <button id="scrollup">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg>  
        </button>
        <!-- scrollup end -->
        
        <!-- all js -->
        <script src="assets/js/vendor.js"></script>
        <script src="assets/js/main.js"></script>
    </div>
</body>

</html>