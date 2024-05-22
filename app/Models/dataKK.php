<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataKK extends Model
{
    use HasFactory;
    protected $fillable = ['id','no_kk', 'nama_kepala_keluarga', 'rt_rw', 'alamat'];
    

}
