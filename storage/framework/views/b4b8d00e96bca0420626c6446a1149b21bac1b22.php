


<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
        	<!-- TO DO: Add User Manully -->

            <!-- Show User List -->
            <?php if(count($request) > 0): ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Users List
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Key</th>
                                <th>Value</th>
                            </thead>
                            <tbody>
                                <?php foreach($request as $key=>$value): ?>
                                    <tr>
                                        <td class="table-text"><div><?php echo e($key); ?></div></td>
                                        <td class="table-text"><div><?php echo e($value); ?></div></td>
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