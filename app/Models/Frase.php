<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 12 Nov 2019 14:50:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Frase
 * 
 * @property int $id_frase
 * @property int $id_terc
 * @property string $nom_frase
 * @property string $autor
 *
 * @package App\Models
 */
class Frase extends Eloquent
{
	protected $primaryKey = 'id_frase';
	public $timestamps = false;

	protected $casts = [
		'id_terc' => 'int'
	];

	protected $fillable = [
		'id_terc',
		'nom_frase',
		'autor'
	];
}
