<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validate = Validator::make($request->all(), [

            'category_id' => 'required|numeric',

            'brand_id' => 'required|numeric',

            'sku' => 'required|string|max:100|unique:products',

            'name' => 'required|string|max:100|unique:products',

            'image' => 'required|image|mimes:jpeg,jpg,png|max:1024',

            'cost_price' => 'required|numeric',

            'retail_price' => 'required|numeric',

            'year' => 'required',

            'description' => 'required|string',

            'status' => 'required|numeric'

       ]);

       //Getting erors if validation failed 
       
       if($validate->fails()){

        return response()->json([

            'success' =>false,

            'errors'  =>$validate->errors()

        ], Response::HTTP_UNPROCESSABLE_ENTITY);


       }

      return  $request->all();

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
        //
    }
}
