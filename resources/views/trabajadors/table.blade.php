<table class="table table-responsive" id="trabajadors-table">
    <thead>
        <tr>
            <th>Id Trabajador</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Correo</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($trabajadors as $trabajador)
        <tr>
            <td>{!! $trabajador->ID_Trabajador !!}</td>
            <td>{!! $trabajador->Nombre !!}</td>
            <td>{!! $trabajador->Apellido_Paterno !!}</td>
            <td>{!! $trabajador->Apellido_Materno !!}</td>
            <td>{!! $trabajador->Direccion !!}</td>
            <td>{!! $trabajador->Telefono !!}</td>
            <td>{!! $trabajador->Correo !!}</td>
            <td>
                {!! Form::open(['route' => ['trabajadors.destroy', $trabajador->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('trabajadors.show', [$trabajador->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('trabajadors.edit', [$trabajador->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>