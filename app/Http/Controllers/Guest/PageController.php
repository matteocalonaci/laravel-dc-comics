<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function home(){

        $catalogo = Comic::all();
        $store = config("data");
        $data =
        [
            "comicsList" => $catalogo,
            "store" => $store

        ];
        return view('home', $data);
    }
}
