<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\Contato;


class ContatoController extends Controller
{
    public function index(){
        $contatos = Contato::all(); 
    
        return view('tbcontato', compact('contatos')); 
    }
}