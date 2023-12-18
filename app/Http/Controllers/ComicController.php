<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index(){
        $comics = Comic::all();
        return view("comics.comics", compact("comics"));
    }

    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    public function create()
    {
        return view('comics.create');
    }
}
