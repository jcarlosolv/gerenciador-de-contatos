<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contato;

class ContatosController extends Controller
{
    public function index() {
        $contato = contato::all();
        // dd($contato);
        return view("contatos.index")->with('contatos', $contato);
    }

    public function store(Request $request){
        return to_route("contatos.index");
    }
}
