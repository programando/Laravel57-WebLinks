<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 12 Nov 2019 14:50:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class FacturasResolucione
 * 
 * @property int $id_rslcion
 * @property string $prfjo_rslcion
 * @property string $num_rslcion
 * @property \Carbon\Carbon $fcha_rslcion
 * @property int $num_ini_rslcion
 * @property int $num_fin_rslcion
 * @property string $texto_rslcion
 * @property bool $inactivo
 * 
 * @property \Illuminate\Database\Eloquent\Collection $facturas
 *
 * @package App\Models
 */
class FacturasResolucione extends Eloquent
{
	protected $primaryKey = 'id_rslcion';
	public $timestamps = false;

	protected $casts = [
		'num_ini_rslcion' => 'int',
		'num_fin_rslcion' => 'int',
		'inactivo' => 'bool'
	];

	protected $dates = [
		'fcha_rslcion'
	];

	protected $fillable = [
		'prfjo_rslcion',
		'num_rslcion',
		'fcha_rslcion',
		'num_ini_rslcion',
		'num_fin_rslcion',
		'texto_rslcion',
		'inactivo'
	];

	public function facturas()
	{
		return $this->hasMany(\App\Models\Factura::class, 'id_rslcion');
	}
}
