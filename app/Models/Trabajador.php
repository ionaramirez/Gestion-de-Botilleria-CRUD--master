<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Trabajador
 * @package App\Models
 * @version July 3, 2019, 9:28 pm UTC
 *
 * @property integer ID_Trabajador
 * @property string Nombre
 * @property string Apellido_Paterno
 * @property string Apellido_Materno
 * @property string Direccion
 * @property integer Telefono
 * @property string Correo
 */
class Trabajador extends Model
{
    use SoftDeletes;

    public $table = 'trabajadors';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'ID_Trabajador',
        'Nombre',
        'Apellido_Paterno',
        'Apellido_Materno',
        'Direccion',
        'Telefono',
        'Correo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID_Trabajador' => 'integer',
        'Nombre' => 'string',
        'Apellido_Paterno' => 'string',
        'Apellido_Materno' => 'string',
        'Direccion' => 'string',
        'Telefono' => 'integer',
        'Correo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
