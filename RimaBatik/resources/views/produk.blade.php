<!doctype html>
<html lang="en" class="no-js">
<head>
        <title>RimaBatik</title>
        <!-- meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="meta description">
        <link rel="shortcut icon" href="{{asset('assets/img/mini-logo.png')}}" type="image/x-icon">
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
    
    <link rel="shortcut icon" href="{{ asset('assets/img/mini-logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    {{-- swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    
</head>
<body>
    <div class="body-wrapper">
        <!-- Header -->
        @include('partials.navbar')

        <main id="MainContent" class="content-for-layout">
            <div class="product-page mt-100">
                <div class="container">
                    <div class="row">
                        <!-- Product Gallery -->
                        <div class="col-lg-7 col-md-12 col-12">
                            <div class="product-gallery">
                                <div class="product-img-large">
                                    <div class="img-large-list">
                                        @php
                                            $images = json_decode($produk->gambar, true);
                                        @endphp
                                        @foreach($images as $image)
                                            <div class="img-large-wrapper">
                                                <a href="{{ asset($image) }}" data-fancybox="gallery">
                                                    <img src="{{ asset($image) }}" alt="product-image">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product Details -->
                        <div class="col-lg-5 col-md-12 col-12">
                            <div class="product-details ps-lg-4">
                                <div class="mb-3"><span class="product-availability">In Stock</span></div>
                                <h2 class="product-title mb-3">{{ $produk->namaproduk }}</h2>
                                <div class="product-price-wrapper mb-4">
                                    <span class="product-price regular-price">Rp {{ number_format($produk->harga, 0, ',', '.') }}</span>
                                </div>
                                <div class="product-vendor product-meta mb-3">
                                    <strong class="label">Bahan:</strong> {{ $produk->bahan }}
                                </div>
                                <form class="product-form" action="#">
                                    <div class="buy-it-now-btn mt-2">
                                        <a href="{{ $produk->link }}" target="_blank" class="position-relative btn-atc btn-buyit-now">Pesan Sekarang</a>
                                    </div>
                                </form>
                                <div class="product-accordion">
                                    <h5>Deskripsi Produk</h5>
                                    <p>{{ $produk->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- You May Also Like Section -->
            <div class="featured-collection-section mt-100 home-section overflow-hidden" data-aos="fade-up" data-aos-duration="700">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-heading">Mungkin Tertarik Lainnya</h2>
                    </div>
                    <div class="product-container position-relative">
                        <div class="common-slider" data-slick='{
                            "slidesToShow": 4, 
                            "slidesToScroll": 1,
                            "dots": false,
                            "arrows": true,
                            "responsive": [
                                {
                                    "breakpoint": 1281,
                                    "settings": { "slidesToShow": 3 }
                                },
                                {
                                    "breakpoint": 768,
                                    "settings": { "slidesToShow": 2 }
                                }
                            ]
                        }'>
                            @foreach($relatedProduks as $relatedProduct)
                                <div class="new-item" data-aos="fade-up" data-aos-duration="300">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            @php
                                                $relatedImages = json_decode($relatedProduct->gambar, true);
                                            @endphp
                                            <a class="hover-switch" href="{{ route('produk', $relatedProduct->id_produk) }}">
                                                <img class="secondary-img" src="{{ asset($relatedImages[0] ?? 'default.jpg') }}" alt="product-img">
                                                <img class="primary-img" src="{{ asset($relatedImages[1] ?? $relatedImages[0] ?? 'default.jpg') }}" alt="product-img">
                                            </a>
                                           
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="{{ route('produk', $relatedProduct->id_produk) }}">{{ $relatedProduct->namaproduk }}</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">Rp {{ number_format($relatedProduct->harga, 0, ',', '.') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="activate-arrows show-arrows-always article-arrows arrows-white"></div>
                    </div>
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
        

        <!-- JavaScript files -->
        <script src="{{asset('assets/js/vendor.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
    </div>
</body>
</html>
