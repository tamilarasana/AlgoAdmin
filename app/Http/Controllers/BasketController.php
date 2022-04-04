<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Basket::where('status',0)->get();
        return response()->json($result);

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
        $basket_post = Basket::create($data);
        return response()->json($basket_post);
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
        $if_exists = Basket::findOrFail($id);

            if($request->has('basketname')){
                $if_exists['basketname'] = $request->basketname;
            }
            if($request->has('tokenId')){
                $if_exists['tokenId'] = $request->tokenId;
            }
            if($request->has('tokenName')){
                $if_exists['tokenName'] = $request->tokenName;
            }
            if($request->has('qtyPerExe')){
                $if_exists['qtyPerExe'] = $request->qtyPerExe;
            }
            if($request->has('SqTarget')){
                $if_exists['SqTarget'] = $request->SqTarget;
            }
            if($request->has('StLoss')){
                $if_exists['StLoss'] = $request->StLoss;
            }
            if($request->has('lossSqr')){
                $if_exists['lossSqr'] = $request->lossSqr;
            }
            if($request->has('sqst')){
                $if_exists['sqst'] = $request->sqst;
            }
            if($request->has('sqrdPrice')){
                $if_exists['sqrdPrice'] = $request->sqrdPrice;
            }
            if($request->has('sqrdSignal')){
                $if_exists['sqrdSignal'] = $request->sqrdSignal;
            }
            if($request->has('ticket_price')){
                $if_exists['ticket_price'] = $request->ticket_price;
            }
            if($request->has('ttl_tk_price')){
                $if_exists['ttl_tk_price'] = $request->ttl_tk_price;
            }
            if($request->has('margin_price')){
                $if_exists['margin_price'] = $request->margin_price;
            }

            $updated_position = $if_exists->save();
            return response()->json("Position Updated successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_status = Basket::find($id);
        $delete_status->status = 1;
        $delete_status->save();
        return response()->json("Position deleted successfully....");

    }
}
