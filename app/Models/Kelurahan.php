<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_kelurahan','id_kecamatan'];
    public $timestamps = true;

    public function kecamatan()
    {
        return $this->belongsTo('App\Models\Kecamatan', 'id_kecamatan');
    }

    public function kelurahan()
    {
        return $this->hasMany('App\Models\Kelurahan', 'id_kelurahan');
    }
}
