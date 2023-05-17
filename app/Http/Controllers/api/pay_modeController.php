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
        $Pay_modes = new Pay_mode();
        $Pay_modes->id=$request->id;
        $Pay_modes->name=$request->name;
        $Pay_modes->observation=$request->observation;   
        $Pay_modes->save();
        return json_encode(['Pay_modes' => $Pay_modes]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Pay_mode = Pay_mode::find($id);
        return json_encode(['Pay_mode'=>$Pay_mode]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Pay_mode = Pay_mode::find($id);
        $Pay_mode->id=$request->id;
        $Pay_mode->name=$request->name;
        $Pay_mode->observation=$request->observation;   
        $Pay_mode->save();
        return json_encode(['Pay_mode' => $Pay_mode]);
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
        return json_encode(['pay_mode'=>$pay_mode]);


    }
}
