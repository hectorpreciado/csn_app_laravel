<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $peliculas = Movie::all();
        return view('welcome', compact('peliculas'));
    }

    public function especific($id)
    {
        $movies=Movie::find($id);
        return $movies;
    }

    public function store(Request $request)
    {
        $movies = new Movie();
        $movies ->title=$request->post('title');
        $movies ->synopsis=$request->post('synopsis');
        $movies ->year=$request->post('year');
        $movies ->cover=$request->post('cover');
        $movies->save();

        return redirect()->route('movie.lista')->with("success", "Agregado con éxito");
    }

    public function create()
    {
        return view('add');
    }

    public function actualizar($id)
    {
        $movies = Movie::find($id);

        return view('update', compact('movies'));
    }

    public function del($id)
    {
        $movies= Movie::find($id);
        $movies->delete();
        return redirect()->route("movie.lista")->with("success","Eliminado con éxito");
    }

    public function show($id)
    {
        $movies = Movie::find($id);
        return view('eliminar', compact('movies'));
    }

   public function update(Request $request, $id)
   {
    $movies = Movie::find($id);
    $movies ->title=$request->post('title');
    $movies ->synopsis=$request->post('synopsis');
    $movies ->year=$request->post('year');
    $movies ->cover=$request->post('cover');
    $movies->save();

    return redirect()->route('movie.lista')->with("success", "Agregado con éxito");

   }
}
