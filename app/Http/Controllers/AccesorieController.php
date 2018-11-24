<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accesorie;

class AccesorieController extends Controller
{
  public function creationForm()
  {
      return view('accesoryForm');
  }

  public function create(Request $Request)
  {
    $this->validate([
        'name' => 'required|min:3|max:250',
        'description' => 'required|max:250|min:50',
        'price' => 'required|numeric',
        'units' => 'required|numeric',
        'image' => 'required'
      ]);

      if ($request->hasFile('image')) {
        $path = $request->file('image')->storeAs('products/', $request->title);
        $datos['images'] = $path;
      }
        $datos = $request->all();

        Accesorie::create($datos);
  }




  // public function latestacc()
  // {
  //     $latestaccesories = Accesorie::where('units', '>', 10)
  //      ->latest()
  //      ->limit(4)
  //      ->get();
  //
  //      return view('welcome', compact('latestaccesories'));
  // }

// si modifico un seeder como tengo que hacer para volverlo a correr?
// puedo cargar la ruta de imagenes en el seeder?
// mis compañeros de trabajo la avn a poder ver?
// cual es la mejor manera de tratar las imagenes que van a estar en la pagina con laravel?





}
