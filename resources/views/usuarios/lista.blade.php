<div class="box box-widget collapsed-box">
    <div class="box-header with-border">
        <div class="user-block">
            <img class="img-circle" src="{{ asset('img/user_default.png') }}" alt="User Image">
            <span class="username"><a href="#">{{ $user->full_name }}</a></span>
            <span class="description">Ingreso {{ $user->create_at }}</span>
        </div>
        <!-- /.user-block -->
        <div class="box-tools">

            <button type="button" class="btn btn-primary" data-widget="collapse"><i
                        class="fa fa-plus"> </i>
            </button>

        </div>
        <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body" style="display: none;">
        <div class="row">
            <div class="col-md-12">
                <h3>Datos Personales</h3>
                <table class="table table-hover">
                    <tr>
                        <td><b>Telefono</b></td>
                        <td>{{ $user->phone }}</td>
                    </tr>
                    <tr>
                        <td><b>ROL</b></td>
                        <td>{{ $user->role }}</td>
                    </tr>
                    <tr>
                        <td><b>Activo</b></td>
                        <td>{{ $user->active }}</td>
                    </tr>
                    <tr>
                        <td><b>Correo</b></td>
                        <td>{{ $user->email }}</td>
                    </tr>

                </table>
            </div>


        </div>
    </div>

    <div class="box-footer text-center">
        {!! Form::open(['route' => ['usuarios.destroy',$user->id], 'method'=>'DELETE']) !!}
        {!! Form::token() !!}
        <button type="submit" class="btn btn-danger margin pull-right"><i
                    class="fa fa-close"></i> Eliminar
        </button>
        {!! Form::close() !!}
        <a href="{{ route('usuarios.edit',[$user->id]) }}" class="btn btn-success margin pull-right"><i
                    class="fa fa-pencil"></i> Editar Datos del Usuario</a>


    </div>
</div>


<!-- /.box-footer -->
