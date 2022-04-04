<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Basket;
use App\Models\BasketCat;
use Validator;
use Redirect;
use DB;


class WebBasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(){
    //     $result = Basket::all();
    //     return view('basket.index',compact('result'));
    // }

    public function create()
    {
        return view('basket.create');
    }


    public function store(Request $request)
    {
         $basket_id = $request->id;
        //  dd($basket_id);
         $basket_data = Basket::where('basket_id',$basket_id)->exists();
        //  dd($basket_data);
         if($basket_data)
         {
            // $baskset_cat = Basket::Where('id', $basket_id)->exists();
            $basket_data = Basket::where('basket_id',$basket_id)->delete();
         }

        // // if($request->ajax())
        // // {
            $input= $request->except('_token');
            Basket::insert($input['data']);

            return response()->json([
            'success'  => 'Data Added successfully.'
            ]);

       }

    public function edit(Request $request,$id)
    {
        $basket_id = $request->id;
        $baskset_cat = BasketCat::Where('id', $basket_id)->exists();
        if($baskset_cat)
        {
            $basket_data = Basket::where('basket_id',$id)->get();

            if(count($basket_data)>0){
                $data = $basket_data;
            } else {
                $data = '';
            }
        // } else {
        //     return view('basket.create',['basket' => $basket]);
        }

        return view('basket.create',['basket' => $data,'basket_id'=>$basket_id]);
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function delete($id)
    {
        $specname = Basket::findOrFail($id);
        $specname->delete();
        return response()->json([
            'success'  => 'Data Deleted successfully.'
           ]);
    }
}
