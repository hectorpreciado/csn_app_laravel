<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies=Movie::all();
        return $movies;
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
        $movies-> where($id);
        return $movies ->delete();
    }

    public function put(Request $request)
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
}
