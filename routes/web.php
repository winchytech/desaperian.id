<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'webcontroller@indexhome');
Route::get('/updateumur', 'admincontroller@updateumur');

Route::get('/reloadtabeldusun/{id}',function($id)
{
	if(Request::ajax()){
		$data_penduduk_kadus_ajax=App\data_penduduk::where('id_dusun',$id)->take(10)->skip(0)->get();

        return $data_penduduk_kadus_ajax;
	}
});

Route::get('/reloadtabeldusunurutnama/{id}/{pil}',function($id,$pil)
{
	if(Request::ajax()){

		if($pil==1){
			$data_penduduk_kadus_urut_nama=App\data_penduduk::where('id_dusun',$id)->orderBy("Nama","asc")->get();

        	return $data_penduduk_kadus_urut_nama;
		}else{
			$data_penduduk_kadus_urut_nama=App\data_penduduk::where('id_dusun',$id)->orderBy("Nama","desc")->get();

        	return $data_penduduk_kadus_urut_nama;
		}
		
	}
});


Route::get('/artisancall', 'webcontroller@artisancall');
Route::get('/profildesa', 'webcontroller@profildesa');
Route::get('/organisasi', 'webcontroller@organisasi');
Route::get('/transparansi/{id}', 'webcontroller@transparansi');
Route::get('/karangtaruna', 'webcontroller@karangtaruna');
Route::get('/BPD', 'webcontroller@BPD');
Route::get('/LPMD', 'webcontroller@LPMD');
Route::get('/beritadesa/', 'webcontroller@beritadesa');
Route::get('/pengumumandesa/', 'webcontroller@pengumumandesa');
Route::get('/detailberitadesa/{id}', 'webcontroller@detailberitadesa');
Route::get('/detailpengumuman/{id}', 'webcontroller@detailpengumuman');
Route::get('/detailberita/{id}', 'webcontroller@detailberita');
Route::get('/barangdesa', 'webcontroller@barangdesa');
Route::get('/detailbarangdesa/{id}', 'webcontroller@detailbarangdesa');
Route::get('/cekumur/{id}', function($id)
{
	if(Request::ajax()){

         

        $data_penduduks=App\data_penduduk::where('id_dusun',$id)->get();

        foreach ($data_penduduks as $data_penduduk) {
        	# code...
        	$rumususia = Carbon\Carbon::now()->diffInDays($data_penduduk->Tanggal_Lahir, false);
        	$usia = (($rumususia/365)*-1);

        	 data_penduduk::where('NIK',$data_penduduk->NIK)->update([
            'Usia' => $usia            
         ]);  
        }
        

		$data_penduduk_kadus_ajax=App\data_penduduk::where('id_dusun',$id)->where('Usia','>',17)->get();
		

        return $data_penduduk_kadus_ajax;
        
    }
});


// form rute
Route::get('/formaddberita', 'admincontroller@formaddberita')->middleware('auth');
Route::get('/formaddpengumuman', 'admincontroller@formaddpengumuman')->middleware('auth');
Route::get('/formaddjmlpend', 'admincontroller@formaddjmlpend')->middleware('auth');
Route::get('/formaddstatpendidikanpend', 'admincontroller@formaddstatpendidikanpend')->middleware('auth');
Route::get('/formaddstatpekerjaanpend', 'admincontroller@formaddstatpekerjaanpend')->middleware('auth');
Route::get('/formaddstatetnispend', 'admincontroller@formaddstatetnispend')->middleware('auth');
Route::get('/formaddstatagamapend', 'admincontroller@formaddstatagamapend')->middleware('auth');
Route::get('/formadddatapendudukkadus', 'admincontroller@formadddatapendudukkadus')->middleware('auth');
Route::get('/formadddatapendudukkades', 'admincontroller@formadddatapendudukkades')->middleware('auth');
Route::get('/formaddbarangdesa', 'admincontroller@formaddbarangdesa')->middleware('auth');



Route::get('/formeditberita/{id}', 'admincontroller@formeditberita')->middleware('auth');
Route::get('/formeditpengumuman/{id}', 'admincontroller@formeditpengumuman')->middleware('auth');
Route::get('/formeditjmlpend/{id}', 'admincontroller@formeditjmlpend')->middleware('auth');
Route::get('/formeditstatpendidikanpend/{id}', 'admincontroller@formeditstatpendidikanpend')->middleware('auth');
Route::get('/formeditstatpekerjaanpend/{id}', 'admincontroller@formeditstatpekerjaanpend')->middleware('auth');
Route::get('/formeditstatetnispend/{id}', 'admincontroller@formeditstatetnispend')->middleware('auth');
Route::get('/formeditstatagamapend/{id}', 'admincontroller@formeditstatagamapend')->middleware('auth');
Route::get('/formuploadapbd/{id}', 'admincontroller@formuploadapbd')->middleware('auth');
Route::get('/formeditbarangdesa/{id}', 'admincontroller@formeditbarangdesa')->middleware('auth');
Route::get('/formeditdatapendudukkadus/{id}', 'admincontroller@formeditdatapendudukkadus')->middleware('auth');
Route::get('/formeditdatapendudukkades/{id}/{id2}', 'admincontroller@formeditdatapendudukkades')->middleware('auth');



