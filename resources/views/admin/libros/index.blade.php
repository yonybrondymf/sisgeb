@extends("admin.template")

@section("content")

	<section class="content-header">
	    <h1>
	        Libros <small> Listado</small>
	    </h1>

	</section>

	<!-- Main content -->
	<section class="content">
	    <!-- Default box -->
	    <div class="box box-solid">
	    
	        <div class="box-body">
	            <div class="row">
	                <div class="col-md-12">
	                    <a href="{{ url('libros/create') }}" class="btn btn-primary btn-flat"><i class="fa fa-plus"> Agregar Libro</i></a>
	                    <hr>
	                    <div class="table-responsive">
	                        <table class="table table-bordered table-hover" >
	                            <thead>
	                                <tr>
	                                    <th>#</th>
	                                    <th>Codigo</th>
	                                    <th>Titulo</th>
	                                    <th>Ejemplares</th>
	                                    <th>Fecha Registro</th>
	                                    <th>Opciones</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                @foreach($libros as $l)
	                                    <tr>
	                                        <td>{{ $l->id }}</td>
	                                        <td>{{ $l->codigo }}</td>
	                                        <td>{{ $l->titulo }}</td>
	                                        <td>{{ $l->ejemplares }}</td>
	                                        <td>{{ $l->fecregistro }}</td>
	                                        <td>
	                                            <div class="btn-group">
	                                                
	                                                <a href="{{ url("libros/{$l->id}/edit") }}" class="btn btn-warning btn-flat"><span class="fa fa-pencil"></span></a>
	                                                <a href="{{ url("libros/{$l->id}")}}" data-token="{{ csrf_token() }}" class="btn btn-danger btn-flat btn-delete"><span class="fa fa-times"></span></a>
	                                            </div>
	                                            
	                                        </td>

	                                    </tr>
	                                @endforeach
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- /.box-body -->
	        
	    </div>
	    <!-- /.box -->
	</section>
	<!-- /.content -->


	<div class="modal fade" id="modal-default">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Informacion de la Empresa</h4>
	      </div>
	      <div class="modal-body">
	        
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
	        <button type="button" class="btn btn-primary btn-print"><span class="fa fa-print"> </span>Imprimir</button>
	      </div>
	    </div>
	    <!-- /.modal-content -->
	  </div>
	  <!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

@endsection