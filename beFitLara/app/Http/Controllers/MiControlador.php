<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barrio;

class MiControlador extends Controller
{
    public function index(){
      return view('index');
    }

    public function registro(){
      $barrios = Barrio::all();
      return view('registro')
      ->with ('barrios', $barrios);
    }




    public function login(){
      return view('login');
    }

    public function faq(){
      return view('faq');
    }
}
