<?php $__env->startSection('contenido'); ?>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva Categoría</h3>
			<?php if(count($errors) > 0): ?>
				<div class="alert alert-danger">
					<ul>
						<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li><?php echo e($error); ?></li>	
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
				</div>
			<?php endif; ?>

			<?php echo Form::open(array('url' => 'almacen/categoria', 'method' => 'POST', 'autocomplete' => 'off')); ?>

			<?php echo e(Form::token()); ?>

			<div class="form-group">
				<label for="name">Nombre</label>
				<input type="text" name="nombre" class="form-control" placeholder="Nombre..." value="<?php echo e(old('nombre')); ?>">	
			</div>
				
			<div class="form-group">
				<label for="descripcion">Descripción</label>
				<input type="text" name="descripcion" class="form-control" placeholder="Descripción..." value="<?php echo e(old('descripcion')); ?>">	
			</div>

			<div class="form-group">
				<button type="sumit" class="btn btn-primary">Guardar</button>
				<button type="reset" class="btn btn-danger">Cancelar</button>
			</div>
			<?php echo Form::close(); ?>

		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>