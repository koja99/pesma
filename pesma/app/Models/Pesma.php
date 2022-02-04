<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesma extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv_pesme',
    ];

    public function zanr(){
        return $this->belongsTo(Zanr::class);
    }

    public function izvodjac(){
        return $this->belongsTo(Izvodjac::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
