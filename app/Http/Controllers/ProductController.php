<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Product;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = Product::paginate(10);
        return view('product.product', compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.createProduct');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        /*$request->validate([
            'name' => 'required',
            'quanlity' => 'required',
            'description' => 'required',
            'category_id' => 'required'
        ]);*/
        Product::create($request->all());
        return redirect()->route('product')
                        ->with('success','success create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showIdProduct = Product::find($id);
        return view('product.showProduct', compact('showIdProduct'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editIdProduct = Product::find($id);
        return view('product.editProduct', compact('editIdProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        /*$request->validate([
            'name' => 'required',
            'quanlity' => 'required',
            'description' => 'required',
            'category_id' => 'required'
        ]);*/
        $updateIdProduct = Product::where('id', $id)->update([ 'name' => $request->name, 'quanlity' => $request->quanlity, 'description' => $request->description, 'category_id' => $request->category_id ]);
        return redirect()->route('product')
                        ->with('success','success update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroyProduct=Product::destroy($id);
        return redirect()->route('product')
                        ->with('success','success delete');
    }
}
