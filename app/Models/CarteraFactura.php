<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 12 Nov 2019 14:50:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CarteraFactura
 * 
 * @property int $id_crtra
 * @property string $tp_crtra
 * @property int $id_terc
 * @property int $id_fact
 * @property \Carbon\Carbon $fcha_fact
 * @property int $plazo_fact
 * @property int $id_terc_usu
 * @property float $vr_saldo
 * @property bool $pgar_provee
 * @property string $nro_remis
 * @property bool $factoring
 * @property \Carbon\Carbon $created_at
 * 
 * @property \App\Models\Tercero $tercero
 * @property \Illuminate\Database\Eloquent\Collection $cartera_facturas_dts
 *
 * @package App\Models
 */
class CarteraFactura extends Eloquent
{
	protected $primaryKey = 'id_crtra';
	public $timestamps = false;

	protected $casts = [
		'id_terc' => 'int',
		'id_fact' => 'int',
		'plazo_fact' => 'int',
		'id_terc_usu' => 'int',
		'vr_saldo' => 'float',
		'pgar_provee' => 'bool',
		'factoring' => 'bool'
	];

	protected $dates = [
		'fcha_fact'
	];

	protected $fillable = [
		'tp_crtra',
		'id_terc',
		'id_fact',
		'fcha_fact',
		'plazo_fact',
		'id_terc_usu',
		'vr_saldo',
		'pgar_provee',
		'nro_remis',
		'factoring'
	];

	public function tercero()
	{
		return $this->belongsTo(\App\Models\Tercero::class, 'id_terc');
	}

	public function cartera_facturas_dts()
	{
		return $this->hasMany(\App\Models\CarteraFacturasDt::class, 'id_crtra');
	}
}
