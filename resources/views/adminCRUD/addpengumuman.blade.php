@extends('layouts.layoutform')

@section('content')
<form action="{{url('addpengumuman')}}" method="post" enctype="multipart/form-data" style="padding-top: 100px;">
          {{ csrf_field() }}
          Judul Pengumuman:<br>
          <input type="text" name="judul_pengumuman" value="judul_pengumuman"><br><br>
          Isi Pengumuman:<br>
          <textarea name="isi_pengumuman" value="isi_pengumuman"></textarea><br><br>
          Gambar : <br><br>
          <input type="file" name="url_gambar" id="url_gambar">
          <br><br>
          <input type="submit" value="Submit">
        </form>
@if ($errors->any())
        <h3 class="text-center text-danger">{{ implode('', $errors->all(':message')) }}</h3>
        @endif

@endsection 



    
        
