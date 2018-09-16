@extends("admin.template")

@section("content")

<section class="content-header">
    <h1>
        Carreras <small>Registro</small>
    </h1>

</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-solid">
    
        <div class="box-body">
            <div class="row">
                <div class="col-xs-12">
                    {!! Form::open(['route' => 'carreras.store']) !!}
                    	<div class="form-group">
                            {!! Form::label('carrera', 'Carrera:');!!}
                            {!! Form::text('carrera', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la Carrera']); !!}
                        </div>
                        <div class="form-group">
                        	{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}
                        </div>
    
					{!! Form::close() !!}
 
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        
    </div>
    <!-- /.box -->
</section>
<!-- /.content -->

@endsection