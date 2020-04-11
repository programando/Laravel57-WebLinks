<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 12 Nov 2019 14:50:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MenusPermiso
 * 
 * @property int $id_permiso
 * @property int $id_perfil
 * @property int $id_mnu
 * @property bool $c
 * @property bool $r
 * @property bool $u
 * @property bool $d
 * 
 * @property \App\Models\MstroCargo $mstro_cargo
 *
 * @package App\Models
 */
class MenusPermiso extends Eloquent
{
	protected $primaryKey = 'id_permiso';
	public $timestamps = false;

	protected $casts = [
		'id_perfil' => 'int',
		'id_mnu' => 'int',
		'c' => 'bool',
		'r' => 'bool',
		'u' => 'bool',
		'd' => 'bool'
	];

	protected $fillable = [
		'id_perfil',
		'id_mnu',
		'c',
		'r',
		'u',
		'd'
	];

	public function mstro_cargo()
	{
		return $this->belongsTo(\App\Models\MstroCargo::class, 'id_perfil');
	}
}
