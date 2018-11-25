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
          'description' => 'required|max:250|min:20',
          'price' => 'required|numeric',
          'units' => 'required|numeric',
        ]);

        $datos = $request->all();

        if ($request->hasFile('image')) {
          $path = $request->file('image')->storeAs('public/products', $request->title);
          $datos['images'] = $path;
        }

          Product::create($datos);

          session()->flash('message', 'El producto se creó con éxito.');

          return back();
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



    public function editionForm($id)
    {
      $product = Product::find($id);

      return view('ProductEditionForm', compact('product'));

    }



    public function edit(Request $request, Product $product)
    {
      $request->validate([
          'name' => 'required|min:3|max:250',
          'description' => 'required|max:250|min:20',
          'price' => 'required|numeric',
          'units' => 'required|numeric',
        ]);

        $product->update($request->all());

        session()->flash('message', 'El producto se modificó con éxito.');

        	return redirect('/smarteate/admin');
    }



    public function destroy(Product $product)
  {
    $product->delete();

    session()->flash('message', 'El producto se eliminó con éxito.');

    return back();
  }
}
