@extends('layouts.admin')

@section('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Artículo: {{$articulo->name}}</h3>
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>	
						@endforeach
					</ul>
				</div>
			@endif
		</div>
	</div>

			{!! Form::model($articulo, ['method' => 'PATCH', 'route' => ['articulo.update', $articulo->idarticulo], 'files' => 'true']) !!}
			{{ Form::token() }}
				<driv class="row">
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" required class="form-control" value="{{ $articulo->nombre}}">	
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="idcategoria">Categoría</label>
				<select name="idcategoria" class="form-control">
					@foreach ($categorias as $cat)
						@if ($cat->idcategoria == $articulo->idcategoria)
							<option value="{{ $cat->idcategoria}}" selected>{{ $cat->nombre}}</option>	
						@else
							<option value="{{ $cat->idcategoria}}">{{ $cat->nombre}}</option>					
						@endif
						
					@endforeach
				</select>
				input
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="codigo">Código</label>
				<input type="text" name="codigo" required class="form-control" value="{{ $articulo->codigo}}">	
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="stock">Stock</label>
				<input type="text" name="stock" required class="form-control" value="{{ $articulo->stock}}">	
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="descripcion">Descripción</label>
				<input type="text" name="descripcion" required class="form-control" value="{{ $articulo->descripcion}}" placeholder="Descripción del artículo...">	
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="imagen">Imagen</label>
				<input type="file" name="imagen" class="form-control" >	
				@if (($articulo->imagen)!="")
					<img class="img-thumbnail" width="50%" src="{{ asset('imagenes/articulos/'.$articulo->imagen) }}" alt="">
				@endif
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<button type="sumit" class="btn btn-primary">Guardar</button>
				<button type="reset" class="btn btn-danger">Cancelar</button>
			</div>
		</div>
	</div>	
			{!!Form::close()!!}
		
@endsection