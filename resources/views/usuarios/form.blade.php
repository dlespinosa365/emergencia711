{!! Form::token() !!}
<div class="row">
    <div class="col-md-4">
        <h3>Datos</h3>
        <div class="form-group">
            {!! Form::label('name', 'Nombres')!!}
            {!! Form::text('name',  old('name') ,['required','class' => 'form-control', 'placeholder'=>'Nombre']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('lastname', 'Apellidos')!!}
            {!! Form::text('lastname',  old('lastname') ,['required','class' => 'form-control', 'placeholder'=>'Apellidos']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Correo')!!}
            {!! Form::email('email',  old('email') ,['required','class' => 'form-control', 'placeholder'=>'Correo']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('active', 'Activo')!!}
            {!! Form::checkbox('active', 1 ,old('active')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('role', 'Rol')!!}
            {!! Form::select('role', config('data.roles') ,old('role') ,['required','class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Contraseña')!!}
            {!! Form::text('password',  null ,['class' => 'form-control', 'placeholder'=>'Contraseña']) !!}
        </div>


    </div>
</div>


