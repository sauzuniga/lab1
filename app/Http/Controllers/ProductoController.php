<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(Request $request){
        return view("form");
    }
    public function guardar(Request $request){
      $request->validate([
        "nombre"=> "requiered",
        "marca"=> "requiered",
        "stock"=> "requiered | numeric ",
        "peso"=> "requiered | numeric ",
      ]);
    }
}
