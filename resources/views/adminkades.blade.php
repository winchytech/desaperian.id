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
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/table.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <!--[if lt IE 9]>
        <script src="{{asset('')}}//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="{{asset('')}}//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#primary-menu">
  @php
  $no=1
@endphp


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
                    @guest
                          <li>
                              <a href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                    @else
                    <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                upload dokumen <span class="caret"></span>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('formuploadapbd/apbd')}}">APBD Desa</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{url('formuploadapbd/rkp')}}">RKP Desa</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{url('formuploadapbd/rpjm')}}">RPJM Desa</a>
                              </div>
                            </li>
                            <li class="nav-item dropdown navigation">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Tabel Data <span class="caret"></span>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdowntabel">
                                <a class="dropdown-item" href="#tabeldatapendudukkadus">Tabel Data Penduduk Setiap Dusun</a>
                                <div class="dropdown-divider"></div> 
                                <a class="dropdown-item" href="#tabelberita">Tabel Berita</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#tabelpengumuman">Tabel Pengumuman</a>
                                <div class="dropdown-divider"></div>
                              </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </ul>
            </nav>
        </div>
    </div>
    <!--Mainmenu-area/-->




<section id="tabeldatapendudukkadus"  class="section-padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h1>Tabel data Penduduk Desa Perian</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-12 col-sm-6 col-md-6">
            <select id="pilihankadus">
                 <option selected="true" disabled="disabled">Dusun</option>
                 @foreach ($kode_area_dusuns as $kode_area_dusun)
                    <option value="{{ $kode_area_dusun->id_dusun }}">{{ $kode_area_dusun->Nama_Dusun }}</option>
                 @endforeach
            </select>
          </div>

          <div class="col-xs-12 col-12 col-sm-6 col-md-6 search-posisi">
            <div class="search">
            <input type="text"  id="search" name="search" placeholder="Masukan NIK atau Nama" ></input>
            </div>
            <button id="tombol_search">Search</button>  
          </div>

        </div>

      <div class="row">
          <div class="col-md-12">      
      <div style="overflow: auto;max-height: 400px;position: relative;  ">
      <table id="tabeldatakadus">
      <thead>
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <tr>
                  <th>No</th>
                  <th>Alamat</th>
                  <th>RW</th>
                  <th>RT</th>
                  <th id="nama_tombol">Nama</th>
                  <th>Nomor KK</th>
                  <th>Nomor NIK</th>
                  <th>Jenis Kelamin</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Agama</th>
                  <th>Pendidikan</th>
                  <th>Jenis Pekerjaan</th> 
                  <th>Status Perkawinan</th> 
                  <th>Status Hubungan Dalam Keluarga</th> 
                  <th>Kewarganegaraan</th> 
                  <th>Nama Ayah</th> 
                  <th>Nama Ibu</th> 
                  <th>Golongan Darah</th> 
                  <th>Akta Lahir</th> 
                  <th>Nomor Dokumen Paspor</th>
                  <th>Tanggal Akhir Paspor</th>  
                  <th>Nomor Dokumen KITAS</th>             
                  <th>NIK Ayah</th> 
                  <th>NIK Ibu</th> 
                  <th>No Akta Perkawinan</th> 
                  <th>Tanggal Perkawinan</th> 
                  <th>No Akta Perceraian</th> 
                  <th>Tanggal Perceraian</th> 
                  <th>Cacat</th> 
                  <th>Cara KB</th> 
                  <th>Hamil</th> 
                  <th>Status kependudukan</th> 
                  <th>Keterangan</th>  
                  <th>edit</th> 
                  <th>hapus</th> 
        </tr>
      </thead>
       <tbody id="tbodytabel">
      </tbody>
    </table>
          </div>
          <a href="#" class="previous">&laquo; Previous</a>
          <a href="#" class="next">Next &raquo;</a>
          <a href="{{url('formadddatapendudukkades')}}" class="tomboladd">Tambah Data</a>
        </div>
        </div>
      </div>
    </section>

