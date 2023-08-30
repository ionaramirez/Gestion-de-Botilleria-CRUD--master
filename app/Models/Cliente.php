<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cliente
 * @package App\Models
 * @version July 3, 2019, 9:27 pm UTC
 *
 * @property integer ID_Cliente
 * @property string Nombre
 * @property string Apellido_Paterno
 * @property string Apellido_Materno
 * @property string Direccion
 * @property integer Telefono
 * @property string Correo
 */
class Cliente extends Model
{
    use SoftDeletes;

    public $table = 'clientes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'ID_Cliente',
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
        'ID_Cliente' => 'integer',
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
