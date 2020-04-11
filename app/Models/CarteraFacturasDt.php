<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 12 Nov 2019 14:50:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CarteraFacturasDt
 * 
 * @property int $id_crtra_dt
 * @property int $id_crtra
 * @property int $id_cntble
 * @property float $vr_tot_fact
 * @property float $vr_pago
 * @property float $vr_nota_deb
 * @property float $vr_nota_cred
 * @property float $vr_dvlcion
 * @property float $vr_saldo_fact
 * @property \Carbon\Carbon $created_at
 * 
 * @property \App\Models\CarteraFactura $cartera_factura
 *
 * @package App\Models
 */
class CarteraFacturasDt extends Eloquent
{
	protected $table = 'cartera_facturas_dt';
	protected $primaryKey = 'id_crtra_dt';
	public $timestamps = false;

	protected $casts = [
		'id_crtra' => 'int',
		'id_cntble' => 'int',
		'vr_tot_fact' => 'float',
		'vr_pago' => 'float',
		'vr_nota_deb' => 'float',
		'vr_nota_cred' => 'float',
		'vr_dvlcion' => 'float',
		'vr_saldo_fact' => 'float'
	];

	protected $fillable = [
		'id_crtra',
		'id_cntble',
		'vr_tot_fact',
		'vr_pago',
		'vr_nota_deb',
		'vr_nota_cred',
		'vr_dvlcion',
		'vr_saldo_fact'
	];

	public function cartera_factura()
	{
		return $this->belongsTo(\App\Models\CarteraFactura::class, 'id_crtra');
	}
}
