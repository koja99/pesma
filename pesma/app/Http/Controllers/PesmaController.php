<?php

namespace App\Http\Controllers;

use App\Models\Pesma;
use Illuminate\Http\Request;
use App\Http\Resources\PesmaResource;

class PesmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public static $wrap = 'pesma';


    public function index()
    {
        /*$pesme=Pesma::all();
        return $pesme;*/
        $pesme = Pesma::all();
        return PesmaResource::collection($pesme);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pesma  $pesma
     * @return \Illuminate\Http\Response
     */
    public function show(Pesma $pesme)
    {
        return new PesmaResource($pesme);
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pesma  $pesma
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesma $pesma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pesma  $pesma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pesma $pesma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesma  $pesma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesma $pesma)
    {
        //
    }
}
