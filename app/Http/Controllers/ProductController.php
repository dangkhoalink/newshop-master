<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('front.index',compact('products'));
    }  
    public function shop()
    {
        $products = Product::paginate(3);
        return view('front.shop',compact('products'));      
    }
    public function product_details($id)
    {
        $products = Product::where('id',$id)->get();
        return view('front.product_details', compact('products'));
    }
    public function search(Request $request)
    {
        $search = $request->search_data;
        if($search==''){
            return view('front.index');
        }
        else{
        $products = Product::where('pro_name','like','%'.$search.'%')->paginate(2);
        return view('front.shop',['msg'=>'Results:  '. $search ], compact('products'));
        }
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
         $product = Product::where('slug', $slug)->firstOrFail();
        return view('product')->with('product', $product);
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