<section id="tabelberita" class="section-padding  gray-bg">
      <div class="container-fluid">
         <h1>Tabel data Berita Desa</h1>
        <div class="row">
          <div class="col-md-12">
             <div style="overflow: auto;max-height: 400px;position: relative;  ">
                <table id="tabeldatakadus">
                <thead>
                  <col width="1000px">
                  <col width="1000px">
                  <col width="1000px">
                  <col width="1000px">
                  <tr>
                    <th>Judul Berita</th>
                    <th>Deskripsi</th>
                    <th>edit</th> 
                    <th>hapus</th> 
                  </tr>
                </thead>
                 <tbody>
                  @foreach($beritas as $berita)
                    <tr>
                      <td>{{ $berita->judulberita }}</td>
                      <td>{{ substr($berita->deskripsi,0,100) }}</td>
                      <td><a href={{ url('formeditberita/' .  $berita->id ) }}>edit</a></td>
                      <td><a href={{ url('deleteberita/' .  $berita->id ) }}>hapus</a></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
              <a href="{{url('formaddberita')}}" class="tomboladd">Buat Berita Baru</a>
              
                </div>
              </div>
            </div>
    </section>


    








      <section id="tabelpengumuman">
      <div class="container-fluid">
        <h1>Tabel data Pengumuman Desa</h1>
        <div class="row">
          <div class="col-md-12">
            <div style="overflow: auto;max-height: 400px;position: relative;  ">
                <table id="tabeldatakadus">
                <thead>
                  <col width="1000px">
                  <col width="1000px">
                  <col width="1000px">
                  <col width="1000px">
                  <tr>
                    <th>Judul Pengumuman</th>
                    <th>Deskripsi</th>
                    <th>edit</th> 
                    <th>hapus</th> 
                  </tr>
                </thead>
                 <tbody>
                  @foreach($pengumumandesas as $pengumumandesa)
                    <tr>
                      <td>{{ $pengumumandesa->judulpengumuman }}</td>
                      <td>{{ substr($pengumumandesa->deskripsi,0,100) }}</td>
                      <td><a href={{ url('formeditpengumuman/' .  $pengumumandesa->id ) }}>edit</a></td>
                      <td><a href={{ url('deletepengumuman/' .  $pengumumandesa->id ) }}>hapus</a></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
                <a href="{{url('formaddpengumuman')}}" class="tomboladd">Buat Pengumuman Baru</a>                      
                
          </div>
        </div>
      </div>
    </section>




    <section id="profildesaadmin" class="section-padding">
      <div class="container">
         <h2>Edit Profil Desa</h2>
         @if ($errors->any())
        <h3 class="text-center text-danger">{{ implode('', $errors->all(':message')) }}</h3>
        @endif
        <div class="row">
           <div class="col-md-12">
           
            <form action="{{ url('editdeskripsiprofildesa') }}" method="post" enctype="multipart/form-data" style="padding-top: 1px;">
                {{ csrf_field() }}
                <textarea  rows="10" name="deskripsiprofildesa">{{ $profildesas[0]->desripsiprofildesa }}</textarea>
                <input class="button white" type="submit" value="Edit" id="edutbuttondeskripsi">
              </form>

            </div>
          </div>
          <div class="row">

           <div class="col-12 col-xs-12 col-sm-12 col-md-3">
            <img src="{{ $profildesas[0]->fotokades }}" alt="">
            <h1 class="text-center" >Kepala Desa</h1>
            <form action={{ url('editfotokades') }} method="post" enctype="multipart/form-data" style="padding-top: 1px;">
              {{ csrf_field() }}
              <input type="file" name="fotokades" id="fotokades">
              <input class="button white" type="submit" value="Ganti">
            </form>
            </div>

            <div class="col-12 col-xs-12 col-sm-12 col-md-3">
            <img src="{{ $profildesas[0]->fotoketbpd }}" alt="">
            <h1 class="text-center" >Ketua BPD</h1>
            <form action={{ url('editfotoketbpd') }} method="post" enctype="multipart/form-data" style="padding-top: 1px;">
              {{ csrf_field() }}
              <input type="file" name="fotoketbpd" id="fotoketbpd">
              <input class="button white" type="submit" value="Ganti">
            </form>
            </div>

            <div class="col-12 col-xs-12 col-sm-12 col-md-3">
            <img src="{{ $profildesas[0]->fotosekdes }}" alt="">
            <h1 class="text-center" >Sekertaris Desa</h1>
            <form action={{ url('editfotosekdes') }} method="post" enctype="multipart/form-data" style="padding-top: 1px;">
              {{ csrf_field() }}
              <input type="file" name="fotosekdes" id="fotosekdes">
              <input class="button white" type="submit" value="Ganti">
            </form>
            </div>


            <div class="col-12 col-xs-12 col-sm-12 col-md-3">
            <img src="{{ $profildesas[0]->fotokaurpemerintahan }}" alt="">
            <h1 class="text-center">Kaur Pemerintahan</h1>
            <form action={{ url('editfotokaurpemerintahan') }} method="post" enctype="multipart/form-data" style="padding-top: 1px;">
              {{ csrf_field() }}
              <input type="file" name="fotokaurpemerintahan" id="fotokaurpemerintahan">
              <input class="button white" type="submit" value="Ganti">
            </form>
            </div>


            <div class="col-12 col-xs-12 col-sm-12 col-md-3">
            <img src="{{ $profildesas[0]->fotokaurpembangunan }}" alt="">
            <h1 class="text-center" >Kaur Pembangunan</h1>
            <form action={{ url('editfotokaurpembangunan') }} method="post" enctype="multipart/form-data" style="padding-top: 1px;">
              {{ csrf_field() }}
              <input type="file" name="fotokaurpembangunan" id="fotokaurpembangunan">
              <input class="button white" type="submit" value="Ganti">
            </form>
            </div>

            <div class="col-12 col-xs-12 col-sm-12 col-md-3">
            <img src="{{ $profildesas[0]->fotokaurkeuangan }}" alt="">
            <h1 class="text-center" >Kaur Keuangan</h1>
            <form action={{ url('editfotokaurkeuangan') }} method="post" enctype="multipart/form-data" style="padding-top: 1px;">
              {{ csrf_field() }}
              <input type="file" name="fotokaurkeuangan" id="fotokaurkeuangan">
              <input class="button white" type="submit" value="Ganti">
            </form>
            </div>


            <div class="col-12 col-xs-12 col-sm-12 col-md-3">
            <img src="{{ $profildesas[0]->fotokaurumum }}" alt="">
            <h1 class="text-center" >Kaur umum</h1>
            <form action={{ url('editfotokaurumum') }} method="post" enctype="multipart/form-data" style="padding-top: 1px;">
              {{ csrf_field() }}
              <input type="file" name="fotokaurumum" id="fotokaurumum">
              <input class="button white" type="submit" value="Ganti">
            </form>
            </div>


            <div class="col-12 col-xs-12 col-sm-12 col-md-3">
            <img src="{{ $profildesas[0]->fotokaurkesra }}" alt="">
            <h1 class="text-center">Kaur Kesra</h1>
            <form action={{ url('editfotokaurkesra') }} method="post" enctype="multipart/form-data" style="padding-top: 1px;">
              {{ csrf_field() }}
              <input type="file" name="fotokaurkesra" id="fotokaurkesra">
              <input class="button white" type="submit" value="Ganti">
            </form>
            </div>


            <div class="col-12 col-xs-12 col-sm-12 col-md-3">
            <img src="{{ $profildesas[0]->fotokaurtrantib }}" alt="">
            <h1 class="text-center" >Kaur Trantib</h1>
            <form action={{ url('editfotokaurtrantib') }} method="post" enctype="multipart/form-data" style="padding-top: 1px;">
              {{ csrf_field() }}
              <input type="file" name="fotokaurtrantib" id="fotokaurtrantib">
              <input class="button white" type="submit" value="Ganti">
            </form>
            </div>

          </div>
        </div>
    </section>


    <section id="dataakundesa" class="section-padding tabel5kolom  gray-bg">
      <div class="container-fluid">
         <h1>Tabel Data Akun Login Web Desa</h1>
        <div class="row">
          <div class="col-md-12">
            <div style="overflow: auto;max-height: 400px;position: relative;  ">
                <table id="tabeldatakadus">
                <thead>
                  <col width="1000px">
                  <col width="1000px">
                  <col width="1000px">
                  <col width="1000px">
                  <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Status</th> 
                    <th>Aktifasi</th> 
                    <th>hapus</th> 
                  </tr>
                </thead>
                 <tbody>
                  @foreach($users as $user)
                    <tr>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email}}</td>
                      <td>{{ $user->status}}</td>
                      <td><a href={{ url('aktifasiakun/' .  $user->id ) }}>aktifasi</a></td>
                      <td><a href={{ url('deleteakun/' .  $user->id ) }}>hapus</a></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
              
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
    <script src="{{asset('js/script.js')}}"></script>
</body>

</html>