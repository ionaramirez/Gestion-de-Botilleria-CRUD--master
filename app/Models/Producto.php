<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Producto
 * @package App\Models
 * @version July 3, 2019, 9:14 pm UTC
 *
 * @property integer ID_Producto
 * @property string Nombre_Producto
 * @property string Descripcion
 * @property integer Cantidad
 */
class Producto extends Model
{
    use SoftDeletes;

    public $table = 'productos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'ID_Producto',
        'Nombre_Producto',
        'Descripcion',
        'Cantidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID_Producto' => 'integer',
        'Nombre_Producto' => 'string',
        'Descripcion' => 'string',
        'Cantidad' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
