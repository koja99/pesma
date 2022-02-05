<?php

namespace App\Http\Controllers;

use App\Models\Pesma;
use Illuminate\Http\Request;
use App\Http\Resources\PesmaResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        $validator=Validator::make($request->all(),[
            'naziv_pesme'=>'required|String|max:255',
            'zanr_id'=>'required',
            'izvodjac_id'=>'required',
            //'user_id'=>'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $pesma = new Pesma;
        $pesma->naziv_pesme = $request->naziv_pesme;
        $pesma->zanr_id = $request->zanr_id;
        $pesma->izvodjac_id=$request->izvodjac_id;
        $pesma->user_id=Auth::user()->id;

        $pesma->save();

        return response()->json(['Pesma je uspseno sacuvana!', new PesmaResource($pesma)]);
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
        $validator=Validator::make($request->all(),[
            'naziv_pesme'=>'required|String|max:255',
            'zanr_id'=>'required',
            'izvodjac_id'=>'required',
            //'user_id'=>'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        //print($knjiga);

        $pesma = new Pesma;
        $pesma->naziv_pesme = $request->naziv_pesme;
        $pesma->zanr_id = $request->zanr_id;
        $pesma->izvodjac_id=$request->izvodjac_id;
        $pesma->user_id=Auth::user()->id;

        $result = $pesma->update();

        if($result==false){
            return response()->json('Problem prilikom azuriranja pesme!');
        }

        return response()->json(['Pesma je uspesno azurirana!', new PesmaResource($pesma)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesma  $pesma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesma $pesma)
    {
        print($pesma);
        $pesma->delete();

        return response()->json('Pesma '.$pesma->naziv_pesme .'je uspesno obrisana!');
    }
}
