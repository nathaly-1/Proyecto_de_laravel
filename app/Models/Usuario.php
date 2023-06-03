<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $idUsusrio
 * @property string $usuario
 * @property string $pasword1
 * @property int $n_empleado
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuario';
	protected $primaryKey = 'idUsusrio';
	public $timestamps = false;

	protected $casts = [
		'n_empleado' => 'int'
	];

	protected $fillable = [
		'usuario',
		'pasword1',
		'n_empleado'
	];
}
