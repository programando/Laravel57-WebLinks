<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 12 Nov 2019 14:50:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Menu
 * 
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $parent
 * @property int $order
 * @property bool $enabled
 * @property string $image
 *
 * @package App\Models
 */
class Menu extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'parent' => 'int',
		'order' => 'int',
		'enabled' => 'bool'
	];

	protected $fillable = [
		'name',
		'slug',
		'parent',
		'order',
		'enabled',
		'image'
	];
}
