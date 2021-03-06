@extends("admin.template")

@section("content")

<section class="content-header">
    <h1>
        Libros <small>Editar</small>
    </h1>

</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-solid">
    
        <div class="box-body">
            <div class="row">
                <div class="col-xs-12">
                    {!! Form::open(['route' => ['libros.update', $libro->id],'method'=> 'PUT']) !!}
                    	<div class="form-group">
                            {!! Form::label('codigo', 'Codigo:');!!}
                            {!! Form::text('codigo', $libro->codigo, ['class' => 'form-control', 'placeholder' => 'Codigo del Libro']); !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('titulo', 'Titulo:');!!}
                            {!! Form::text('titulo', $libro->titulo, ['class' => 'form-control', 'placeholder' => 'Titulo del Libro']); !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('ejemplares', 'Ejemplares:');!!}
                            {!! Form::text('ejemplares', $libro->ejemplares, ['class' => 'form-control', 'placeholder' => 'Ejemplares del Libro']); !!}
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