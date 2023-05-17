<?php

namespace App\Http\Controllers\api;

use App\Models\Pay_mode;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pay_modeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pay_mode=DB::table('pay_mode')
        ->get();
        return json_encode(['pay_mode'=>$pay_mode]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pay_modes = new Pay_mode();
        $pay_modes->id=$request->id;
        $pay_modes->name=$request->name;
        $pay_modes->observation=$request->observation;   
        $pay_modes->save();
        return json_encode(['pay_modes' => $pay_modes]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pay_mode = Pay_mode::find($id);
        return json_encode(['pay_mode'=>$pay_mode]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $pay_mode=Pay_mode::find($id);
        $pay_mode->name=$request->name;
        $pay_mode->observation=$request->observation;   
        $pay_mode->save();
        return json_encode(['pay_mode' => $pay_mode]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pay_modes = Pay_mode::find($id);
        $pay_modes->delete();
        $pay_mode =DB::table('Pay_mode')
        ->get();
        return json_encode(['pay_mode'=>$pay_mode,'success'=>true]);


    }
}
