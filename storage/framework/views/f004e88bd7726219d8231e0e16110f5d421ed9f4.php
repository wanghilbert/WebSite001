


<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
        	<!-- TO DO: Add User Manully -->

            <!-- Show User List -->
            <?php if(count($users) > 0): ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Users List
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>ID</th>
                                <th>User</th>
                                <th>AccountType</th>
                                <th>Permission</th>
                                <th>Delete</th>
                                <th>Permission Edit</th>
                                <th>Password Edit</th>
                            </thead>
                            <tbody>
                                <?php foreach($users as $user): ?>
                                    <tr>
                                        <td class="table-text"><div><?php echo e($user->id); ?></div></td>
                                        <td class="table-text"><div><?php echo e($user->name); ?></div></td>
                                        <td class="table-text"><div><?php echo e($user->type); ?></div></td>
                                        <td class="table-text"><div><?php echo e($user->permission); ?></div></td>
                                        <td>
                                            <form action="/user/delete/<?php echo e($user->id); ?>" method="POST">
                                                <?php echo e(csrf_field()); ?>

                                                <?php echo e(method_field('DELETE')); ?>


                                                <button type="submit" id="delete-user-<?php echo e($user->id); ?>" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="/user/edit/permission/<?php echo e($user->id); ?>" method="POST">
                                                <?php echo e(csrf_field()); ?>

                                                <div>
                                                    <select name="PermType" class="form-control">
                                                        <option value="Normal">Normal</option>
                                                        <option value="Admin">Admin</option>
                                                        <option value="Super">Super</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <button type="submit" id="permission-user-<?php echo e($user->id); ?>" class="btn btn-danger">
                                                        <i class="fa fa-btn fa-trash"></i>Confirm
                                                    </button>                                                    
                                                </div>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="/user/edit/pwd/<?php echo e($user->id); ?>" method="POST">
                                                <?php echo e(csrf_field()); ?>

                                                <!-- <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>"> -->

                                                    <div>
                                                        <input type="password" class="form-control" name="password">

                                                        <?php if($errors->has('password')): ?>
                                                            <span class="help-block">
                                                                <strong><?php echo e($errors->first('password')); ?></strong>
                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                <!-- </div>  -->
                                                <div>
                                                    <button type="submit" id="password-user-<?php echo e($user->id); ?>" class="btn btn-danger">
                                                        <i class="fa fa-btn fa-trash"></i>Password
                                                    </button>                                                    
                                                </div>                   
                                            </form>
                                        </td>

                                        <!-- TO DO: User Delete Button -->

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php else: ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Users List
                    </div>
                    <div class="panel-body">
						<strong>User Table is Null!</strong>
                    </div>                    
                </div>            	
            <?php endif; ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>