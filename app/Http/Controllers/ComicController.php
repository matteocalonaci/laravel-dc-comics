<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catalogo = Comic::all();
        $store = config("data");
        $data =
            [
                "comicsList" => $catalogo,
                "store" => $store

            ];
        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //sono i dati che attivano dal form
        $data = $request->validate([
            "title" => "required|min:5|max:50",
            "description" => "required|min:10|max:200",
            "thumb" => "required|url",
            "price" => "required|numeric",
            "series" => "required|min:5|max:50",
            "sale_date" => "required|date",
            "type" => "required|min:5|max:50"
        ]);

        $newComic = new Comic();
        $newComic->fill($data);

        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {

        $data = [
            "comic" => $comic
        ];
        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        $data = [
            "comic" => $comic
        ];
        return view('comics.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];

        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
