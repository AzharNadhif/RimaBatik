@php
    use Illuminate\Support\Str;
@endphp

<!doctype html>
<html lang="en" class="no-js">

<head>
    <title>RimaBatik</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
       <!-- Navbar -->
        @include('partials.navbar')
        {{-- Navbar --}}

        <main id="MainContent" class="content-for-layout">
            <!-- slideshow start -->
            <div class="slideshow-section position-relative">
                <div class="slideshow-active activate-slider" data-slick='{
                    "slidesToShow": 1, 
                    "slidesToScroll": 1, 
                    "dots": true,
                    "arrows": true,
                    "responsive": [
                        {
                        "breakpoint": 768,
                        "settings": {
                            "arrows": false
                        }
                        }
                    ]
                }'>
                    <div class="slide-item slide-item-bag position-relative">
                        <img class="slide-img d-none d-md-block" src="assets/img/slideshow/slide1.png" alt="slide-1">
                        <img class="slide-img d-md-none" src="assets/img/slideshow/slide1-m.png" alt="slide-1">
                        <div class="content-absolute content-slide">
                            <div class="container height-inherit d-flex align-items-center justify-content-end">
                                <div class="content-box slide-content slide-content-1 py-4">
                                    <h2 class="slide-heading heading_72 animate__animated animate__fadeInUp"
                                        data-animation="animate__animated animate__fadeInUp">
                                        Batik Kekinian Warga Depok
                                    </h2>
                                    <p class="slide-subheading heading_24 animate__animated animate__fadeInUp"
                                        data-animation="animate__animated animate__fadeInUp">
                                        Look for your inspiration here
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item slide-item-bag position-relative">
                        <img class="slide-img d-none d-md-block" src="assets/img/slideshow/slide2.png" alt="slide-2">
                        <img class="slide-img d-md-none" src="assets/img/slideshow/slide2-m.png" alt="slide-2">
                        <div class="content-absolute content-slide">
                            <div class="container height-inherit d-flex align-items-center justify-content-start">
                                <div class="content-box slide-content slide-content-1 py-4 text-center">
                                    <h2 class="slide-heading heading_72 animate__animated animate__fadeInUp text-start"
                                        data-animation="animate__animated animate__fadeInUp">
                                        Sentuhan Batik Depok, Pesona yang Tak Terlupakan
                                    </h2>
                                    <p class="slide-subheading heading_24 animate__animated animate__fadeInUp text-start"
                                        data-animation="animate__animated animate__fadeInUp">
                                        Look for your inspiration here
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item slide-item-bag position-relative">
                        <img class="slide-img d-none d-md-block" src="assets/img/slideshow/slide3.png" alt="slide-3">
                        <img class="slide-img d-md-none" src="assets/img/slideshow/slide3-m.png" alt="slide-3">
                        <div class="content-absolute content-slide">
                            <div class="container height-inherit d-flex align-items-center justify-content-center">
                                <div class="content-box slide-content slide-content-1 py-4 text-center">
                                    <h2 class="slide-heading heading_72 animate__animated animate__fadeInUp text-white"
                                        data-animation="animate__animated animate__fadeInUp">
                                        Ragam Motif Depok, Keindahan yang Memikat
                                    </h2>
                                    <p class="slide-subheading heading_24 animate__animated animate__fadeInUp text-white"
                                        data-animation="animate__animated animate__fadeInUp">
                                        Look for your inspiration here
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="activate-arrows"></div>
                <div class="activate-dots dot-tools"></div>
            </div>
            <!-- slideshow end -->

            <!-- banner start -->
            <div class="grid-banner mt-100 overflow-hidden">
                <div class="collection-tab-inner mt-0">
                    <div class="container">
                        <div class="grid-container-2">
                            <a class="grid-item grid-item-1 position-relative rounded mt-0 d-flex" href="#"
                                data-aos="fade-right" data-aos-duration="700">
                                <img class="banner-img rounded" src="assets/img/banner/f1.png" alt="banner-1">
                                <div class="content-absolute content-slide">
                                    <div class="container height-inherit d-flex">
                                        <div class="content-box banner-content p-4">
                                            <h2 class="heading_34 primary-color">Yang Baru <br>Dari Kami</h2>
                                            <p class="text_14 mt-2 primary-color">Rilisan Terbaru</p>
                                            <!-- <span class="text_12 mt-4 link-underline d-block primary-color">
                                                VIEW MORE
                                            </span> -->
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="grid-item grid-item-2 position-relative rounded mt-0 d-flex" href="#"
                                data-aos="fade-right" data-aos-duration="700">
                                <img class="banner-img rounded" src="assets/img/banner/f2.png" alt="banner-1">
                                <div class="content-absolute content-slide">
                                    <div class="container height-inherit d-flex justify-content-end">
                                        <div class="content-box banner-content p-4 text-end">
                                            <h2 class="heading_34 primary-color">Kunjungi <br>Toko Kami</h2>
                                            <p class="text_14 mt-2 primary-color">Di Kota Depok</p>
                                            <!-- <span class="text_12 mt-4 link-underline d-block primary-color">
                                                VIEW MORE
                                            </span> -->
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="grid-item grid-item-3 position-relative rounded mt-0 d-flex" href="#"
                                data-aos="fade-left" data-aos-duration="700">
                                <img class="banner-img rounded" src="assets/img/banner/f3.png" alt="banner-1">
                                <div class="content-absolute content-slide">
                                    <div class="container height-inherit d-flex">
                                        <div class="content-box banner-content p-4">
                                            <h2 class="heading_34 primary-color">Produk<br>Terlaris</h2>
                                            <p class="text_14 mt-2 primary-color">Segera beli koleksi terlaris kami</p>
                                            <!-- <span class="text_12 mt-4 link-underline d-block primary-color">
                                                VIEW MORE
                                            </span> -->
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banner end -->

            <!-- Sekilas About start -->
            <div class="single-banner-section mt-100 overflow-hidden">
                <div class="position-relative overlay">
                    <img class="single-banner-img" src="assets/img/banner/single-banner.png" alt="slide-1">

                    <div class="content-absolute content-slide">
                        <div class="container height-inherit d-flex align-items-center">
                            <div class="content-box single-banner-content py-4">
                                <h2 class="single-banner-heading heading_42  animate__animated animate__fadeInUp"
                                    data-animation="animate__animated animate__fadeInUp">
                                    Rima Batik
                                </h2>
                                <p class="single-banner-text text_16  animate__animated animate__fadeInUp"
                                    data-animation="animate__animated animate__fadeInUp">
                                    Rima Batik adalah usaha batik khas dari Kota Depok yang mengusung sentuhan budaya lokal dalam setiap motifnya. Dengan fokus pada kualitas dan desain modern, Rima Batik menawarkan berbagai koleksi batik yang menampilkan motif unik yang mencerminkan kearifan lokal Depok.
                                </p>
                                <a class="btn-primary single-banner-btn animate__animated animate__fadeInUp"
                                    href="{{route('tentang')}}"
                                    data-animation="animate__animated animate__fadeInUp">
                                    Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sekilas About end -->

            <!-- Produk start -->
            <div class="featured-collection mt-100 overflow-hidden">
                <div class="collection-tab-inner">
                    <div class="container">
                        <div class="section-header text-center">
                            <h2 class="section-heading primary-color">Beberapa Produk Kami</h2>
                        </div>
                        <div class="row">
                            
                            @foreach($produks as $produk)
                            <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <a class="hover-switch" href="{{ route('produk', $produk->id_produk) }}">
                                            @php
                                            $images = json_decode($produk->gambar, true);
                                            @endphp
                                            @if(is_array($images) && count($images) > 1)
                                                <img class="secondary-img" src="{{ asset($images[1]) }}" alt="{{ $produk->namaproduk }}">
                                            @endif
                                            <img class="primary-img" src="{{ asset($images[0] ?? 'default.jpg') }}" alt="{{ $produk->namaproduk }}">
                                        </a>
                                    </div>
                                    <div class="product-card-details">
                                        <h3 class="product-card-title">
                                            <a href="{{ route('produk', $produk->id_produk) }}">{{$produk->namaproduk}}</a>
                                        </h3>
                                        <div class="product-card-price">
                                            <span class="card-price-regular">Rp. {{ number_format($produk->harga, 0, ',', '.') }}</span>
                                            <!-- <span class="card-price-compare text-decoration-line-through">$1759</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            @endforeach                        
                        </div>
                        <div class="view-all text-center" data-aos="fade-up" data-aos-duration="700">
                            <a class="btn-primary" href="{{route('katalog')}}">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Produk end -->

            <!-- Galeri Event -->
            <div class= mt-100 overflow-hidden">
                <div class="collection-tab-inner mt-0">
                    <div class="container">
                        <div class="section-header text-center">
                            <h2 class="section-heading primary-color">Galeri Event Kami</h2>
                        </div>
                        <div class="shop-category-2 shop-category-inner">
                            @foreach($events as $index => $event)
                                <!-- Alternate between fade-left and fade-right based on the index -->
                                <div class="scattered-item" data-aos="{{ $index % 2 == 0 ? 'fade-left' : 'fade-right' }}" data-aos-duration="700">
                                    <div class="scattered-wrapper">
                                        <div class="scattered-content">
                                            <!-- Display the event image dynamically -->
                                            @foreach(json_decode($event->gambar, true) as $img)
                                            <img src="/{{ $img }}"alt="Gambar Produk" class="scattered-img">
                                            @endforeach
                                        </div>
                                        <div class="scattered-details">
                                            <!-- Display the event title and description dynamically -->
                                            <h2 class="scattered-heading primary-color">{{ $event->namaacara }}</h2>
                                            
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Galeri Event end -->

            <!-- testimonial start -->
            <div class="testimonial-section mt-100 overflow-hidden home-section">
                <div class="testimonial-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-12" data-aos="fade-right" data-aos-duration="700">
                                <div class="section-header">
                                    <h2 class="section-heading primary-color">Kata Pembeli</h2>
                                    <p class="section-subheading">
                                        Berbagi pengalaman mereka dalam menggunakan produk kami. Dari kualitas bahan hingga keindahan motif batik khas, setiap testimoni menggambarkan kepuasan dan kepercayaan pelanggan terhadap Rima Batik.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 offset-lg-1 col-md-12 col-12" data-aos="fade-left"
                                data-aos-duration="700">
                                <div class="testimonial-container position-relative">
                                    <div class="testimonial-slideshow common-slider" data-slick='{
                                            "slidesToShow": 1, 
                                            "slidesToScroll": 1,
                                            "dots": false,
                                            "arrows": true
                                        }'>
                                        @foreach($testimonis as $testi)
                                        <div class="testimonial-item">
                                            <div class="testimonial-icon-wrap d-flex align-items-center">
                                                <div class="testimonial-icon-quote">
                                                    <svg width="40" height="29" viewBox="0 0 40 29" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0 28.99L11.7 0H19.5L12.22 28.99H0ZM20.28 28.99L32.11 0H39.91L32.5 28.99H20.28Z"
                                                            fill="#4D280E" />
                                                    </svg>
                                                </div>
                                                <div class="testimonial-icon-star d-flex align-items-center ms-3">
                                                    <img src="assets/img/icon/star.png" alt="img">
                                                    <img src="assets/img/icon/star.png" alt="img">
                                                    <img src="assets/img/icon/star.png" alt="img">
                                                    <img src="assets/img/icon/star.png" alt="img">
                                                    <img src="assets/img/icon/star.png" alt="img">
                                                </div>
                                            </div>
                                            <p class="testimonial-review my-4 text_16">
                                               {{$testi->isi}}
                                            </p>
                                            <div class="testimonial-reviewer d-flex align-items-center">
                                                <div class="reviewer-img">
                                                    {{-- <img src="assets/img/testimonial/john.jpg" alt="img"> --}}
                                                </div>
                                                <div class="reviewer-info ms-4">
                                                    <h4 class="reviewer-name heading_18 mb-2 primary-color">{{$testi->nama}}
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="activate-arrows show-arrows-always article-arrows arrows-white"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- testimonial end -->

            <!-- latest blog start -->
            <div class="latest-blog-section mt-100 overflow-hidden home-section">
                <div class="latest-blog-inner">
                    <div class="container">
                        <div class="section-header text-center">
                            <h2 class="section-heading primary-color">Acara Terbaru Kami</h2>
                        </div>
                        <div class="article-card-container position-relative">
                            <div class="common-slider" data-slick='{
                                "slidesToShow": 3, 
                                "slidesToScroll": 1,
                                "dots": false,
                                "arrows": true,
                                "responsive": [
                                  {
                                    "breakpoint": 1281,
                                    "settings": {
                                      "slidesToShow": 2
                                    }
                                  },
                                  {
                                    "breakpoint": 602,
                                    "settings": {
                                      "slidesToShow": 1
                                    }
                                  }
                                ]
                            }'>
            
                                @foreach($events as $event)
                                    <div class="article-slick-item" data-aos="fade-up" data-aos-duration="700">
                                        <div class="article-card bg-transparent p-0 shadow-none">
                                            <a class="article-card-img-wrapper" href="{{ route('article', $event->id_event ) }}">
                                                @foreach(json_decode($event->gambar, true) as $img)
                                                    <img src="/{{ $img }}" alt="Gambar Produk" width="500px" class="article-card-img rounded">
                                                @endforeach
                                                <span class="article-tag article-tag-absolute rounded">Event</span>
                                            </a>
                                            <p class="article-card-published text_12 d-flex align-items-center">
                                                <span class="article-author d-flex align-items-center">
                                                    <span class="icon-author">
                                                        <svg width="15" height="17"
                                                            viewBox="0 0 15 17" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.5 0.59375C4.72888 0.59375 2.46875 2.85388 2.46875 5.625C2.46875 7.3573 3.35315 8.89587 4.69238 9.80274C2.12903 10.9033 0.3125 13.447 0.3125 16.4063H1.75C1.75 13.2224 4.31616 10.6563 7.5 10.6563C10.6838 10.6563 13.25 13.2224 13.25 16.4063H14.6875C14.6875 13.447 12.871 10.9033 10.3076 9.80274C11.6469 8.89587 12.5313 7.3573 12.5313 5.625C12.5313 2.85388 10.2711 0.59375 7.5 0.59375ZM7.5 2.03125C9.49341 2.03125 11.0938 3.63159 11.0938 5.625C11.0938 7.61841 9.49341 9.21875 7.5 9.21875C5.50659 9.21875 3.90625 7.61841 3.90625 5.625C3.90625 3.63159 5.50659 2.03125 7.5 2.03125Z"
                                                                fill="#00234D" />
                                                        </svg>
                                                    </span>
                                                    <span class="ms-2">Admin</span>
                                                </span>
                                            </p>
                                            <h2 class="article-card-heading heading_18">
                                                <a class="heading_18" href="{{ route('article', $event->id_event) }}">
                                                    {{ $event->namaacara }}
                                                </a>
                                            </h2>
                                            <p>{{ Str::words($event->deskripsi, 10, '...') }}</p>
                                        </div>
                                    </div>
                                @endforeach
            
                            </div>
                            <div class="activate-arrows show-arrows-always article-arrows arrows-white"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- latest blog end -->
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