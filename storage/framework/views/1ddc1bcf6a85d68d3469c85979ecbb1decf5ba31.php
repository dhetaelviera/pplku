<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('alamat') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                 <input type="text" class="form-control" name="alamat" value="<?php echo e(old('alamat')); ?>">

                               <?php if($errors->has('alamat')): ?>
                                 <span class="help-block">
                                     <strong><?php echo e($errors->first('alamat')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div> 

                        <div class="form-group<?php echo e($errors->has('kecamatan') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Kecamatan</label>

                            <div class="col-md-6">
                                 <input type="text" class="form-control" name="kecamatan" value="<?php echo e(old('kecamatan')); ?>">

                               <?php if($errors->has('kecamatan')): ?>
                                 <span class="help-block">
                                     <strong><?php echo e($errors->first('kecamatan')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div> 

                        <div class="form-group<?php echo e($errors->has('kabupaten') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Kabupaten</label>

                            <div class="col-md-6">
                                 <input type="text" class="form-control" name="kabupaten" value="<?php echo e(old('kabupaten')); ?>">

                               <?php if($errors->has('kabupaten')): ?>
                                 <span class="help-block">
                                     <strong><?php echo e($errors->first('kabupaten')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>  

                        <div class="form-group<?php echo e($errors->has('provinsi') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Provinsi</label>

                            <div class="col-md-6">
                                 <input type="text" class="form-control" name="provinsi" value="<?php echo e(old('provinsi')); ?>">

                               <?php if($errors->has('provinsi')): ?>
                                 <span class="help-block">
                                     <strong><?php echo e($errors->first('provinsi')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('noTelepon') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">no. Telepon</label>

                            <div class="col-md-6">
                                 <input type="text" class="form-control" name="noTelepon" value="<?php echo e(old('noTelepon')); ?>">

                               <?php if($errors->has('noTelepon')): ?>
                                 <span class="help-block">
                                     <strong><?php echo e($errors->first('noTelepon')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div> 



                        <div class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                 <input type="text" class="form-control" name="username" value="<?php echo e(old('username')); ?>">

                               <?php if($errors->has('username')): ?>
                                 <span class="help-block">
                                     <strong><?php echo e($errors->first('username')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div> 

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has ('sebagai') ? 'has-error':''); ?>">
                            <label class="col-md-4 control-label">Sebagai</label>
                        
                        <div class="col-md-6">
                            <select name="sebagai" class="form-control">
                                <option value="1">agen</option>
                                <option value="2">pengusaha</option>
                            </select>
                        </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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