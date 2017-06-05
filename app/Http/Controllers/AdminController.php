<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use Storage;
use App\Pro_Cat;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.admin_home');
    }
    public function add_product(Request $request)
    {
        $file = $request->file('pro_image');
        $filename = $file->getClientOriginalName();
        $path = 'upload/images';
        $file -> move($path,$filename);
        $product = new product();        
        $product->pro_name = $request->pro_name;
        $product->pro_code = $request->pro_code;
        $product->pro_price = $request->pro_price;
        $product->pro_info = $request->pro_info;
        $product->pro_image = $filename;
        $product->spl_price = $request->spl_price;        
        $product->save();
        return redirect()->action ('AdminController@index')->with('status','Product uploaded!!');
    }
    public function category(){
        $cats = Pro_Cat::all();
        return view('admin.admin_home',compact('cats'));
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
