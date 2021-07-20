<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Oorban Bondowoso</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/public/assets/img/favicons/logo12.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/public/assets/img/favicons/logo12.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/public/assets/img/favicons/logo12.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/public/assets/img/favicons/logo12.png') }}">
    <link rel="manifest" href="{{ asset('frontend/public/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('frontend/public/assets/img/favicons/logo12.png') }}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('frontend/public/assets/css/theme.css') }}" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block navbar-klean" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html"> <img class="me-3 d-inline-block" src="{{ asset('frontend/public/assets/img/gallery/logo3.png') }}" alt="" /></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link fw-medium active" aria-current="page" href="#home">Beranda</a></li>
              <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="#service">Tentang Aplikasi</a></li>
              <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="#team">Tentang Kami</a></li>
              <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="#contact">Kontak</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <section id="home">
        <div class="bg-holder d-none d-md-block bg-size" style="background-image:url({{ asset('frontend/public/assets/img/illustrations/Group10.png') }});background-position:right bottom;">
        </div>
        <!--/.bg-holder-->

        <div class="bg-holder" style="background-image:url({{ asset('frontend/public/assets/img/illustrations/heroheader-bg1.png') }});background-position:center;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
              <h1 class="fw-bold display-4 fs-4 fs-lg-6 fs-xxl-7 text-solid"> Ayo Bergabung</h1>
              <h1 class="text-700">Cari Properti <span class="fw-bold">Yang Anda Inginkan Disini</span></h1>
              <p class="mb-5 fs-0">Cari properti yang anda inginkan disini, dan jadilah bagian dari <span class="fw-bold text-primary">Oorban Bondowoso </span>.<br /> Ajak sahabat, keluarga, rekan kerja untuk bergabung dengan kami di <span class="fw-bold text-primary">Oorban Bondowoso </span>. </p>
            </div>
          </div>
        </div>
      </section>
      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0" id="service">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-xxl-5 mx-auto text-center py-7">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Properti</h5>
              <p class="mb-0"><span class="fw-bold">Oorban Bondowoso</span> menyediakan beberapa jenis properti yang dapat dicari dan dilihat oleh pengunjung.</p>
            </div>
          </div>
          <!-- <div class="bg-holder" style="background-image:url({{ asset('frontend/public/assets/img/illustrations/service1.png') }});background-position:bottom center;background-size:contain;">
          </div> -->
          <!--/.bg-holder-->

          <div class="row flex-center circle-blend circle-blend-right circle-warning">
            <div class="col-xl-9">
              <div class="row justify-content-center ">
                <div class="col-md-4 mb-4">
                  <div class="card card-bg h-100 px-4 px-md-2 px-lg-3 px-xxl-4 pt-4">
                    <div class="text-center"><img class="my-5" src="{{ asset('frontend/public/assets/img/icons/rumah.png') }}" width="100" alt="services" />
                      <div class="card-body text-center text-md-start">
                        <h6 class="fw-bold fs-1">Rumah</h6>
                        <p class="mt-3 mb-md-0 mb-lg-3">Tentunya pencarian properti yang satu ini sangat dibutuhkan didalam fitur pencarian kami dikarenakan rumah sangat umum berperan sebagai properti yang sering dicari, hal ini sangat dibutuhkan bagi mereka yang ingin mencari dan membeli sebuah tempat tinggal untuk di tempati khususnya di daerah Bondowoso.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card card-bg h-100 px-4 px-md-2 px-lg-3 px-xxl-4 pt-4">
                    <div class="text-center"><img class="my-5" src="{{ asset('frontend/public/assets/img/icons/kontrakan.png') }}" width="100" alt="services" />
                      <div class="card-body text-center text-md-start">
                        <h6 class="fw-bold fs-1">Kontrakan</h6>
                        <p class="mt-3 mb-md-0 mb-lg-3">Properti ini memiliki fungsi yang sama seperti rumah yang bertujuan untuk ditinggali, hanya saja properti ini tidak untuk dijual tetapi hanya untuk disewakan kepada orang yang ingin mencari tempat tinggal dalam waktu yang lama tetapi tidak hanya sebentar saja seperti saat memesan hotel, dan tentunya biaya yang dikeluarkan akan lebih murah dan hemat dalam jangka waktu panjang.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card card-bg h-100 px-4 px-md-2 px-lg-3 px-xxl-4 pt-4">
                    <div class="text-center"><img class="my-5" src="{{ asset('frontend/public/assets/img/icons/toko.png') }}" width="100" alt="services" />
                      <div class="card-body text-center text-md-start">
                        <h6 class="fw-bold fs-1">Toko/Ruko/Kios</h6>
                        <p class="mt-3 mb-md-0 mb-lg-3">Bagi para pebisnis seperti UMKM, pedagang, dan yang semacamnya tentu juga membutuhkan properti jenis ini, oleh karena itu kami mencantumkan properti dengan jenis ini agar orang-orang dapat memanfaatkan Toko/Ruko yang ada di Bondowoso untuk kegiatan bisnis mereka.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
                <!-- <div class="col-md-4 mb-4">
                  <div class="card card-bg h-100 px-4 px-md-2 px-lg-3 px-xxl-4 pt-4">
                    <div class="text-center"><img class="my-5" src="{{ asset('frontend/public/assets/img/icons/hotel.png') }}" width="100" alt="services" />
                      <div class="card-body text-center text-md-start">
                        <h6 class="fw-bold fs-1">Hotel</h6>
                        <p class="mt-3 mb-md-0 mb-lg-3">Jenis properti yang satu ini juga penting bagi orang-orang atau masyarakat dari luar kota Bondowoso untuk memesan sebuah tempat di hotel untuk menginap ketika datang ke kota Bondowoso, misalnya seperti turis atau orang dari luar kota yang pergi berwisata di kota Bondowoso yang kaya akan tempat wisata.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card card-bg h-100 px-4 px-md-2 px-lg-3 px-xxl-4 pt-4">
                    <div class="text-center"><img class="my-5" src="{{ asset('frontend/public/assets/img/icons/kos.png') }}" width="100" alt="services" />
                      <div class="card-body text-center text-md-start">
                        <h6 class="fw-bold fs-1">Kos-kosan</h6>
                        <p class="mt-3 mb-md-0 mb-lg-3">Properti ini sudah tidak asing lagi di telinga para pelajar seperti siswa karena akan sangat dibutuhkan ketika mereka berasal dari luar kota Bondowoso untuk keperluan sekolah dan kuliah mereka. Bahkan tidak jarang juga orang yang sudah bekerja memesan kos untuk mereka tinggali dalam waktu lama.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card card-bg h-100 px-4 px-md-2 px-lg-3 px-xxl-4 pt-4">
                    <div class="text-center"><img class="my-5" src="{{ asset('frontend/public/assets/img/icons/tanah.png') }}" width="100" alt="services" />
                      <div class="card-body text-center text-md-start">
                        <h6 class="fw-bold fs-1">tanah</h6>
                        <p class="mt-3 mb-md-0 mb-lg-3">ini adalah properti juga dibutuhkan bagi orang-orang yang ingin membeli tanah khususnya di kota Bondowoso. Dengan membeli properti tanah, pemilik tanah bisa memanfaatkan tanah tersebut untuk banyak hal seperti menjadikannya kebun, sawah, bahkan properti lain seperti rumah, kantor, dan sebagainya.</p>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5" id="feature">
      <div class="bg-holder" style="background-image:url({{ asset('frontend/public/assets/img/illustrations/bgvek1.png') }});background-position:center;background-size:contain;">
        </div>
        <div class="container">
          <div class="bg-holder" style="background-image:url({{ asset('fronetend/public/assets/img/illustrations/feature-bg.png') }});background-position:right;background-size:auto;">
          </div>
          <!--/.bg-holder-->

          <div class="row justify-content-center mb-6">
            <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Fitur-fitur</h5>
              <p class="mb-0"><span class="fw-bold">Oorban Bondowoso</span> memiliki beberapa fitur menarik didalamnya yang dapat digunakan atau dimanfaatkan didalamnya</p>
            </div>
          </div>
          <div class="row circle-blend circle-blend-right circle-cyan">
            <div class="col-md-4 mb-6">
              <div class="text-center px-lg-3">
                <img class="my-5" src="{{ asset('frontend/public/assets/img/illustrations/katalog.png') }}" width="100" alt="services" />
                <h5 class="mt-3 fw-bold">Katalog</h5>
                <p class="mb-md-0 px-xxl-6">Fitur ini berguna agar pengunjung dapat mencari properti dengan banyak pilihan jenis properti.</p>
              </div>
            </div>
            <div class="col-md-4 mb-6">
              <div class="text-center px-lg-3">
                <img class="my-5" src="{{ asset('frontend/public/assets/img/illustrations/search.png') }}" width="100" alt="services" />
                <h5 class="mt-3 fw-bold">Mesin Pencarian</h5>
                <p class="mb-md-0 px-xxl-6">Fitur ini terdapat di dalam Fitur katalog sehingga pengguna dapat lebih mudah dalam mencari properti yang diinginkan.</p>
              </div>
            </div>
            <div class="col-md-4 mb-6">
              <div class="text-center px-lg-3">
                <img class="my-5" src="{{ asset('frontend/public/assets/img/illustrations/chat.png') }}" width="100" alt="services" />
                <h5 class="mt-3 fw-bold">Kontak</h5>
                <p class="mb-md-0 px-xxl-6">Pengunjung juga dapat menghubungi pemilik properti dengan fitur yang dapat mengarahkan pengunjung ke kontak pemilik properti.</p>
              </div>
            </div>
            <div class="col-md-4 mb-6">
              <div class="text-center px-lg-3">
                <img class="my-5" src="{{ asset('frontend/public/assets/img/illustrations/favorit.png') }}" width="100" alt="services" />
                <h5 class="mt-3 fw-bold">Favorit</h5>
                <p class="mb-md-0 px-xxl-6">Fitur ini digunakan jika pengguna mendapatkan properti yang disukai sehingga mereka bisa melabelkannya sebagai properti favorit.</p>
              </div>
            </div>
            <div class="col-md-4 mb-6">
              <div class="text-center px-lg-3">
                <img class="my-5" src="{{ asset('frontend/public/assets/img/illustrations/register.png') }}" width="100" alt="services" />
                <h5 class="mt-3 fw-bold">Registrasi</h5>
                <p class="mb-md-0 px-xxl-6">Pengguna dapat mendaftarkan diri mereka agar menjadi bagian dari aplikasi Oorban Bondowoso.</p>
              </div>
            </div>
            <div class="col-md-4 mb-6">
              <div class="text-center px-lg-3">
                <img class="my-5" src="{{ asset('frontend/public/assets/img/illustrations/login.png') }}" width="100" alt="services" />
                <h5 class="mt-3 fw-bold">Login</h5>
                <p class="mb-md-0 px-xxl-6">Pengguna yang sudah mendaftar dapat masuk menggunakan akun yang sudah terdaftar tersebut dan dapat menggunakan lebih banyak fitur.</p>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0">

        <div class="container">
          <div class="bg-holder" style="background-image:url({{ asset('frontend/public/assets/img/illustrations/project-bg.png') }});background-position:right;background-size:auto;">
          </div>
          <!--/.bg-holder-->

          <div class="row justify-content-center">
            <div class="col-lg-6 text-center mx-auto mb-6">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Tampilan Fitur</h5>
              <p class="mb-0">berikut adalah tampilan dari aplikasi <span class="fw-bold">Oorban Bondowoso</span> yang kami buat dengan semenarik dan sebaik mungkin</p>
            </div>
            <div class="col-xxl-9">
              <div class="card project-card-bg mx-auto px-0">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-12 col-md-6 col-lg-4 text-center"><img class="mb-3 mb-lg-3 img-fluid px-xl-0" src="{{ asset('frontend/public/assets/img/gallery/project-1.png') }}" width="320" alt="project" /><img class="mb-3 mb-lg-0 img-fluid px-xl-0" src="{{ asset('frontend/public/assets/img/gallery/project-2.png') }}" width="320" alt="project" /></div>
                    <div class="col-12 col-md-6 col-lg-4 text-center"><img class="mb-3 mb-lg-3 img-fluid px-xl-0" src="{{ asset('frontend/public/assets/img/gallery/project-3.png') }}" width="320" alt="project" /><img class="mb-3 mb-lg-0 img-fluid px-xl-0" src="{{ asset('frontend/public/assets/img/gallery/project-4.png') }}" width="320" alt="project" /></div>
                    <div class="col-12 col-md-6 col-lg-4 text-center"><img class="mb-3 mb-lg-3 img-fluid px-xl-0" src="{{ asset('frontend/public/assets/img/gallery/project-5.png') }}" width="320" alt="project" /><img class="mb-3 mb-lg-0 img-fluid px-xl-0" src="{{ asset('frontend/public/assets/img/gallery/project-6.png') }}" width="320" alt="project" /></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pb-0" id="team" >

        <div class="container">
          <div class="bg-holder" style="background-image:url({{ asset('frontend/public/assets/img/illustrations/team-bg.png);background-position:left top;background-size:auto;') }}">
          </div>
          <!--/.bg-holder-->
          <div class="row justify-content-center mb-6 circle-blend circle-warning">
            <div class="col-lg-6 text-center mx-auto mb-7">

              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Tentang Kami</h5>
              <p class="mb-0"><span class="fw-bold">Oorban Bondowoso</span> merupakan salah satu penyedia jasa pencarian Properti yang berdiri sejak tahun 2021. Dengan adanya website ini kami berharap dapat memudahkan masyarakat dari dalam atau luar Bondowoso dalam mencari properti <span class="fw-bold">khususnya di daerah Kabupaten Bondowoso</span>.</p>
            </div>
            <div class="col-xxl-9">
              <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
                  <h1 class="text-700">Banyak yang <span class="fw-bold">Mencari</span> sesuatu tanpa tahu <span class="fw-bold">Dimana</span> mereka melakukannya</h1>
                  <p class="mb-5 fs-0">kami memberi solusi untuk <span class="fw-bold text-primary">seluruh masyarakat Bondowoso </span><br />dengan menggunakan website ini agar maryarakat dapat lebih mudah mencari properti di daerah Bondowoso. </p>
              </div>
              
              
              

              <div class="row circle-blend circle-blend-right circle-cyan">
                <div class="col-md-4 mb-6">
                  <div class="text-center px-lg-3">
                    <h5 class="mt-3 fw-bold">2021</h5>
                    <p class="mb-md-0 px-xxl-6">Oorban Bondowoso didirikan di Bondowoso.</p>
                  </div>
                </div>
                <div class="col-md-4 mb-6">
                  <div class="text-center px-lg-3">
                    <h5 class="mt-3 fw-bold">5000+</h5>
                    <p class="mb-md-0 px-xxl-6">lebih dari 5000 properti dapat ditemukan di Oorban Bondowoso.</p>
                  </div>
                </div>
                <div class="col-md-4 mb-6">
                  <div class="text-center px-lg-3">
                      <h5 class="mt-3 fw-bold">Update</h5>
                      <p class="mb-md-0 px-xxl-6">Kabar update properti terbaru di Bondowoso.</p>
                  </div>
                </div>
                <div class="col-md-4 mb-6">
                  <div class="text-center px-lg-3">
                    <h5 class="mt-3 fw-bold">Respon</h5>
                    <p class="mb-md-0 px-xxl-6">sekitar 99.2% pengunjung puas dengan layanan dan aplikasi kami.</p>
                  </div>
                </div>
                <div class="col-md-4 mb-6">
                  <div class="text-center px-lg-3">
                    <h5 class="mt-3 fw-bold">1000 pengguna</h5>
                    <p class="mb-md-0 px-xxl-6">Sudah lebih dari 1000 orang yang menggunakan aplikasi kami.</p>
                  </div>
                </div>
                <div class="col-md-4 mb-6">
                  <div class="text-center px-lg-3">
                      <h5 class="mt-3 fw-bold">1 X 24 jam</h5>
                      <p class="mb-md-0 px-xxl-6">Kami siap melayani anda selama 24 jam setiap hari.</p>
                  </div>
                </div>
              </div>

              


              <!-- <div class="row flex-center g-0">
                <div class="col-sm-6 col-lg-3 text-center">
                  <div class="wrapper shadow-square-right"><img class="team-card-1" src="{{ asset('frontend/public/assets/img/gallery/john.png') }}" width="200" alt="..." /></div>
                  <h5 class="fw-bold mt-3 mb-1">Tegar Shallahudin Al Ayubi</h5>
                  <p>WEB Developer</p>
                </div>
                <div class="col-sm-6 col-lg-3 text-center">
                  <div class="wrapper shadow-square-left"><img class="team-card-2" src="{{ asset('frontend/public/assets/img/gallery/carrey.png') }}" width="200" alt="..." /></div>
                  <h5 class="fw-bold mt-3 mb-1">Iphang Rere Admaja</h5>
                  <p>Android Developer</p>
                </div>
                <div class="col-sm-6 col-lg-3 text-center">
                  <div class="wrapper shadow-square-right"><img class="team-card-3" src="{{ asset('frontend/public/assets/img/gallery/ray.png') }}" width="200" alt="..." /></div>
                  <h5 class="fw-bold mt-3 mb-1">Anisa Puji</h5>
                  <p>Admin</p>
                </div>
                <div class="col-sm-6 col-lg-3 text-center">
                  <div class="wrapper shadow-square-left"><img class="team-card-4" src="{{ asset('frontend/public/assets/img/gallery/austin.png') }}" width="200" alt="..." /></div>
                  <h5 class="fw-bold mt-3 mb-1">Derby Senja Venora</h5>
                  <p>Designer</p>
                </div>
              </div> -->
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0" id="contact">

        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-xxl-5 mx-auto text-center mt-5">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-5">Kontak Kami</h5>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-5 mb-8">
        <div class="bg-holder" style="background-image:url({{ asset('frontend/public/assets/img/illustrations/contact-us-bg1.png);background-position:left bottom;background-size:auto;') }}">
        </div>
        <!--/.bg-holder-->

        <div class="bg-holder" style="background-image:url({{ asset('frontend/public/assets/img/gallery/contact-bg1.png);background-position:center right ;background-size:contain;') }}">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row flex-center">
            <div class="col-lg-5 mb-5">
              <div class="card card-bg p-2">
                <div class="card-body">
                  <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
                  <h4 class="text-700">Hubungi kami pada <span class="fw-bold">kontak</span> berikut</h4>
                  <p class="mb-5 fs-0">Kami mencoba memberikan pelayanan terbaik kepada pengunjung, oleh karena itu silahkan menghubungi kami jika menemukan kendala pada aplikasi kami. </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-lg-5 mb-5">
              <div class="card card-bg p-2">
                <div class="card-body">
                  <form>
                    <div class="row mb-3 input-group-icon">
                      <label class="col-sm-2 col-form-label visually-hidden" for="inputName">Name</label>
                      <div class="col-sm-12">
                        <input class="form-control rounded-pill border-white input-box" id="inputName" type="text" placeholder="Masukkan Nama" />
                        <svg class="bi bi-person-fill input-box-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                        </svg>
                      </div>
                    </div>
                    <div class="row mb-3 input-group-icon">
                      <label class="col-sm-2 col-form-label visually-hidden" for="inputEmail3">Email</label>
                      <div class="col-sm-12">
                        <input class="form-control rounded-pill border-white input-box" id="inputEmail3" type="email" placeholder="Masukkan Email" />
                        <svg class="bi bi-envelope-fill input-box-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"></path>
                        </svg>
                      </div>
                    </div>
                    <div class="row mb-3 input-group-text-icon">
                      <label class="col-sm-2 col-form-label visually-hidden" for="floatingTextarea2">Comments</label>
                      <div class="col-sm-12">
                        <textarea class="form-control rounded-3 border-white input-box" id="floatingTextarea2" placeholder="Masukkan Pesan dan Kesan" style="height: 150px"></textarea>
                        <svg class="bi bi-pencil-fill input-box-text-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"></path>
                        </svg>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="d-grid">
                          <button class="btn hover-top btn-glow btn-klean rounded-pill" type="submit">Kirim </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div> -->
            <div class="col-lg-5 offset-lg-1">
              <div class="d-flex align-items-center mb-5">
                <div class="flex-1 ms-3">
                  <p class="fw-bold mb-0">No Telepon </p>
                  <p>081232877232</p>
                </div>
              </div>
              <div class="d-flex align-items-center mb-5">
                <div class="flex-1 ms-3">
                  <p class="fw-bold mb-0">Email</p>
                  <p>OorbanBondowoso@gmail.com </p>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <div class="flex-1 ms-3">
                  <p class="fw-bold mb-0">Lokasi</p>
                  <p>BLOG H-14, Perum PBI, Nangkaan, Bondowoso</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="bg-holder" style="background-image:url({{ asset('frontend/public/assets/img/illustrations/cta-bg1.png);background-position:center;background-size:cover;') }}">
        </div>
        <!--/.bg-holder-->

        <div class="bg-holder" style="background-image:url({{ asset('frontend/public/assets/img/illustrations/cta-bg-1.png);background-position:right top;background-size:auto;margin-top:-38px;margin-left:-200px;') }}">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row flex-center">
            <div class="col-xxl-9 py-5 text-center">
              <h1 class="fw-bold mb-4 text-solid fs-6">Dapatkan Aplikasi Oorban Bondowoso</h1>
              <p class="mb-6 mx-xxl-11">Ayo download aplikasi <span class="fw-bold">Oorban Bondowoso  </span> agar kalian mendapatkan info lebih lanjut dan pengalaman secara langsung bersama kami, silahkan klik tombol <span class="fw-bold">Download  </span>dibawah ini</p>
              <!-- <a class="btn hover-top btn-glow btn-klean rounded-pill" href="#">Download Disini</a> -->
              <a class="btn" style="color:white;background-color:#0D468B;radius:15px 15px 15px 15px;" href="#">Unduh Disini</a>
            </div>
          </div>
        </div>
      </section>
      <section class="pb-0 pt-6 circle-blend circle-blend-left circle-warning">
        <!--/.bg-holder-->
        <div class="container">
          <hr class="text-100 mb-0" />
          <div class="row justify-content-md-between justify-content-evenly py-3">
            <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
              <p class="fs--1 my-2 fw-bold">All rights Reserved &copy; OorbanBondowoso, 2021</p>
            </div>
            <div class="col-12 col-sm-8 col-md-6">
              <p class="fs--1 my-2 text-center text-md-end"> Made with&nbsp;
                <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#EB6453" viewBox="0 0 16 16">
                  <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                </svg>&nbsp;by&nbsp;<a class="fw-bold text-500" href="https://themewagon.com/" target="_blank">ThemeWagon </a>
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/feather-icons/feather.min.js"></script>
    <script>
      feather.replace();
    </script>
    <script src="{{ asset('frontend/public/assets/js/theme.js') }}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
  </body>

</html>