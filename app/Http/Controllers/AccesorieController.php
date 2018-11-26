<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accesorie;

class AccesorieController extends Controller
{

  public function show($id)
  {
    $accesory = Accesorie::find($id);

    return view('showAccesorie', compact('accesory'));
  }

  public function creationForm()
  {
      return view('accesoryForm');
  }

  public function create(Request $request)
  {
    $request->validate([
        'name' => 'required|min:3|max:250',
        'description' => 'required|max:250|min:50',
        'price' => 'required|numeric',
        'units' => 'required|numeric',
        'images' => 'required'
      ]);

      $datos = $request->all();

      if ($request->hasFile('image')) {
        $path = $request->file('image')->storeAs('accesories/', $request->title);
        $datos['images'] = $path;
      }

        Accesorie::create($datos);

        session()->flash('message', 'El accesorio se creó con éxito.');

        return back();
  }

  public function editionForm($id)
  {
    $accesorie = Accesorie::find($id);

    return view('accesoryEditionForm', compact('accesorie'));

  }



  public function edit(Request $request, Accesorie $accesorie)
  {
    $request->validate([
        'name' => 'required|min:3|max:250',
        'description' => 'required|max:250|min:50',
        'price' => 'required|numeric',
        'units' => 'required|numeric',
        'images' => 'required'
      ]);

      $accesorie->update($request->all());

      session()->flash('message', 'El accesorio se modificó con éxito.');

      return back();
  }

    public function destroy(Accesorie $accesorie)
  {
    $accesorie->delete();

    session()->flash('message', 'El accesorio se eliminó con éxito.');

    return back();
  }







// si modifico un seeder como tengo que hacer para volverlo a correr?
// puedo cargar la ruta de imagenes en el seeder?
// mis compañeros de trabajo la avn a poder ver?
// cual es la mejor manera de tratar las imagenes que van a estar en la pagina con laravel?





}
