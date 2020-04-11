<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 12 Nov 2019 14:50:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Factura
 * 
 * @property int $id_fact
 * @property int $id_rslcion
 * @property int $id_ped
 * @property int $num_fact
 * @property \Carbon\Carbon $fcha_fact
 * @property int $id_terc_cli
 * @property int $id_terc_usu
 * @property int $id_terc_trnspdor
 * @property string $nro_guia
 * @property int $plazo_fact
 * @property string $num_ordcpra
 * @property string $num_remis
 * @property string $observ_fact
 * @property float $vr_subtotal
 * @property float $pcje_dscto
 * @property float $vr_dscto
 * @property float $vr_flete
 * @property float $vr_base_impto
 * @property float $vr_iva
 * @property float $vr_tot_fact
 * @property bool $inactivo
 * @property int $id_terc_usu_inactvo
 * @property \Carbon\Carbon $fcha_inactivo
 * @property string $mtivo_inactivo
 * @property bool $cto_ok
 * @property bool $web
 * @property bool $revisado
 * 
 * @property \App\Models\FacturasResolucione $facturas_resolucione
 * @property \App\Models\Tercero $tercero
 * @property \Illuminate\Database\Eloquent\Collection $facturas_dts
 *
 * @package App\Models
 */
class Factura extends Eloquent
{
	protected $primaryKey = 'id_fact';
	public $timestamps = false;

	protected $casts = [
		'id_rslcion' => 'int',
		'id_ped' => 'int',
		'num_fact' => 'int',
		'id_terc_cli' => 'int',
		'id_terc_usu' => 'int',
		'id_terc_trnspdor' => 'int',
		'plazo_fact' => 'int',
		'vr_subtotal' => 'float',
		'pcje_dscto' => 'float',
		'vr_dscto' => 'float',
		'vr_flete' => 'float',
		'vr_base_impto' => 'float',
		'vr_iva' => 'float',
		'vr_tot_fact' => 'float',
		'inactivo' => 'bool',
		'id_terc_usu_inactvo' => 'int',
		'cto_ok' => 'bool',
		'web' => 'bool',
		'revisado' => 'bool'
	];

	protected $dates = [
		'fcha_fact',
		'fcha_inactivo'
	];

	protected $fillable = [
		'id_rslcion',
		'id_ped',
		'num_fact',
		'fcha_fact',
		'id_terc_cli',
		'id_terc_usu',
		'id_terc_trnspdor',
		'nro_guia',
		'plazo_fact',
		'num_ordcpra',
		'num_remis',
		'observ_fact',
		'vr_subtotal',
		'pcje_dscto',
		'vr_dscto',
		'vr_flete',
		'vr_base_impto',
		'vr_iva',
		'vr_tot_fact',
		'inactivo',
		'id_terc_usu_inactvo',
		'fcha_inactivo',
		'mtivo_inactivo',
		'cto_ok',
		'web',
		'revisado'
	];

	public function facturas_resolucione()
	{
		return $this->belongsTo(\App\Models\FacturasResolucione::class, 'id_rslcion');
	}

	public function tercero()
	{
		return $this->belongsTo(\App\Models\Tercero::class, 'id_terc_usu_inactvo');
	}

	public function facturas_dts()
	{
		return $this->hasMany(\App\Models\FacturasDt::class, 'id_fact');
	}
}
