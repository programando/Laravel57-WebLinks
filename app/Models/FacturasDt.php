<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 12 Nov 2019 14:50:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class FacturasDt
 * 
 * @property int $id_fact_dt
 * @property int $id_fact
 * @property int $id_terc_vend
 * @property int $id_prd
 * @property string $nro_hj_pn
 * @property float $cant
 * @property float $vr_precio_lista
 * @property float $vr_flete
 * @property float $vr_fnacion
 * @property float $vr_precio_adic
 * @property float $vr_dscto
 * @property float $pcje_iva
 * @property float $vr_iva
 * @property float $vr_unit_real
 * @property float $vt_tot_item
 * 
 * @property \App\Models\Factura $factura
 * @property \App\Models\ProductosPrsntcione $productos_prsntcione
 * @property \App\Models\Tercero $tercero
 *
 * @package App\Models
 */
class FacturasDt extends Eloquent
{
	protected $table = 'facturas_dt';
	protected $primaryKey = 'id_fact_dt';
	public $timestamps = false;

	protected $casts = [
		'id_fact' => 'int',
		'id_terc_vend' => 'int',
		'id_prd' => 'int',
		'cant' => 'float',
		'vr_precio_lista' => 'float',
		'vr_flete' => 'float',
		'vr_fnacion' => 'float',
		'vr_precio_adic' => 'float',
		'vr_dscto' => 'float',
		'pcje_iva' => 'float',
		'vr_iva' => 'float',
		'vr_unit_real' => 'float',
		'vt_tot_item' => 'float'
	];

	protected $fillable = [
		'id_fact',
		'id_terc_vend',
		'id_prd',
		'nro_hj_pn',
		'cant',
		'vr_precio_lista',
		'vr_flete',
		'vr_fnacion',
		'vr_precio_adic',
		'vr_dscto',
		'pcje_iva',
		'vr_iva',
		'vr_unit_real',
		'vt_tot_item'
	];

	public function factura()
	{
		return $this->belongsTo(\App\Models\Factura::class, 'id_fact');
	}

	public function productos_prsntcione()
	{
		return $this->belongsTo(\App\Models\ProductosPrsntcione::class, 'id_prd');
	}

	public function tercero()
	{
		return $this->belongsTo(\App\Models\Tercero::class, 'id_terc_vend');
	}
}
