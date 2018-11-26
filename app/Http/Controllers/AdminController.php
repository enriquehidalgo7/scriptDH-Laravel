<?php

namespace App\Http\Controllers;

use App\Product;
use App\Accesorie;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function index()
  {
    $Products = Product::paginate(5);
    $Accesories = Accesorie::paginate(5);

    return view('adminPanel', compact('Products', 'Accesories'));
  }

  public function seeker(Request $request) {

    $request->validate([
        'buscador' => 'required|min:3|max:10',
      ]);

  $Products = Product::where('name','like','%'.$request->input('buscador').'%')->get();

  $Accesories = Accesorie::where('name','like','%'.$request->input('buscador').'%')->get();

  return view('adminSearchResult', compact('Products','Accesories'));

}
}
