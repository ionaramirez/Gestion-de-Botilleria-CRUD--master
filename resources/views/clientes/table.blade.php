<table class="table table-responsive" id="clientes-table">
    <thead>
        <tr>
            <th>Id Cliente</th>
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
    @foreach($clientes as $cliente)
        <tr>
            <td>{!! $cliente->ID_Cliente !!}</td>
            <td>{!! $cliente->Nombre !!}</td>
            <td>{!! $cliente->Apellido_Paterno !!}</td>
            <td>{!! $cliente->Apellido_Materno !!}</td>
            <td>{!! $cliente->Direccion !!}</td>
            <td>{!! $cliente->Telefono !!}</td>
            <td>{!! $cliente->Correo !!}</td>
            <td>
                {!! Form::open(['route' => ['clientes.destroy', $cliente->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('clientes.show', [$cliente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('clientes.edit', [$cliente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>