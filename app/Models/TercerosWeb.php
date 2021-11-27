<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 13 Apr 2021 00:27:51 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class TercerosWeb
 * 
 * @property int $idregistro
 * @property int $idtercero
 * @property string $email
 * @property string $password
 * @property bool $uso_web_empresa
 *
 * @package App\Models
 */
class TercerosWeb extends Eloquent
{
	protected $table = 'terceros_web';
	protected $primaryKey = 'idregistro';
	public $timestamps = false;

	protected $casts = [
		'idtercero' => 'int',
		'uso_web_empresa' => 'bool'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'idtercero',
		'email',
		'password',
		'uso_web_empresa'
	];
}
