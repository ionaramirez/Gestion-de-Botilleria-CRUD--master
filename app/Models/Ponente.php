<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ponente
 * @package App\Models
 * @version July 2, 2019, 2:27 am UTC
 *
 * @property string nombre
 * @property string pais
 * @property string foto
 */
class Ponente extends Model
{
    use SoftDeletes;

    public $table = 'ponentes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'pais',
        'foto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'pais' => 'string',
        'foto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
