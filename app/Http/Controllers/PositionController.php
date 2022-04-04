<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get_position = Position::where('status',0)->get();
        return response()->json($get_position);
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
        $data = $request->all();
        $check = $request->date;
        try{
        $check_if_exists = Position::where('date', $check)->get();
       
        if($check_if_exists->isEmpty()){
            $basket_post = Position::create($data);  
            return response()->json($basket_post);
        }
        else{
            $che = $check_if_exists->toArray();
            $id = $che[0]['id'];
            $if_exists = Position::find($id);

            if($request->has('basketname')){
                $if_exists['basketname'] = $request->basketname;
            }
            if($request->has('date')){
                $if_exists['date'] = $request->date;
            }
            if($request->has('type')){
                $if_exists['type'] = $request->type;
            }
            if($request->has('avg_price')){
                $if_exists['avg_price'] = $request->avg_price;
            }
            if($request->has('pnl')){
                $if_exists['pnl'] = $request->pnl;
            }

            $updated_position = $if_exists->save();
            return response()->json("Position Updated successfully");
        }
    }
    catch(Exception $e){
        echo($e);
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_status = Position::find($id);
        $delete_status->status = 1;
        $delete_status->save();
        return response()->json("Position deleted successfully....");
    }
}
