<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 12 Nov 2019 14:50:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class BtcraVta
 * 
 * @property int $id_btcra
 * @property \Carbon\Carbon $fcha_rgstro
 * @property int $id_terc
 * @property string $nro_identif
 * @property string $nom_full
 * @property int $id_dpto
 * @property string $nom_dpto
 * @property int $id_mcipio
 * @property string $nom_mcpio
 * @property int $id_linea_cli
 * @property string $nom_linea_cli
 * @property int $id_terc_vend_ppal
 * @property int $id_terc_vend_secd
 * @property int $id_terc_vend_fact
 * @property string $vend_cod_ppal
 * @property string $vend_cod_secd
 * @property string $vend_cod_fact
 * @property string $nom_vend_ppal
 * @property string $nom_vend_secd
 * @property string $nom_vend_fact
 * @property int $id_ped
 * @property int $num_ped
 * @property \Carbon\Carbon $fcha_ped
 * @property string $num_ord_cpra
 * @property int $id_fact
 * @property string $prfjo_rslcion
 * @property int $num_fact
 * @property \Carbon\Carbon $fcha_fact
 * @property int $plazo_fact
 * @property \Carbon\Carbon $fcha_vnce
 * @property int $anio_fact
 * @property int $mes_fact
 * @property float $pcje_dscto_fact
 * @property float $vr_dscto_fact
 * @property float $vr_flete_fact
 * @property float $vr_subtotal_fact
 * @property float $vr_iva_fact
 * @property float $vr_tot_fact
 * @property int $id_prd_ppal
 * @property int $id_prd
 * @property int $id_linea_prd
 * @property string $nom_linea_prd
 * @property string $clave
 * @property string $nom_prd
 * @property string $nom_present
 * @property string $descrip
 * @property float $peso_kg
 * @property float $peso_grm
 * @property float $cant
 * @property float $vr_precio_lista
 * @property float $vr_flete
 * @property float $vr_precio_adic
 * @property float $vr_dscto
 * @property float $pcje_iva
 * @property float $vr_iva
 * @property float $vr_unit_real
 * @property float $vt_tot_item
 * @property string $nro_hj_pn
 *
 * @package App\Models
 */
class BtcraVta extends Eloquent
{
	protected $primaryKey = 'id_btcra';
	public $timestamps = false;

	protected $casts = [
		'id_terc' => 'int',
		'id_dpto' => 'int',
		'id_mcipio' => 'int',
		'id_linea_cli' => 'int',
		'id_terc_vend_ppal' => 'int',
		'id_terc_vend_secd' => 'int',
		'id_terc_vend_fact' => 'int',
		'id_ped' => 'int',
		'num_ped' => 'int',
		'id_fact' => 'int',
		'num_fact' => 'int',
		'plazo_fact' => 'int',
		'anio_fact' => 'int',
		'mes_fact' => 'int',
		'pcje_dscto_fact' => 'float',
		'vr_dscto_fact' => 'float',
		'vr_flete_fact' => 'float',
		'vr_subtotal_fact' => 'float',
		'vr_iva_fact' => 'float',
		'vr_tot_fact' => 'float',
		'id_prd_ppal' => 'int',
		'id_prd' => 'int',
		'id_linea_prd' => 'int',
		'peso_kg' => 'float',
		'peso_grm' => 'float',
		'cant' => 'float',
		'vr_precio_lista' => 'float',
		'vr_flete' => 'float',
		'vr_precio_adic' => 'float',
		'vr_dscto' => 'float',
		'pcje_iva' => 'float',
		'vr_iva' => 'float',
		'vr_unit_real' => 'float',
		'vt_tot_item' => 'float'
	];

	protected $dates = [
		'fcha_rgstro',
		'fcha_ped',
		'fcha_fact',
		'fcha_vnce'
	];

	protected $fillable = [
		'fcha_rgstro',
		'id_terc',
		'nro_identif',
		'nom_full',
		'id_dpto',
		'nom_dpto',
		'id_mcipio',
		'nom_mcpio',
		'id_linea_cli',
		'nom_linea_cli',
		'id_terc_vend_ppal',
		'id_terc_vend_secd',
		'id_terc_vend_fact',
		'vend_cod_ppal',
		'vend_cod_secd',
		'vend_cod_fact',
		'nom_vend_ppal',
		'nom_vend_secd',
		'nom_vend_fact',
		'id_ped',
		'num_ped',
		'fcha_ped',
		'num_ord_cpra',
		'id_fact',
		'prfjo_rslcion',
		'num_fact',
		'fcha_fact',
		'plazo_fact',
		'fcha_vnce',
		'anio_fact',
		'mes_fact',
		'pcje_dscto_fact',
		'vr_dscto_fact',
		'vr_flete_fact',
		'vr_subtotal_fact',
		'vr_iva_fact',
		'vr_tot_fact',
		'id_prd_ppal',
		'id_prd',
		'id_linea_prd',
		'nom_linea_prd',
		'clave',
		'nom_prd',
		'nom_present',
		'descrip',
		'peso_kg',
		'peso_grm',
		'cant',
		'vr_precio_lista',
		'vr_flete',
		'vr_precio_adic',
		'vr_dscto',
		'pcje_iva',
		'vr_iva',
		'vr_unit_real',
		'vt_tot_item',
		'nro_hj_pn'
	];
}
