<?php

namespace App\Http\Controllers;

use App\Http\Resources\PesmaResource;
use Illuminate\Http\Request;
use App\Models\Pesma;

class PesmaIzvodjacController extends Controller
{

    public static $wrap = 'pesma';

    public function index($izvodjac_id)
    {
    $pesme = Pesma::get()->where('izvodjac_id',$izvodjac_id);
    if(is_null($pesme)){
        return response()->json("Ne postoji izvodjac sa datim id-em");
    }
    return PesmaResource::collection($pesme);
    }
}
