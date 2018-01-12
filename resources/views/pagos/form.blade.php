{!! Form::token() !!}
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('cliente_id', 'Socio *')!!}
        {!! Form::select('cliente_id',  $clientes ,old('cliente'),['required','class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('monto', 'Monto *')!!}
        {!! Form::number('monto',  null ,['step'=>1,'required','class' => 'form-control', 'placeholder'=>'Monto']) !!}
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('cobrado', 'Cobrado por *')!!}
        {!! Form::text('cobrado',  old('cobrado') ,['required','class' => 'form-control', 'placeholder'=>'Cobrado por']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('tipo', 'Tipo *')!!}
        {!! Form::select('tipo',  config('data.tipos_pago'),old('tipo') ,['required','class' => 'form-control']) !!}
    </div>
</div>

