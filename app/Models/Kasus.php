<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasus extends Model
{
    use HasFactory;

    protected $table = "kasuses";
    protected $fillable = ['id', 'positif', 'negatif', 'sembuh', 'meninggal', 'tanggal', 'id_negara'];
    public $timestamps = true;

    public function negara(){
        return $this->belongsTo(Negara::class);
    }
}
