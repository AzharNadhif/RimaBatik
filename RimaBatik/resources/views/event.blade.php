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
            <div class="blog-page mt-100">
                <div class="blog-page-wrapper">
                    <div class="container">
                        <div class="row">
                            <h1 class="text-center">Acara Kami</h1>
                            @foreach($events as $event)
                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-duration="700">
                                <div class="article-card bg-transparent p-0 shadow-none">
                                    <a class="article-card-img-wrapper" href="{{ route('article', $event->id_event) }}">
                                        @foreach(json_decode($event->gambar, true) as $img)
                                            <img src="/{{ $img }}" alt="Gambar Produk" width="300px" class="article-card-img rounded">
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
                                        <a class="heading_18" href="{{ route('article', $event->id_event) }}}">
                                            {{ $event->namaacara }}
                                        </a>
                                    </h2>
                                    <p>{{ Str::words($event->deskripsi, 10, '...') }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
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

        
        <!-- all js -->
        <script src="assets/js/vendor.js"></script>
        <script src="assets/js/main.js"></script>
    </div>
</body>

</html>