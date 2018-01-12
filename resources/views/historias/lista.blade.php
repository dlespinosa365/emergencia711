{!! Form::model($historia, ['route' => ['historias-data.update', $historia->id], 'method'=>'PUT']) !!}

<div class="box box-widget collapsed-box">
    <div class="box-header with-border">
        <div class="user-block">
            <img class="img-circle" src="{{ asset('img/user_default.png') }}" alt="User Image">
            <span class="username"><a href="#">LLamado {{ $historia->numero_llamado }}
                    de {{ $historia->create_at }} | Clave {{ $historia->clave_salida }}</a></span>
            <span class="description">Doctor {{ $historia->medico->fullname }}</span>
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
        @include('historias.form')
    </div>

    <div class="box-footer text-center">

        <button type="submit" class="btn btn-primary margin pull-right"><i class="fa fa-save"></i> Actualizar Historia
        </button>
        {!! Form::open(['route' => ['historias-data.destroy',$historia->id], 'method'=>'DELETE']) !!}

        <button type="submit" class="btn btn-danger margin pull-right"><i
                    class="fa fa-close"></i>Eliminar
        </button>
        {!! Form::close() !!}

    </div>
</div>
{!! Form::close() !!}

<!-- /.box-footer -->
