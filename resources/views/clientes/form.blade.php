{!! Form::token() !!}
<div class="col-md-4">
    <h3>Datos Personales</h3>
    <div class="form-group">
        {!! Form::label('sexo', 'Sexo *')!!}
        {!! Form::select('sexo', config('data.sexo') , old('sexo'),['required','class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('nombres', 'Nombres *')!!}
        {!! Form::text('nombres',  old('nombres') ,['required','class' => 'form-control', 'placeholder'=>'Nombre']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('apellidos', 'Apellidos *')!!}
        {!! Form::text('apellidos',  old('apellidos') ,['required','class' => 'form-control', 'placeholder'=>'Apellidos']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email *')!!}
        {!! Form::email('email',  old('email') ,['required','class' => 'form-control', 'placeholder'=>'Email']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cedula', 'Cedula *')!!}
        {!! Form::number('cedula',  old('cedula') ,['required','class' => 'form-control', 'placeholder'=>'Cedula solo numeros']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('fecha_nac', 'Fecha de Nacimiento *')!!}
        {!! Form::date('fecha_nac',  old('fecha_nac') ,['required','class' => 'form-control']) !!}
    </div>
</div>
<div class="col-md-4">
    <h3>Localización</h3>
    <div class="form-group">
        {!! Form::label('solar', 'Solar *')!!}
        {!! Form::number('solar',  old('solar') ,['required','class' => 'form-control', 'placeholder'=>'Solar']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('manzana', 'Manzana *')!!}
        {!! Form::number('manzana',  old('manzana') ,['required','class' => 'form-control', 'placeholder'=>'Manzana']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('calles', 'Calle *')!!}
        {!! Form::text('calles',  old('calles') ,['required','class' => 'form-control', 'placeholder'=>'Calle']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('entrecalles', 'Entre Calles')!!}
        {!! Form::text('entrecalles',  old('entrecalles') ,['class' => 'form-control', 'placeholder'=>'Entre Calles']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('balneario', 'Balniario *')!!}
        {!! Form::select('balneario', config('data.balniarios'), old('balneario') ,['required','class' => 'form-control', 'data-placeholder'=>' Seleccione un Balniario']) !!}
    </div>
</div>
<div class="col-md-4">
    <h3>Otros</h3>
    <div class="form-group">
        {!! Form::label('telefono', 'Telefono')!!}
        {!! Form::number('telefono',  old('telefono') ,['class' => 'form-control', 'placeholder'=>'Telefono']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('celular', 'Celular *')!!}
        {!! Form::number('celular',  old('celular') ,['required','class' => 'form-control', 'placeholder'=>'Celular']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('emergencia', 'Socio de *')!!}
        {!! Form::select('emergencia', config('data.emergencias'), old('emergencia') ,['required','class' => 'form-control', 'data-placeholder'=>'Seleccione una Emergencia']) !!}
    </div>

</div>
