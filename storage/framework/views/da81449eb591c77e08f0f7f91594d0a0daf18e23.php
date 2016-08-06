

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo e($res->title); ?></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/res/edit/update/<?php echo e($res->id); ?>">
                        <?php echo csrf_field(); ?>

                                             
                        <div class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
                             <label class="col-md-4 control-label">Title</label>
 
                             <div class="col-md-6">
                                 <input type="title" class="form-control" name="title" value="<?php echo e($res->title); ?>">
                             </div>
                         </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="address" value="<?php echo e($res->address); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Content</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="content" value="<?php echo e($res->content); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Update
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