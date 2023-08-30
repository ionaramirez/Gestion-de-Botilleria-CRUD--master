<?php

namespace App\Repositories;

use App\Models\Cliente;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ClienteRepository
 * @package App\Repositories
 * @version July 3, 2019, 9:27 pm UTC
 *
 * @method Cliente findWithoutFail($id, $columns = ['*'])
 * @method Cliente find($id, $columns = ['*'])
 * @method Cliente first($columns = ['*'])
*/
class ClienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ID_Cliente',
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
        return Cliente::class;
    }
}
