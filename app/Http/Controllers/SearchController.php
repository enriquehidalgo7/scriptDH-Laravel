<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Accesorie;


class SearchController extends Controller
{

  public function __construct() {
    $this->middleware('guest');
  }


    public function seeker(Request $request) {

      $request->validate([
          'buscador' => 'required|min:3|max:10',
        ]);

    $Products = Product::where('name','like','%'.$request->input('buscador').'%')->get();

    $Accesories = Accesorie::where('name','like','%'.$request->input('buscador').'%')->get();

    return view('searchResult', compact('Products','Accesories'));

  }
}
