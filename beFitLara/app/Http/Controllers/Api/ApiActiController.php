<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ApiActiController extends Controller
{
  public function cantUsuarios(){
    $cantidadDeUsuarios = User::all()->count();
    return response()->json($cantidadDeUsuarios);
  }
}
