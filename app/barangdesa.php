<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barangdesa extends Model
{
    //
    protected $fillable = ['nama', 'harga', 'jumlah', 'urlgambar', 'id_pemilik', 'deskripsi' ,'created_at', 'updated_at'];
}
