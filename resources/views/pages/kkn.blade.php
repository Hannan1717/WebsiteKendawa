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
               <a class="nav-link active" href="{{ route('kkn') }}">KKN</a>
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
   <section id="kkn" class="section-umkm">
      <div class="container pt-4">
         <div class="text-center">
            <h2 class="title mb-3">{{ __('messages.kkn.judul') }}</h2>
            <div class="row justify-content-center">
               <div class="col-md-8">

                  <p>{{ __('messages.kkn.desk') }}</p>
               </div>
            </div>
         </div>

         <div class="row d-flex justify-content-center">
            {{-- card sampah --}}
            <div class="card mb-3 p-0 " style="width: 50rem">
               <div id="carouselExampleCaptions" class="carousel slide">
                  <div class="carousel-indicators">
                     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                  </div>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img src="frontend/images/sampah1.jpg" class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                        <img src="frontend/images/sampahh2.jpg" class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                        <img src="frontend/images/sampah3.jpg" class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                        <img src="frontend/images/sampah4.jpg" class="d-block w-100" alt="...">
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
               <div class="card-body">
                  <h5 class="card-title">{{ __('messages.kkn.multi1') }}</h5>
                  <p class="card-text" style="text-align: justify">{{ __('messages.kkn.deskmulti1') }}</p>
                  <p class="card-text"><small class="text-body-secondary"
                        id="last-updated">{{ __('messages.kkn.update') }} {{ $lastupdated }}</small></p>

               </div>
            </div>

            {{-- card stunting --}}
            <div class="card mb-3 p-0 " style="width: 50rem">
               <div id="carouselExampleCaptions2" class="carousel slide">
                  <div class="carousel-indicators">
                     <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                     <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                     <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                     <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                  </div>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img src="frontend/images/stunting1.jpg" class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                        <img src="frontend/images/stunting2.jpg" class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                        <img src="frontend/images/stunting3.jpg" class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                        <img src="frontend/images/stunting4.jpg" class="d-block w-100" alt="...">
                     </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2"
                     data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2"
                     data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                  </button>
               </div>
               <div class="card-body">
                  <h5 class="card-title">Cerdas Parenting, Anak Bebas Stunting
                  </h5>
                  <p class="card-text" style="text-align: justify">{{ __('messages.kkn.deskmulti2') }}

                  </p>
                  <p class="card-text"><small class="text-body-secondary"
                        id="last-updated">{{ __('messages.kkn.update') }} {{ $lastupdated }}</small></p>

               </div>
            </div>
         </div>



   </section>
   <footer class="section-footer mb-4 border-top">
      <div class="container-fluid">
         <div class="row border-top justify-content-center align-items-center pt-4">
            <div class="col-auto text-gray-500 font-weight-light">2023 Copyright KKN TIM II UNDIP 2023 • All
               rights
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
      // Fungsi untuk mengubah waktu menjadi format "hari/bulan/tahun jam:menit:detik"
      function formatTime(date) {
         const day = date.getDate();
         const month = date.getMonth() + 1;
         const year = date.getFullYear();
         const hours = date.getHours();
         const minutes = date.getMinutes();
         const seconds = date.getSeconds();

         return `${day}/${month}/${year} ${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
      }

      // Fungsi untuk mengupdate waktu setiap menit
      function updateLastUpdatedTime() {
         const lastUpdatedElement = document.getElementById('last-updated');
         const lastUpdatedText = lastUpdatedElement.textContent;
         const regex = /Last updated (\d+) (\w+) ago/;

         const match = lastUpdatedText.match(regex);
         if (match) {
            const timeAgo = parseInt(match[1]);
            const unit = match[2];

            const currentTime = new Date();
            let updatedTime = new Date(currentTime);

            if (unit === 'mins') {
               updatedTime.setMinutes(currentTime.getMinutes() - timeAgo);
            } else if (unit === 'hours') {
               updatedTime.setHours(currentTime.getHours() - timeAgo);
            } else if (unit === 'days') {
               updatedTime.setDate(currentTime.getDate() - timeAgo);
            }

            lastUpdatedElement.textContent = `Last updated ${formatTime(updatedTime)}`;
         }
      }

      // Jalankan fungsi untuk mengupdate waktu setiap menit
      updateLastUpdatedTime();
      setInterval(updateLastUpdatedTime, 60000); // Update setiap 1 menit (60.000 milidetik)
   </script>


</body>

</html>
