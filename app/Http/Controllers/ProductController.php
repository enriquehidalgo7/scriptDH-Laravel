<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Accesorie;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index() {

       $allProducts = Product::paginate(4);

       return view('indexproducts', compact('allProducts'));
     }

     // public function search() {
     //
     //   $product = Product::search(Input::get('search'))->orderBy('id', 'desc')->paginate(6);
     //
     //   return view('search', ['product' => $product]);
     // }


     public function latest()
     {
         $latestproducts = Product::where('units', '>', 10)
          ->latest()
          ->limit(4)
          ->get();

          $latestaccesories = Accesorie::where('units', '>', 10)
           ->latest()
           ->limit(4)
           ->get();

          return view('welcome', compact('latestproducts', 'latestaccesories'));
     }



    public function creationForm()
    {
        return view('productForm');
    }

    public function create(Request $request)
    {
      $request->validate([
          'name' => 'required|min:3|max:250',
          'description' => 'required|max:250|min:50',
          'price' => 'required|numeric',
          'units' => 'required|numeric',
        ]);

        $datos = $request->all();

        if ($request->hasFile('image')) {
          $path = $request->file('image')->storeAs('public/products', $request->title);
          $datos['images'] = $path;
        }

          Product::create($datos);

          return 'todo bien';
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
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $product = Product::find($id);

      return view('showProduct', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
