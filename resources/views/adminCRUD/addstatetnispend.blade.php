@extends('layouts.layoutform')

@section('content')
<form action="{{url('addstatetnispend')}}" method="post" enctype="multipart/form-data" style="padding-top: 100px;">
          {{ csrf_field() }}
          Etnis/suku :<br>
          <input type="text" name="etnis" value="etnis"><br><br>
          Pria :<br>
          <input type="text" name="pria" value="pria"><br><br>
          Wanita :<br>
          <input type="text" name="wanita" value="wanita"><br><br>
          <input type="submit" value="Submit">
        </form>
@if ($errors->any())
        <h3 class="text-center text-danger">{{ implode('', $errors->all(':message')) }}</h3>
        @endif
@endsection



    
       
