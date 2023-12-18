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

    public function store(Request $request)
{
    // Validazione dei dati
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'thumb'=> 'required|string',
        'description'=> 'required|string',
        'price'=> 'required|numeric|between:0,9999999.99',
        'series' => 'required|string|max:255',
        'sale_date' => 'required|date',
        'type' => 'required|string|max:255',
        
    ]);

    $comic = Comic::create($validatedData);
    return redirect()->route('comics.show', $comic->id);
}
}
