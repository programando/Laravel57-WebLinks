<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 10 Jan 2019 15:59:02 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class WebLink extends Eloquent
{
	protected $primaryKey = 'id_link';

	protected $fillable = [
		'link',
		'comentario',
		'keys',
		'imagen',
    'categoria'
	];

  public function scopeBusquedaKey( $query, $Filtro ){
               return $query
                    ->Where('keys'         ,'LIKE'   , "%$Filtro%")
                    ->orWhere('comentario'       ,'LIKE'   , "%$Filtro%")
                    ->orWhere('categoria'       ,'LIKE'   , "%$Filtro%");
  }
}
