<?php

namespace App\Repositories;

use App\Models\Trabajador;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TrabajadorRepository
 * @package App\Repositories
 * @version July 3, 2019, 9:28 pm UTC
 *
 * @method Trabajador findWithoutFail($id, $columns = ['*'])
 * @method Trabajador find($id, $columns = ['*'])
 * @method Trabajador first($columns = ['*'])
*/
class TrabajadorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ID_Trabajador',
        'Nombre',
        'Apellido_Paterno',
        'Apellido_Materno',
        'Direccion',
        'Telefono',
        'Correo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Trabajador::class;
    }
}
