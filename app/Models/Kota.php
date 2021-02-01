<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_kota','id_provinsi'];
    public $timestamps = true;

    public function provinsi()
    {
        return $this->belongsTo('App\Models\Provinsi', 'id_provinsi');
    }

    public function kota()
    {
        return $this->hasMany('App\Models\Kota', 'id_kota');
    }
}
