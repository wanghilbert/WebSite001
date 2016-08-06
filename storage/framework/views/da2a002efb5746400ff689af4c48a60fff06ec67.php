<?php $__env->startSection('section'); ?>
	
	<?php echo $__env->make('contents.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('contents.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row" id="classify">
		<?php echo $__env->make('contents.classify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo $__env->make('contents.hotshow', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.website', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>