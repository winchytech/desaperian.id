 @extends('layouts.layoutform')

@section('content')
<form action="{{url('addbarangdesa')}}" method="post" enctype="multipart/form-data" style="padding-top: 100px;">
          {{ csrf_field() }}
          Nama Barang :<br>
          <input type="text" name="nama_barang" placeholder="Nama Barang"><br><br>
          Harga :<br>
          <input type="text" name="harga" placeholder="Harga Barang"><br><br>
          Jumlah :<br>
          <input type="text" name="jumlah" placeholder="Jumlah"><br><br>
          Deskripsi :<br>
          <textarea name="deskripsi_barang" placeholder="Deskripsi Barang"></textarea><br><br>
          Upload gambar barang : <br><br>
          <input type="file" name="url_gambar" id="url_gambar">
          <br><br>
          <input type="submit" value="Submit">
        </form>
        @if ($errors->any())
        <h3 class="text-center text-danger">{{ implode('', $errors->all(':message')) }}</h3>
        @endif
        
@endsection


    
        