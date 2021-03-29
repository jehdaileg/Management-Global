<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sizes = Size::orderby('created_at', 'DESC')->get();

        return view('sizes.index', compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('sizes.create');
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

        $size = $request->validate([

            'name'=>'required|min:2|max:50|unique:sizes'

        ]);

        Size::create($size);

        flash('Size cree avec Success')->success();

        return back();
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
        $size = Size::find($id);

        return view('sizes.edit', compact('size'));
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

        $this->validate($request, [

            'name'=>'required|min:2|max:50|unique:sizes,name,' .$id

        ]);

        $size = Size::find($id);

        $size->name = $request->name;

        $size->save();

        flash('Size modifie avec Success')->success();

        return redirect()->route('sizes.index');
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

        $size = Size::find($id);

        $size->delete();

        flash('Size Supprime avec Success')->success();

        return back();
    }

    //AJAX Request to get datas in JSON format 

    public function getSizesJson()
    {

        $sizes = Size::all();

        return response()->json([

            'success'=>true,

            'data'=>$sizes

        ], Response::HTTP_OK);
    }
}
