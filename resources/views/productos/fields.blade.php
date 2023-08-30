<!-- Id Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ID_Producto', 'Id Producto:') !!}
    {!! Form::text('ID_Producto', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nombre_Producto', 'Nombre Producto:') !!}
    {!! Form::text('Nombre_Producto', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Descripcion', 'Descripcion:') !!}
    {!! Form::textarea('Descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Cantidad', 'Cantidad:') !!}
    {!! Form::text('Cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('productos.index') !!}" class="btn btn-default">Cancel</a>
</div>
