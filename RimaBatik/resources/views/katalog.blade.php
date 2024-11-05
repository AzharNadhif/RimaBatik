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
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Swiper Js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- all css -->
    <style>
        :root {
            --primary-color: #4D280E;
            --secondary-color: #CB9E47;

            -btn-primary-border-radius: 0.25rem;
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

            ---heading-color: #4D280E;
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

        <!-- Konten Main -->
        <main id="MainContent" class="content-for-layout">
            <div class="collection mt-100">
                <div class="container">
                    <div class="row">
                        <!-- product area start -->
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="filter-sort-wrapper d-flex justify-content-between flex-wrap">
                                <div class="collection-title-wrap d-flex align-items-end">
                                    <h2 class="collection-title heading_24 mb-0">Produk Kami</h2>
                                    <p class="collection-counter text_16 mb-0 ms-2">({{ $produks->count() }} items)</p>
                                </div>
                            </div>
                            <div class="collection-product-container">
                                <!-- Swiper -->
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        @foreach($produks->chunk(6) as $produksChunk)
                                            <div class="swiper-slide">
                                                <div class="row">
                                                    @foreach($produksChunk as $index => $produk)
                                                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-duration="700">
                                                            <div class="product-card">
                                                                <div class="product-card-img">
                                                                    <a class="hover-switch" href="{{ route('produk', $produk->id_produk) }}">
                                                                        @php
                                                                            $images = json_decode($produk->gambar, true);
                                                                        @endphp
                                                                        @if(is_array($images) && count($images) > 1)
                                                                            <img class="secondary-img" src="{{ asset($images[1]) }}" alt="product-img" style="width: 300px">
                                                                        @endif
                                                                        <img class="primary-img" src="{{ asset($images[0] ?? 'assets/img/products/default.jpg') }}" alt="product-img" style="width: 300px">
                                                                    </a>
                                                                </div>
                                                                <div class="product-card-details">
                                                                    <h3 class="product-card-title">
                                                                        <a href="{{ route('produk', $produk->id_produk) }}">{{ $produk->namaproduk }}</a>
                                                                    </h3>
                                                                    <div class="product-card-price">
                                                                        <span class="card-price-regular">Rp. {{ number_format($produk->harga, 0, ',', '.') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                    
                                                        @if (($index + 1) % 3 == 0 && $index + 1 != $produksChunk->count())
                                                            </div><div class="row mt-4"> <!-- Penutup baris pertama, buka baris kedua per slide -->
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    
                                    <div class="pembatas">
                                        <!-- Swiper Pagination -->
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product area end -->
                </div>
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
<!-- Script -->
<!-- JS Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper('.swiper', {
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + '</span>';
      },
    },
  });
</script>
</html>