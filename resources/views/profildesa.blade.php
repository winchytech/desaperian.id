<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Desa Perian</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">
    <link rel="shortcut icon" type="image/ico" href="{{asset('images/favicon.ico')}}" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/profildesa.css')}}">
    <link rel="stylesheet" href="{{asset('css/table.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <!--[if lt IE 9]>
        <script src="{{asset('')}}//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="{{asset('')}}//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#primary-menu">



    <!--Mainmenu-area-->
    <div class="mainmenu-area" data-spy="affix" data-offset-top="100">
        <div class="container">
            <!--Logo-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{url('/')}}" class="navbar-brand logo">
                  <img id="logo" src="images/kabupaten-lombok-timur-ntb (1).png" alt="">
                    <h5><strong>Website Resmi Pemerintah</strong></h5>
                    <h2>Desa Perian</h2>
                </a>
            </div>
            <!--Logo/-->
            <nav class="collapse navbar-collapse" id="primary-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#tentang-desa">Tentang desa</a></li>
                    <li><a href="#visimisi">visi misi</a></li>
                    <li><a href="#gambaran-umum">gambaran-umum</a></li>
                    <li><a href="#peta-desa">peta desa</a></li>                    
                    <li><a href="#potensi-desa">Potensi Desa</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--Mainmenu-area/-->





    <section id="tentang-desa">
      <div class="container">
       <div class="row" id="bgprofil">
        <div class="col-xs-12 col-12 col-sm-12 col-md-12">
          <h1 class="text-center">Tentang Desa Perian</h1>
           <img src="images/profildesa-img.jpg" alt="fotodesa">
            <p>{{ $profildesas[0]->desripsiprofildesa }}</p> <br>
        </div>
      </div>

    </div>
    </section>
    

    <!-- visi dan misi -->
    <section id="visimisi">
      <div class="container">
      <h1>Visi dan Misi Desa Perian</h1>
      <div class="row">
        <div class="col-md-12">
            <h1>VISI</h1>
            <p>MASYARAKAT DESA PERIAN YANG SEJAHTERA, SEHAT, CERDAS, DAN
            BERDAYA SAING, DALAM LINGKUNGAN SOSIAL BUDAYA YANG HARMONIS
            DAN RELIGIUS</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <h1>MISI</h1>
            <p>Dalam kurun waktu 6 (enam) tahun (2019 – 2024), Pemerintah Desa Perian telah
            menetapkan missi pembangunan, dalam rangka mencapai visi tersebut di atas. Missi
            Pembangunan Desa Perian 2019- 2024 adalah :</p>
            <ol>
              <li>Mewujudkan tata kelola pemerintahan desa yang baik (good governance) dan
              didukung aparat pemerintah desa yang bersih (clean government) berbasis IT,
              dan berorientasi pada “pelayanan terbaik bagi masyarakat” Desa Perian.
              </li>
              <li>Mengoptimalkan pengelolaan potensi-potensi ekonomi dan potensi sumberdaya
              alam Desa Perian, dalam rangka penciptaan lapangan kerja dan peningkatan
              pendapatan masyarakat, tanpa mengganggu keseimbangan ekosistem dan
              kelestarian lingkungan.</li>
              <li>Meningkatkan ketersediaan sarana dan prasarana fisik terutama untuk sektor
              ekonomi, pendidikan, kesehatan, kepemudaan dan kebudayaan di seluruh
              wilayah Desa Perian
              </li>
              <li>Memfasilitasi masyarakat agar mampu membangun dan memelihara kesehatan
              diri, Kesehatan Lingkungan, air bersih dan sanitasi secara mandiri, terpadu dan
              berkesinambungan.</li>
              <li>Membangun System Keamanan dan ketertiban Lingkungan terpadu yang
              melembaga, terkoordinir dan berkesinambungan, didukung peralatan keamanan
              yang memadai, sebagai upaya untuk mencegah kriminalitas dan menjaga
              kondusifitas di seluruh wilayah Desa Perian.</li>
              <li>Membangun tatanan kehidupan yang harmonis, berbudaya dan religius melalui
              pembinaan dan pemberdayaan masyarakat di desa perian</li>
              <li>Mengedepankan kejujuran, keadilan, transparansi dalam kehidupan sehari-hari
              baik dalam pemerintahan maupun dengan masyarakat desa.
              </li>
            </ol>
        </div>
        </div>
    </div>
    </section>


    <!-- Gambaran umum desa -->
    <section id="gambaran-umum">
      <div class="container">
        <h1>Gambaran Umum Desa Perian</h1>
      <div class="row">
        <div class="col-md-12">
            
          <h3>TOPOGRAFI DAN DEMOGRAFI</h3>

            <p>Desa Perian secara umum terdiri dari dataran yang berada pada ketinggian sekitar 3,5 meter dari permukaan laut (Mdpl). Keadaan tekstur tanahnya sebagian merupakan lempungan berwarna abu-abu dan sebagian lagi wilayah gambut berwarna coklat.</p>


            <p>Adapun luas desa Perian lebih kurang 2050 Hektar yang mayoritasnya merupakan wilayah perkebunan dengan jenis tanaman karet dan sawit. Selebihnya adalah wilayah pemukiman dengan luas sekitar 241,5 Hektar. Sementara wilayah Dusun terluas berada di Dusun III dan IV.</p>


            <p>Secara geografis desa Perian terletak pada kordinat 102,118761 Bujur Timur dan 1,516449 Lintang Utara yang wilayah admisitratifnya berbatasan dengan :
            </p>


            <ul>
              <li>ebelah Utara Desa Jangkang
              <li>Sebelah Selatan Desa Kelapapati</li>
              <li>Sebelah Timur Desa Wonosari</li>
              <li>Sebelah Barat Desa Pangkalan Batang</li></li>
            </ul>


            <p>Jarak Desa Perian ke Ibukota Kecamatan lebih kurang 10 Km yang bisa ditempuh dalam waktu 15 menit menggunakan kendaraan bermotor. Sedangkan jarak menuju ke Ibukota Kabupaten lebih kurang 5 Km dengan waktu tempuh rata-rata sekitar 7 menit. Sehingga keberadaan desa Perian ini masih terbilang berada di pinggiran Kota Kabupaten.</p>

            <p>Dari sisi demografis Desa Perian memiliki penduduk dengan jumlah 2556 jiwa yang terdiri dari 1316 orang laki-laki dan 1240 orang perempuan yang tergabung dalam 695 Kepala Keluarga (KK). Kepadatan penduduk saat ini tercatat 124 jiwa per Km2 dengan persentase perkembangan penduduk dari tahun lalu sebesar 1,39%.</p>

            <p>Untuk penyebaran penduduk terbanyak berada di Dusun II Perian Tengah. Sebaran penduduk per wilayah dusun bisa dilihat pada tabel dibawah :</p>


           


            <h3 class="text-left">Sosial budaya</h3>

            <p>Masyarakat Perian mayoritas beretnis Jawa. Dan urutan kedua terbanyak di tempati etnis Melayu. Namun begitu ada juga etnis atau suku lainnya yang tinggal di Desa ini walaupun tidak banyak. Jadi penduduk atau warga Perian pada dasarnya sudah heterogen. Untuk lebih jelasnya silahkan lihat tabel suku atau etnis berikut :</p>

            

            <p>Masyarakat Perian mayoritas beretnis Jawa. Dan urutan kedua terbanyak di tempati etnis Melayu. Namun begitu ada juga etnis atau suku lainnya yang tinggal di Desa ini walaupun tidak banyak. Jadi penduduk atau warga Perian pada dasarnya sudah heterogen. Untuk lebih jelasnya silahkan lihat tabel suku atau etnis berikut :</p>


            <p>Masyarakat Perian mayoritas beretnis Jawa. Dan urutan kedua terbanyak di tempati etnis Melayu. Namun begitu ada juga etnis atau suku lainnya yang tinggal di Desa ini walaupun tidak banyak. Jadi penduduk atau warga Perian pada dasarnya sudah heterogen. Untuk lebih jelasnya silahkan lihat tabel suku atau etnis berikut :</p>


            <p>Masyarakat Perian mayoritas beretnis Jawa. Dan urutan kedua terbanyak di tempati etnis Melayu. Namun begitu ada juga etnis atau suku lainnya yang tinggal di Desa ini walaupun tidak banyak. Jadi penduduk atau warga Perian pada dasarnya sudah heterogen. Untuk lebih jelasnya silahkan lihat tabel suku atau etnis berikut :</p>


            <p>Masyarakat Perian mayoritas beretnis Jawa. Dan urutan kedua terbanyak di tempati etnis Melayu. Namun begitu ada juga etnis atau suku lainnya yang tinggal di Desa ini walaupun tidak banyak. Jadi penduduk atau warga Perian pada dasarnya sudah heterogen. Untuk lebih jelasnya silahkan lihat tabel suku atau etnis berikut :</p>



        </div>

      </div>
    </div>
    </section>

    <!-- Peta wilayah desa -->
    <section id="peta-desa">
      <div class="container">
        <h1>Peta Wilayah Desa Perian</h1>
      <div class="row">
        <div class="col-xs-12 col-12 col-sm-12 col-md-12">
            <img src="images/peta1.png" alt="fotodesa" width="400px" height="400px">
        </div>
      </div>
    </div>
    </section>




    
    <!-- Potensi wilayah desa -->
    <section id="potensi-desa">
      <div class="container">
        <h1>Potensi Desa</h1>
     
      <div class="row">
        <div class="col-md-12">
          <h3>POTENSI PERKEBUNAN </h3>
          <p>Desa Perian memiliki potensi utama dalam sektor perkebunan karena dari 2050 Ha luas desa, sekitar 1557,5 Ha wilayahnya merupakan area perkebunan sawit dan karet. Selain itu sebagian besar warganya juga banyak yang bekerja sebagai petani karet, baik yang dilakukan sebagai pekerjaan sampingan maupun dijadikan sebagai pekerjaan utama. Sementara untuk perkebunan sawit pengelolaan nya diserahkan kepada Koperasi.</p>


          <p>Potensi ini diperkuat dengan jumlah pemilik lahan perkebunan yang mencapai lebih dari 200 Kepala Keluarga dari 695 KK yang ada. Dan hasil dari perkebunan karet ini juga merupakan produk utama sector pertanian di Perian.</p>

          <p>Namun sebagian besar kebun karet yang ada merupakan jenis karet alami yang sudah berumur belasan tahun bahkan puluhan tahun dan dikerjakan dengan cara konvensional sehingga nilai produktifitasnya sudah berkurang.</p>

          <p>Untuk itu perlu diadakan peremajaan tanaman karet kembali dan system pengerjaan yang lebih maju baik dari sisi bibitnya, teknik penanaman, pemeliharaan dan manajemen pemasaran hasil produksi karet tersebut.</p>

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h3>POTENSI EKONOMI </h3>
          <p>Desa Perian memiliki potensi utama dalam sektor perkebunan karena dari 2050 Ha luas desa, sekitar 1557,5 Ha wilayahnya merupakan area perkebunan sawit dan karet. Selain itu sebagian besar warganya juga banyak yang bekerja sebagai petani karet, baik yang dilakukan sebagai pekerjaan sampingan maupun dijadikan sebagai pekerjaan utama. Sementara untuk perkebunan sawit pengelolaan nya diserahkan kepada Koperasi.</p>


          <p>Potensi ini diperkuat dengan jumlah pemilik lahan perkebunan yang mencapai lebih dari 200 Kepala Keluarga dari 695 KK yang ada. Dan hasil dari perkebunan karet ini juga merupakan produk utama sector pertanian di Perian.</p>

          <p>Namun sebagian besar kebun karet yang ada merupakan jenis karet alami yang sudah berumur belasan tahun bahkan puluhan tahun dan dikerjakan dengan cara konvensional sehingga nilai produktifitasnya sudah berkurang.</p>

          <p>Untuk itu perlu diadakan peremajaan tanaman karet kembali dan system pengerjaan yang lebih maju baik dari sisi bibitnya, teknik penanaman, pemeliharaan dan manajemen pemasaran hasil produksi karet tersebut.</p>
          
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h3>POTENSI PENDIDIKAN </h3>
          <p>Desa Perian memiliki potensi utama dalam sektor perkebunan karena dari 2050 Ha luas desa, sekitar 1557,5 Ha wilayahnya merupakan area perkebunan sawit dan karet. Selain itu sebagian besar warganya juga banyak yang bekerja sebagai petani karet, baik yang dilakukan sebagai pekerjaan sampingan maupun dijadikan sebagai pekerjaan utama. Sementara untuk perkebunan sawit pengelolaan nya diserahkan kepada Koperasi.</p>


          <p>Potensi ini diperkuat dengan jumlah pemilik lahan perkebunan yang mencapai lebih dari 200 Kepala Keluarga dari 695 KK yang ada. Dan hasil dari perkebunan karet ini juga merupakan produk utama sector pertanian di Perian.</p>

          <p>Namun sebagian besar kebun karet yang ada merupakan jenis karet alami yang sudah berumur belasan tahun bahkan puluhan tahun dan dikerjakan dengan cara konvensional sehingga nilai produktifitasnya sudah berkurang.</p>

          <p>Untuk itu perlu diadakan peremajaan tanaman karet kembali dan system pengerjaan yang lebih maju baik dari sisi bibitnya, teknik penanaman, pemeliharaan dan manajemen pemasaran hasil produksi karet tersebut.</p>
          
        </div>
      </div>  
    </div>
    </section>


  
  

  <footer class="footer-area relative sky-bg" id="contact-page">
        <div class="absolute footer-bg"></div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <address class="side-icon-boxes">
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="{{asset('images/location-arrow.png')}}" alt="">
                                </div>
                                <p><strong>Alamat: </strong>Jl. Jurusan Montong Gading - Perian, Km 4, Desa Perian.Kode Pos 83664</p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="{{asset('images/phone-arrow.png')}}" alt="">
                                </div>
                                <p><strong>Telpon: </strong>
                                    08123456789
                                </p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="{{asset('images/mail-arrow.png')}}" alt="">
                                </div>
                                <p><strong>E-mail: </strong>
                                    <a href="mailto:youremail@example.com">kantor@desaperian.id</a>
                                    
                                </p>
                            </div>
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 pull-right">
                        <ul class="social-menu text-right x-left">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-google"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <p>&copy;Copyright 2018.made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://winchy.tech">winchy.tech</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>





    <!--Vendor-JS-->
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
    <!--Plugin-JS-->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/contact-form.js')}}"></script>
    <script src="{{asset('js/jquery.parallax-1.1.3.js')}}"></script>
    <script src="{{asset('js/scrollUp.min.js')}}"></script>
    <script src="{{asset('js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <!--Main-active-JS-->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
