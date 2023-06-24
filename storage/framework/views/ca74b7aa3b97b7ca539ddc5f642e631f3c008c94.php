<?php $__env->startSection('content'); ?>
<main class="signup-form my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Register User</h3>
                    <div class="card-body">
                        <form action="<?php echo e(route('register.custom')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-3">

                                <input type="text" placeholder="Nama Lengkap" id="name" class="form-control" name="name"
                                    required autofocus>
                                <?php if($errors->has('name')): ?>
                                <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                <?php if($errors->has('email')): ?>
                                <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                <?php if($errors->has('password')): ?>
                                <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group mb-3">

                                <input type="text" placeholder="NIK" id="nik" class="form-control" name="nik" required>
                                <?php if($errors->has('nik')): ?>
                                <span class="text-danger"><?php echo e($errors->first('nik')); ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group mb-3">
                                <input type="date" placeholder="2001-10-10" id="tanggal_lahir" class="form-control" name="tanggal_lahir" required>
                                <?php if($errors->has('tanggal_lahir')): ?>
                                <span class="text-danger"><?php echo e($errors->first('tanggal_lahir')); ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Instansi" id="instansi" class="form-control" name="instansi" required>
                                <?php if($errors->has('instansi')): ?>
                                <span class="text-danger"><?php echo e($errors->first('instansi')); ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Jabatan" id="jabatan" class="form-control" name="jabatan" required>
                                <?php if($errors->has('jabatan')): ?>
                                <span class="text-danger"><?php echo e($errors->first('jabatan')); ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark bg-primary btn-block mb-2">Daftar</button>
                            </div>
                            <div class="d-grid mx-auto">
                                <a href="<?php echo e(route('login')); ?>" class="btn btn-dark btn-block">Sudah punya akun</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nadiatiara/visit-its/resources/views/auth/registration.blade.php ENDPATH**/ ?>