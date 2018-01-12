<div class="box box-widget collapsed-box">
    <div class="box-header with-border">
        <div class="user-block">
            <img class="img-circle" src="{{ asset('img/user_default.png') }}" alt="User Image">
            <span class="username"><a href="#">{{ $pago->create_at }} | {{ $pago->cliente->full_name }}</a></span>
            <span class="description">Cobrado por {{ strtoupper($pago->cobrado) }} </span>
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
                <!-- post text -->
                <p><label class="label label-info">Cedula</label> {{ $pago->cliente->cedula }}</p>
                <p><label class="label label-info">Monto</label> $ {{ number_format($pago->monto,2) }}</p>
                <p><label class="label label-info">Tipo</label> {{ $pago->tipo }}</p>
            </div>
        </div>
    </div>

    <div class="box-footer text-center">

        <a href="{{ route('pagos-data.edit',[$pago->id]) }}" class="btn btn-success pull-right margin"><i
                    class="fa fa-pencil"></i>Editar Datos</a>


        {!! Form::open(['route' => ['pagos-data.destroy',$pago->id], 'method'=>'DELETE']) !!}
        {!! Form::token() !!}
        <button type="submit" class="btn btn-danger pull-right margin"><i
                    class="fa fa-close"></i>Eliminar
        </button>
        {!! Form::close() !!}
    </div>
</div>


<!-- /.box-footer -->
