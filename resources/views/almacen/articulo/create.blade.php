@extends('layouts.admin')

@section('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Artículo</h3>
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

			{!! Form::open(array('url' => 'almacen/articulo', 'method' => 'POST', 'autocomplete' => 'off', 'files' => 'true')) !!}
			{{ Form::token() }}

	<div class="row">
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" required class="form-control" placeholder="Nombre..." value="{{ old('nombre')}}">	
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="idcategoria">Categoría</label>
				<select name="idcategoria" class="form-control">
					@foreach ($categorias as $cat)
						<option value="{{ $cat->idcategoria}}">{{ $cat->nombre}}</option>
					@endforeach
				</select>
				input
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="codigo">Código</label>
				<input type="text" name="codigo" required class="form-control" placeholder="Código del artículo..." value="{{ old('codigo')}}">	
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="stock">Stock</label>
				<input type="text" name="stock" required class="form-control" placeholder="Stock del artículo..." value="{{ old('stock')}}">	
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="descripcion">Descripción</label>
				<input type="text" name="descripcion" required class="form-control" placeholder="Descripción del artículo..." value="{{ old('descripcion')}}">	
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="imagen">Imagen</label>
				<input type="file" name="imagen" class="form-control" >	
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