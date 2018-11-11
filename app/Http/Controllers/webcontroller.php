<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\apbd;
use App\rkp;
use App\rpjm;
use App\barangdesa;
use App\berita;
use App\pengumumandesa;
use App\jmlpend;
use App\statagamapend;
use App\statetnispend;
use App\statpendidikanpend;
use App\statpekerjaanpend;
use App\profildesa;
use App\User;
use Artisan;

class webcontroller extends Controller
{
    //


    public function artisancall()
    {
        Artisan::call("storage:link");
    }
    public function organisasi()
    {
        # code...
        $profildesa['profildesas']=profildesa::all();
        return view("organisasi",$profildesa);
    }


    public function karangtaruna()
    {
        # code...
        return view("karangtaruna");
    }  


    public function BPD()
    {
        # code...
        return view("BPD");
    }  


    public function LPMD()
    {
        # code...
        return view("LPMD");
    }  

    public function profildesa()
    {
        # code...
        $jmlpends=jmlpend::paginate(10);
        $agamas= statagamapend::paginate(10);
        $pendidikans= statpendidikanpend::paginate(10);
        $pekerjaans= statpekerjaanpend::paginate(10);
        $etniss= statetnispend::paginate(10);
        $profildesas= profildesa::all();
        return view("profildesa",['agamas' => $agamas, 'jmlpends' => $jmlpends, 'pendidikans' => $pendidikans, 'etniss' => $etniss, 'pekerjaans' => $pekerjaans, 'profildesas' => $profildesas]);
    }


    public function indexhome()
    {
       $beritas= berita::orderBy("created_at","desc")->take(3)->skip(0)->get();
       $pengumumans= pengumumandesa::orderBy("created_at","desc")->take(5)->skip(0)->get();
       $profildesas= profildesa::all();
       $barangdesas = barangdesa::orderBy("created_at","desc")->take(4)->get();
       $barangdesas2 = barangdesa::orderBy("created_at","desc")->take(4)->skip(4)->get();
       $barangdesas3 = barangdesa::orderBy("created_at","desc")->take(4)->skip(8)->get();

       return view('indexhome', ['beritas' => $beritas, 'pengumumans' => $pengumumans, 'profildesas' => $profildesas, 'barangdesas' => $barangdesas, 'barangdesas2' => $barangdesas2, 'barangdesas3' => $barangdesas3]);
    }


    public function beritadesa()
    {
        # code...
        $beritas = berita::paginate(5);
        return view('beritadesa',['beritas' => $beritas]);
    }

    public function pengumumandesa()
    {
        # code...
        $pengumumans= pengumumandesa::paginate(5);

        return view('pengumumandesa', ['pengumumans' => $pengumumans]);
    }  

    public function detailberitadesa($id)
    {
        # code...
        $beritas=berita::where('judulberita', '=', $id)->first();
        return view("detailberita",['beritas' => $beritas]);
    }

    public function detailpengumuman($id)
    {
        # code...
        $pengumumans=pengumumandesa::where('judulpengumuman', '=', $id)->first();
        return view("detailpengumuman",['pengumumans' => $pengumumans]);

    } 


    public function barangdesa()
    {
    	# code...
        $barangdesas = barangdesa::paginate(30);
    	return view('barangdesa',['barangdesas' => $barangdesas]);
    }

    public function detailbarangdesa($id)
    {
    	# code...
        $barangdesas= barangdesa::find($id);
        $users= User::find($barangdesas->id_pemilik);
    	
    	return view('detailbarangdesa',['barangdesas' => $barangdesas,'users' => $users]);
    }

    public function transparansi($id)
    {
        # code...
        switch ($id) {
        case 'apbd':

            $apbds =apbd::all();
            return view('transparansi', ['apbds' => $apbds], ['id' => $id]);

            break;

        case 'rkp':

            $apbds =rkp::all();
            return view('transparansi', ['apbds' => $apbds], ['id' => $id]);

            
            break;

        case 'rpjm':

             $apbds =rpjm::all();
             return view('transparansi', ['apbds' => $apbds], ['id' => $id]);

            
        break;
    }
        
    }
}
