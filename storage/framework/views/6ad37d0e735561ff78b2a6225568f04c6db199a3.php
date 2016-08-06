

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">CheckBox</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/excel/export')); ?>">
                        <?php echo csrf_field(); ?>

                        <div>
                            <label>Cat001</label>
                        </div>
                        <div class="col-md-6">
                            <label>
                                <input type="checkbox" class="form-control" name="Cat001[]" value="Item001">
                                Item001
                            </label>
                        </div>

                        <div class="col-md-6">
                            <label>
                                <input type="checkbox" class="form-control" name="Cat001[]" value="Item002">
                                Item002                                
                            </label>
                        </div>

                        <div class="col-md-6">
                            <label>
                                <input type="checkbox" class="form-control" name="Cat001[]" value="Item003">
                                Item003                                
                            </label>
                        </div>

                        <div class="col-md-6">
                            <label>
                                <input type="checkbox" class="form-control" name="Cat001[]" value="Item004">
                                Item004                                
                            </label>
                        </div>
                        <div>
                            <label>Cat002</label>
                        </div>
                        <div class="col-md-6">
                            <label>
                                <input type="checkbox" class="form-control" name="Cat002[]" value="Item001">
                                Item001
                            </label>
                        </div>

                        <div class="col-md-6">
                            <label>
                                <input type="checkbox" class="form-control" name="Cat002[]" value="Item002">
                                Item002                                
                            </label>
                        </div>

                        <div class="col-md-6">
                            <label>
                                <input type="checkbox" class="form-control" name="Cat002[]" value="Item003">
                                Item003                                
                            </label>
                        </div>

                        <div class="col-md-6">
                            <label>
                                <input type="checkbox" class="form-control" name="Cat002[]" value="Item004">
                                Item004                                
                            </label>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Export
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>