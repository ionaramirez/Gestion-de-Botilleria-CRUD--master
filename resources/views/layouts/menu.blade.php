<li class="{{ Request::is('ponentes*') ? 'active' : '' }}">
    <a href="{!! route('ponentes.index') !!}"><i class="fa fa-edit"></i><span>Ponentes</span></a>
</li>

<li class="{{ Request::is('productos*') ? 'active' : '' }}">
    <a href="{!! route('productos.index') !!}"><i class="fa fa-edit"></i><span>Productos</span></a>
</li>

<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{!! route('clientes.index') !!}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('trabajadors*') ? 'active' : '' }}">
    <a href="{!! route('trabajadors.index') !!}"><i class="fa fa-edit"></i><span>Trabajadors</span></a>
</li>

