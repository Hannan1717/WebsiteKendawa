<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>UMKM</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <link rel="stylesheet" href="frontend/styles/style.css">
   <script src="https://kit.fontawesome.com/e004402e47.js" crossorigin="anonymous"></script>
</head>

<body>
   {{-- Navbar  start --}}
   <nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
      <div class="container">
         <a class="navbar-brand text-bold" href="{{ route('home') }}">
            <h3>Kendawa</h3>
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
               <a class="nav-link " aria-current="page"
                  href="{{ route('home') }}">{{ __('messages.navbar.beranda') }}</a>
               <a class="nav-link" href="{{ route('home') }}">{{ __('messages.navbar.potensi') }}</a>
               <a class="nav-link" href="{{ route('kkn') }}">KKN</a>
               <a class="nav-link" href="{{ route('home') }}">{{ __('messages.navbar.kontak') }}</a>
               <a class="nav-link" href="{{ route('admin') }}">Admin</a>

               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="{{ route('language', 'id') }}" role="button"
                     data-bs-toggle="dropdown" aria-expanded="false">
                     {{ strtoupper(Lang::locale()) }}
                  </a>
                  <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="{{ route('language', 'id') }}">ID</a></li>
                     <li><a class="dropdown-item" href="{{ route('language', 'en') }}">EN</a></li>
                  </ul>
               </li>
            </div>
         </div>
      </div>
   </nav>
   {{-- Navbar End --}}

   {{-- section about --}}
   <section class="section-umkm">
      <div class="container " style="padding-top: 40px">
         <h2 class="text-center mb-2 title">UMKM Desa Kendawa</h2>
         <div class="row justify-content-center mt-5">
            @foreach ($umkms as $item)
               <div class="col-md-10">
                  <div class="card mb-4">
                     <div class="row g-0">
                        <div class="col-md-4">
                           <img src="{{ Storage::url($item->image) }}"
                              style="max-height: 220px ;width:800px;object-fit:cover" class="img-fluid rounded-start"
                              alt="...">
                        </div>
                        <div class="col-md-8">
                           <div class="card-body">
                              <h5 class="card-title">{{ $item->nama }}</h5>
                              <p class="card-text" style="text-align: justify">{{ $item->deskripsi }}
                              </p>
                              <a href="https://wa.me/{{ $item->ponsel }}" type="button"
                                 class="btn btn-outline-primary">Hubungi</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            @endforeach

         </div>

      </div>
   </section>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <!-- Letakkan kode JavaScript di bawah ini -->
   <script>
      // Fungsi untuk menambahkan kelas aktif pada menu saat di-scroll
      $(window).on("scroll", function() {
         var scrollDistance = $(window).scrollTop();
         $(".section").each(function(i) {
            if ($(this).position().top <= scrollDistance) {
               $(".navbar-nav .nav-link").removeClass("active");
               $(".navbar-nav .nav-link").eq(i).addClass("active");
            }
         });
      });

      // Fungsi untuk menambahkan kelas aktif pada menu saat tautan diklik
      $(".navbar-nav .nav-link").on("click", function() {
         $(".navbar-nav .nav-link").removeClass("active");
         $(this).addClass("active");
      });
   </script>

</body>

</html>
