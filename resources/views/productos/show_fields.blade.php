<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $producto->id !!}</p>
</div>

<!-- Id Producto Field -->
<div class="form-group">
    {!! Form::label('ID_Producto', 'Id Producto:') !!}
    <p>{!! $producto->ID_Producto !!}</p>
</div>

<!-- Nombre Producto Field -->
<div class="form-group">
    {!! Form::label('Nombre_Producto', 'Nombre Producto:') !!}
    <p>{!! $producto->Nombre_Producto !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('Descripcion', 'Descripcion:') !!}
    <p>{!! $producto->Descripcion !!}</p>
</div>

<!-- Cantidad Field -->
<div class="form-group">
    {!! Form::label('Cantidad', 'Cantidad:') !!}
    <p>{!! $producto->Cantidad !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $producto->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $producto->updated_at !!}</p>
</div>

