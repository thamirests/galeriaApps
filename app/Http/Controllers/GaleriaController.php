<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    public function galeria(){

      $descricao = "Descrição do aplicativo";
      return view('welcome')->with('descricao', $descricao);
    }
}
