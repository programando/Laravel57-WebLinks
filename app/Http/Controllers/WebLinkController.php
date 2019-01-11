<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebLink as Links;
class WebLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Index()  {
        //
      return view('index');
    }


    public function store(Request $request) {
        $Link             = new Links;
        $Link->link       = $request->link;
        $Link->comentario = $request->comentario;
        $Link->keys       = $request->keys;
        $Link->categoria  = $request->categoria;
        $Link->imagen     = '';
        $Link->save();
    }

    public function Listar(){
      $Links = Links::get()->all();
      return   $Links ;
    }

    public function Buscar( Request $FormData ){
      $filtro =  $FormData->filtro;

      return Links::BusquedaKey( $filtro )->get();
    }

}
