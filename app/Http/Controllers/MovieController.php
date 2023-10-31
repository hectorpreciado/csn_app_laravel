<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies',compact('movies'));
    }

    public function especific($id)
    {
        $movies=Movie::find($id);
        return $movies;
    }

    public function add(Request $request)
    {
        $datos =[
            'title'=>$_POST['title'],
            "synopsis"=>$_POST['synopsis'],
            "year"=>$_POST['year'],
            "cover"=>$_POST['cover']
        ];
        $movies=Movie::create($datos);
        return $movies;
    }

    public function delete($id)
    {
        $movies = Movie::find($id);
        $result = $movies->delete();
        if ($result)
        {
            return ["result"=>"Eliminado con éxito"];
        }
        else {
            return ["result"=>"No se logro eliminar"];
        }
    }

   public function update(Request $req)
   {
    $movies = Movie::find($req->id);
    $movies -> title = $req->title;
    $movies -> synopsis = $req->synopsis;
    $movies -> year = $req->year;
    $movies -> cover = $req->cover;
    $result = $movies->save();
    if($result)
    {
        return ["result"=>"Actualizado"];
    }
    else {
        return ["result"=>"No se completo la operación"];
    }
   }
}
