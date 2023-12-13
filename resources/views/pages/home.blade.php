<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Desa Kendawa</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <link rel="stylesheet" href="frontend/styles/style.css">
   <script src="https://kit.fontawesome.com/e004402e47.js" crossorigin="anonymous"></script>
</head>

<body>
   {{-- Navbar  start --}}
   <nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary" style="background-color: transparent !important;">
      <div class="container">
         <a class="navbar-brand text-bold" href="#">
            <h3 style="color: white">Kendawa</h3>
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
               <a class="nav-link active" aria-current="page" style="color: white"
                  href="#home">{{ __('messages.navbar.beranda') }}</a>
               <a class="nav-link" style="color: white" href="#potensi">{{ __('messages.navbar.potensi') }}</a>
               <a class="nav-link" style="color: white" href="{{ route('kkn') }}">KKN</a>
               <a class="nav-link" style="color: white" href="#contact">{{ __('messages.navbar.kontak') }}</a>
               <a class="nav-link" style="color: white" href="{{ route('admin') }}">Admin</a>

               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" style="color: white" href="{{ route('language', 'id') }}"
                     role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

   {{-- header --}}
   <header>
      <div class="container">
         <h1 style="font-weight: 700" class="text-header">
            {{ __('messages.welcome.w1') }}
            <br />
            {{ __('messages.welcome.w2') }}

         </h1>
         <a href="#about" class="gradient-button mt-3">{{ __('messages.welcome.Jelajahi') }}</a>
      </div>

   </header>


   {{-- carousel --}}
   {{-- <section id="carousel">

      <div id="carouselExampleCaptions" class="carousel slide">
         <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
               aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
               aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
               aria-label="Slide 3"></button>
         </div>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="frontend/images/desa4.jpg" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
               </div>
            </div>
            <div class="carousel-item">
               <img src="frontend/images/desa2.jpg" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
               </div>
            </div>
            <div class="carousel-item">
               <img src="frontend/images/desa3.jpg" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
               </div>
            </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
         </button>
      </div>
   </section> --}}
   {{-- carousel End --}}

   {{-- section about --}}
   <section class="section-about" id="about">
      <div class="container">
         <h2 class="text-center mt-4 mb-5 title">Kendawa, Jatibarang, Brebes</h2>
         <div class="row justify-content-around" style="margin-top: 80px">
            <div class="col-5">
               <p style="text-align: justify;">
                  <b>Kendawa</b>{{ __('messages.sejarah') }}
               </p>
               <button class="button-23 mt-3" role="button">{{ __('messages.batas') }} </button>
               {{-- <a href="#about" class="about-btn">Batas Wilayah <i class="bx bx-chevron-right"></i></a> --}}
            </div>
            <div class="col-5">
               <div class="icon-boxes d-flex flex-column justify-content-center">
                  <div class="row">
                     <div class="col-md-6 ">
                        <i class="fa-solid fa-arrow-up fa-beat-fade fa-2xl mb-4"></i>
                        <h4 class="mt-1">{{ __('messages.utara') }}</h4>
                        <p>{{ __('messages.batasutara') }}</p>
                     </div>
                     <div class="col-md-6 ">
                        <i class="fa-solid fa-arrow-right fa-beat-fade fa-2xl mb-4"></i>
                        <h4 class="mt-1">{{ __('messages.timur') }}</h4>
                        <p>{{ __('messages.batastimur') }}</p>
                     </div>
                     <div class="col-md-6 mt-5">
                        <i class="fa-solid fa-arrow-down fa-beat-fade fa-2xl mb-4"></i>
                        <h4 class="mt-1">{{ __('messages.selatan') }}</h4>
                        <p>{{ __('messages.batasselatan') }}</p>
                     </div>
                     <div class="col-md-6 mt-5">
                        <i class="fa-solid fa-arrow-left fa-beat-fade fa-2xl mb-4"></i>
                        <h4 class="mt-1">{{ __('messages.barat') }}</h4>
                        <p>{{ __('messages.batasbarat') }}</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   {{-- section potensi desa --}}
   <section id="potensi" class="section-umkm">
      <div class="container">
         <h2 class="title mb-4 text-center">{{ __('messages.navbar.potensi') }}</h2>
         <div class="row">
            <div class="col-md-4">
               <img src="{{ url('frontend/images/potensi.jpeg') }}" style="width: 500px; height: 250px;"
                  class="img-fluid rounded" alt="Gambar">
            </div>
            <div class="col-md-8">
               <p style="text-align: justify">{{ __('messages.brebes') }}</p>
            </div>

         </div>

         <div class="text-center">
            <h2 class="title mb-3 mt-5">UMKM</h2>
            <p>{{ __('messages.umkm') }}</p>
         </div>
         <div class="row justify-content-center mt-5">
            <div class="col-md-10">
               <div class="card mb-4" style="max-width: 1000px;">
                  <div class="row g-0">
                     <div class="col-md-4">
                        <img src="{{ url('frontend/images/umpet.jpeg') }}"
                           style="max-height: 250px;width:800px;object-fit:cover" class="img-fluid rounded-start"
                           alt="...">
                     </div>
                     <div class="col-md-8">
                        <div class="card-body">
                           <h5 class="card-title">Kacang Umpet</h5>
                           <p class="card-text" style="text-align: justify">
                              {{ __('messages.defkacang') }}
                           </p>
                           <a href="{{ route('umkm') }}" type="button"
                              class="btn btn-outline-primary">{{ __('messages.selengkapnya') }}</a>

                        </div>
                     </div>
                  </div>
               </div>
               <div class="card mb-4" style="max-width: 1000px;">
                  <div class="row g-0">
                     <div class="col-md-4 ">
                        <img src="{{ url('frontend/images/tempe.jpeg') }}"
                           style="height: 270px;width: 800px; object-fit: cover" class="img-fluid rounded-start"
                           alt="...">
                     </div>
                     <div class="col-md-8 ">
                        <div class="card-body">
                           <h5 class="card-title">Tempe</h5>
                           <p class="card-text" style="text-align: justify">
                              {{ __('messages.deftempe') }}
                           </p>
                           <a href="{{ route('umkm') }}" type="button"
                              class="btn btn-outline-primary">{{ __('messages.selengkapnya') }}</a>

                        </div>
                     </div>
                  </div>
               </div>
               <div class="card mb-4" style="max-width: 1000px;">
                  <div class="row g-0">
                     <div class="col-md-4">
                        <img src="{{ url('frontend/images/antor.jpeg') }}"
                           style="max-height: 250px;width:800px;object-fit:cover" class="img-fluid rounded-start"
                           alt="...">
                     </div>
                     <div class="col-md-8">
                        <div class="card-body">
                           <h5 class="card-title">Kerupuk Antor</h5>
                           <p class="card-text" style="text-align: justify">
                              {{ __('messages.defkerupuk') }}
                           </p>
                           <a href="{{ route('umkm') }}" type="button"
                              class="btn btn-outline-primary">{{ __('messages.selengkapnya') }}</a>

                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-md-10 d-flex justify-content-center">
               <!-- Menambahkan d-flex dan justify-content-center -->
               <a href="{{ route('umkm') }}" class="fa-solid fa-chevron-down fa-2xl"></a>

            </div>
         </div>

      </div>
   </section>
   {{-- section umkm --}}
   {{-- section organisasi --}}
   <section class="section-organisasi" id="organisasi">
      <div class="container pt-5">
         <h2 class="text-center mb-3 title">{{ __('messages.organisasi.teks') }}</h2>
         <p class="text-center mb-5">{{ __('messages.organisasi.definisi') }}</p>
         <div class="row ">
            <div class="col-md-6 col-lg-3 mb-4 mb-4">
               <div class="card" style="height: 100%">
                  <div class="card-body text-center pt-5 pb-5">
                     <img src="frontend/images/bpd.jpg" class="img-organisasi">
                     <h4 class="mt-2 mb-3" style="font-weight:700">BPD</h4>
                     <p>{{ __('messages.organisasi.bpd') }}</p>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-4">
               <div class="card" style="height: 100%">
                  <div class="card-body text-center pt-5 pb-5">
                     <img src="frontend/images/lpmd.jpg" class="img-organisasi">
                     <h4 class="mt-2 mb-3" style="font-weight:700">LPMD</h4>
                     <p>{{ __('messages.organisasi.lpmd') }}</p>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-4">
               <div class="card" style="height: 100%">
                  <div class="card-body text-center pt-5 pb-5">
                     <img src="frontend/images/kpmd.jpg" class="img-organisasi">
                     <h4 class="mt-2 mb-3" style="font-weight:700">KPMD</h4>
                     <p>{{ __('messages.organisasi.kpmd') }}</p>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-4">
               <div class="card" style="height: 100%">
                  <div class="card-body text-center pt-5 pb-5">
                     <img src="frontend/images/pkk.png" class="img-organisasi">
                     <h4 class="mt-2 mb-3" style="font-weight:700">PKK</h4>
                     <p>{{ __('messages.organisasi.pkk') }}</p>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-4">
               <div class="card" style="height: 100%">
                  <div class="card-body text-center pt-5 pb-5">
                     <img src="frontend/images/linmas.png" class="img-organisasi">
                     <h4 class="mt-2 mb-3" style="font-weight:700">LINMAS</h4>
                     <p>{{ __('messages.organisasi.linmas') }}</p>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-4">
               <div class="card" style="height: 100%">
                  <div class="card-body text-center pt-5 pb-5">
                     <img src="frontend/images/babinsa.png" class="img-organisasi">
                     <h4 class="mt-2 mb-3" style="font-weight:700">BABINSA</h4>
                     <p>{{ __('messages.organisasi.babinsa') }}</p>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-4">
               <div class="card" style="height: 100%">
                  <div class="card-body text-center pt-5 pb-5">
                     <img src="frontend/images/BHABINKAMTIBMAS.png" class="img-organisasi">
                     <h4 class="mt-2 mb-3" style="font-weight:700">BHABINKAMTIBMAS </h4>
                     <p>{{ __('messages.organisasi.bhabinkamtibmas') }}</p>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-4">
               <div class="card" style="height: 100%">
                  <div class="card-body text-center pt-5 pb-5">
                     <img src="frontend/images/bumdes.jpg" class="img-organisasi" style="border-radius: 50px">
                     <h4 class="mt-2 mb-3" style="font-weight:700">BUMDES</h4>
                     <p>{{ __('messages.organisasi.bumdes') }}</p>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-4">
               <div class="card" style="height: 100%">
                  <div class="card-body text-center pt-5 pb-5">
                     <img src="frontend/images/karang.jpg" class="img-organisasi">
                     <h4 class="mt-2 mb-3" style="font-weight:700">KARANG TARUNA</h4>
                     <p>{{ __('messages.organisasi.karang') }}</p>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-4">
               <div class="card" style="height: 100%">
                  <div class="card-body text-center pt-5 pb-5">
                     <img src="frontend/images/pkd.png" class="img-organisasi">
                     <h4 class="mt-2 mb-3" style="font-weight:700">PKD</h4>
                     <p>{{ __('messages.organisasi.pkd') }}</p>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-4">
               <div class="card" style="height: 100%">
                  <div class="card-body text-center pt-5 pb-5">
                     <img src="frontend/images/pamsimas.png" class="img-organisasi">
                     <h4 class="mt-2 mb-3" style="font-weight:700">PAMSIMAS </h4>
                     <p>{{ __('messages.organisasi.pamsimas') }}</p>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </section>

   {{-- section perangkat desa --}}
   <section class="section-umkm" id="perangkat-desa">
      <div class="container">
         <div class="text-center">
            <h2 class="title mb-5">{{ __('messages.pejabat') }}</h2>
         </div>
         <div class="row justify-content-center">
            @foreach ($pejabats as $item)
               <div class="col-12 col-lg-3 mb-4">
                  <div class="card mx-auto image-container">
                     <img src="{{ Storage::url($item->image) }}" class="image">
                     <div class="text-overlay">
                        <h5>{{ $item->nama }}</h5>
                        <p>{{ $item->jabatan }}</p>
                     </div>
                  </div>
               </div>
            @endforeach
         </div>

      </div>

   </section>

   {{-- section kontak --}}
   <section id="contact" class="section-organisasi">
      <div class="container pt-5">
         <h2 class="text-center mb-5 title">{{ __('messages.kontak') }}</h2>
         <div class="row">
            <div class="col-md-4 mb-3">
               <div class="card pt-2 pb-2" style="border-radius:0%">
                  <div class="card-body text-center">
                     <i class="fa-solid fa-location-dot fa-2xl mb-4"></i>
                     <h3>{{ __('messages.alamat') }}</h3>
                     <p>Kendawa, Jatibarang, Brebes</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 mb-3">
               <div class="card pt-2 pb-2" style="border-radius:0%">
                  <div class="card-body text-center">
                     <i class="fa-regular fa-envelope fa-2xl mb-4"></i>
                     <h3>Email</h3>
                     <p>kendawa@gmail.com</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 mb-3">
               <div class="card pt-2 pb-2" style="border-radius:0%">
                  <div class="card-body text-center">
                     <i class="fa-solid fa-phone fa-2xl mb-4"></i>
                     <h3>{{ __('messages.telepon') }}</h3>
                     <p>Nomor kantor</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12 mt-5">
            <iframe class="mb-4 mb-lg-0"
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15842.132285988228!2d109.0492040941137!3d-6.946267932974557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fbb83c42482e7%3A0x749cfc26ad2cc986!2sKendawa%2C%20Jatibarang%2C%20Brebes%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1690179877521!5m2!1sen!2sid"
               style="border:0; width: 100%; height: 384px;" allowfullscreen="" loading="lazy"
               referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
      </div>
   </section>

   <footer class="section-footer mb-4 border-top">
      <div class="container-fluid">
         <div class="row border-top justify-content-center align-items-center pt-4">
            <div class="col-auto text-gray-500 font-weight-light">2023 Copyright KKN TIM II UNDIP 2023 • All rights
               reserved • Made in
               Brebes</div>
         </div>
      </div>
   </footer>

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
