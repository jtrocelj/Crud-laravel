<div class="form-group">
    {!! Form::label('name', 'Nombre del Producto') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('short', 'Descripción breve del Producto') !!}
    {!! Form::text('short', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Descripción del Producto') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">

    {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>