<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contato;

class ContatosController extends Controller
{
    public function index() {
        $contato = contato::query()->orderBy("nome", "asc")->get();
        // dd($contato);
        return view("contatos.index")->with('contatos', $contato);
    }

    public function create(){
        return view('contatos.create');
    }

    public function store(Request $request){
        contato::create($request->all());
        // dd($request->all());
        return to_route("contatos.index");
    }

    public function edit(contato $contato){
        return view("contatos.edit")->with("contato", $contato);
    }

    public function update(Request $request,contato $contato){
        $contato->update($request->all());
        return to_route("contatos.index");
    }

}
