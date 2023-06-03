<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Rol
 * 
 * @property int $id_rol
 * @property string $rol
 * @property string|null $descripcion
 * 
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Rol extends Model
{
	protected $table = 'rol';
	protected $primaryKey = 'id_rol';
	public $timestamps = false;

	protected $fillable = [
		'rol',
		'descripcion'
	];

	public function users()
	{
		return $this->hasMany(User::class, 'id_rol');
	}
}
