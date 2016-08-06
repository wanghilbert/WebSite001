

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">

            <!-- Current Resources -->
            <?php if(count($resources) > 0): ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Resources List
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>ID</th>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Address</th>
                                <th>Delte</th>
                                <th>Edit</th>
                            </thead>
                            <tbody>
                                <?php foreach($resources as $resource): ?>
                                    <tr>
                                        <td class="table-text"><div><?php echo e($resource->id); ?></div></td>
                                        <td class="table-text"><div><?php echo e($resource->user->name); ?></div></td>
                                        <td class="table-text"><div><?php echo e($resource->title); ?></div></td>
                                        <td class="table-text"><div><?php echo e($resource->address); ?></div></td>
                                        <!-- Task Delete Button -->
                                        <td>
                                            <form action="/res/delete/<?php echo e($resource->id); ?>" method="POST">
                                                <?php echo e(csrf_field()); ?>

                                                <?php echo e(method_field('DELETE')); ?>


                                                <button type="submit" id="delete-resource-<?php echo e($resource->id); ?>" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="/res/edit/<?php echo e($resource->id); ?>" method="GET">
                                                <?php echo e(csrf_field()); ?>


                                                <button type="submit" id="edit-resource-<?php echo e($resource->id); ?>" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Edit
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php endif; ?>

            
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>