// delete rute
Route::get('/deleteberita/{id}', 'admincontroller@deleteberita');
Route::get('/deletepengumuman/{id}', 'admincontroller@deletepengumuman');
Route::get('/deletejmlpend/{id}', 'admincontroller@deletejmlpend');
Route::get('/deletestatpendidikanpend/{id}', 'admincontroller@deletestatpendidikanpend');
Route::get('/deletestatagamapend/{id}', 'admincontroller@deletestatagamapend');
Route::get('/deletestatpekerjaanpend/{id}', 'admincontroller@deletestatpekerjaanpend');
Route::get('/deletestatetnispend/{id}', 'admincontroller@deletestatetnispend');
Route::get('/deletedatapendudukkadus/{id}', 'admincontroller@deletedatapendudukkadus');
Route::get('/deletedatapendudukkades/{id}/{id2}', 'admincontroller@deletedatapendudukkades');
Route::get('/deletebarangdesa/{id}', 'admincontroller@deletebarangdesa');





//post add rute
Route::post('/addberita', 'admincontroller@addberita');
Route::post('/addpengumuman', 'admincontroller@addpengumuman');
Route::post('/addjmlpend', 'admincontroller@addjmlpend');
Route::post('/addstatpendidikanpend', 'admincontroller@addstatpendidikanpend');
Route::post('/addstatagamapend', 'admincontroller@addstatagamapend');
Route::post('/addstatpekerjaanpend', 'admincontroller@addstatpekerjaanpend');
Route::post('/addstatetnispend', 'admincontroller@addstatetnispend');
Route::post('/addbarangdesa', 'admincontroller@addbarangdesa');
Route::post('/adddatapendudukkadus', 'admincontroller@adddatapendudukkadus');
Route::post('/adddatapendudukkades', 'admincontroller@adddatapendudukkades');


//post edit rute
Route::post('/editberita/{id}', 'admincontroller@editberita');
Route::post('/editpengumuman/{id}', 'admincontroller@editpengumuman');
Route::post('/editjmlpend/{id}', 'admincontroller@editjmlpend');
Route::post('/editstatpendidikanpend/{id}', 'admincontroller@editstatpendidikanpend');
Route::post('/editstatagamapend/{id}', 'admincontroller@editstatagamapend');
Route::post('/editstatpekerjaanpend/{id}', 'admincontroller@editstatpekerjaanpend');
Route::post('/editstatetnispend/{id}', 'admincontroller@editstatetnispend');
Route::post('/editbarangdesa/{id}', 'admincontroller@editbarangdesa');
Route::post('/editdatapendudukkadus/{id}', 'admincontroller@editdatapendudukkadus');
Route::post('/editdatapendudukkades/{id}/{id2}', 'admincontroller@editdatapendudukkades');
Route::post('/editdeskripsiprofildesa', 'admincontroller@editdeskripsiprofildesa');
Route::get('/penduduk_keluar/{id}', 'admincontroller@penduduk_keluar');
Route::post('/postpenduduk_keluar/{id}', 'admincontroller@postpenduduk_keluar');


//post aktifasi akun
Route::get('/aktifasiakun/{id}', 'admincontroller@aktifasiakun');
Route::get('/deleteakun/{id}', 'admincontroller@deleteakun');






// editfoto
Route::post('/editfotokades', 'gantifotocontroller@editfotokades');
Route::post('/editfotoketbpd', 'gantifotocontroller@editfotoketbpd');
Route::post('/editfotosekdes', 'gantifotocontroller@editfotosekdes');
Route::post('/editfotokaurpemerintahan', 'gantifotocontroller@editfotokaurpemerintahan');
Route::post('/editfotokaurpembangunan', 'gantifotocontroller@editfotokaurpembangunan');
Route::post('/editfotokaurkeuangan', 'gantifotocontroller@editfotokaurkeuangan');
Route::post('/editfotokaurumum', 'gantifotocontroller@editfotokaurumum');
Route::post('/editfotokaurkesra', 'gantifotocontroller@editfotokaurkesra');
Route::post('/editfotokaurtrantib', 'gantifotocontroller@editfotokaurtrantib');




Route::post('/uploadapbd/{id}', 'admincontroller@uploadapbd');


//Route file

Route::get('apbd', 'webcontroller@apbd');


Auth::routes();

// Route::get('/admin', 'HomeController@index')->name('admin');


Route::get('/admin', function(){
	if(Auth::user()->roles == "kades" && Auth::user()->status == "aktif"){
		$beritas= App\berita::all();
        $pengumumandesas= App\pengumumandesa::all();
        $profildesas= App\profildesa::all();
        $users= App\User::orderBy('status', 'desc')->get();
        $kode_area_dusuns= App\kode_area_dusun::all();
		return view('adminkades',['beritas' => $beritas, 'pengumumandesas' => $pengumumandesas,'profildesas' => $profildesas,'users' => $users,'kode_area_dusuns' => $kode_area_dusuns]);
	}elseif(Auth::user()->roles == "kadus" && Auth::user()->status == "aktif"){
		$users= \App\User::find(Auth::user()->id);
        $datapendudukkaduss= App\data_penduduk_kadus::where('id_kadus',Auth::user()->id)->get();
        $kode_area_dusuns=App\kode_area_dusun::where('id_kadus',Auth::user()->id)->get();
        $data_penduduks=App\data_penduduk::where('id_dusun',$kode_area_dusuns[0]->id_dusun)->get();
		return view('adminkadus',['users'=> $users ,'datapendudukkaduss' => $datapendudukkaduss,'data_penduduks' => $data_penduduks,'kode_area_dusuns' => $kode_area_dusuns]);
	}elseif(Auth::user()->roles == "member" && Auth::user()->status == "aktif"){
		$users= \App\User::find(Auth::user()->id);
		$barangdesas= \App\barangdesa::where('id_pemilik',Auth::user()->id)->get();
		return view('adminwarga',['users'=>$users,'barangdesas'=>$barangdesas]);
	}elseif(Auth::user()->roles == "member" && Auth::user()->status == "tidak aktif"){

		return view('auth/login')->with('pesan', 'Akun anda belum aktif');
	}
})->middleware('auth');















