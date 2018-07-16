<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Edades;
use App\Barrio;

class MiControlador extends Controller
{
    public function index(){
      return view('index');
    }

    public function registro(){
      $barrios = Barrio::all();
      $edades = Edades::all();
      return view('registro')->with('edades', $edades)
                             ->with ('barrios', $barrios);
    }

    public function login(){
      return view('login');
    }

    public function faq(){
      return view('faq');
    }
}
