<?php $__env->startSection('content'); ?>
    <div class="row pt-4 pb-2">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit kunjungan</h2>
            </div>
        </div>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('user.kunjungans.update', $kunjungan->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 d-none">
                <div class="form-group">
                    <strong>User id</strong>
                    <input type="text" name="user_id" class="form-control" value="<?php echo e($kunjungan->user_id); ?>" placeholder="Id User" readonly>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="nama_tamu" class="form-control" value="<?php echo e($kunjungan->nama_tamu); ?>" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Kunjungan :</strong>
                    <select class="form-control" name="jenis_tamu" value="<?php echo e($kunjungan->jenis_tamu); ?>" id="exampleFormControlSelect1"> 
                        <option value="Undangan" <?php echo e($kunjungan->jenis_tamu == "Undangan" ? 'selected' : ''); ?>>Undangan</option>
                        <option value="Event" <?php echo e($kunjungan->jenis_tamu == "Event" ? 'selected' : ''); ?>>Event</option>
                        <option value="Sosialisasi" <?php echo e($kunjungan->jenis_tamu == "Sosialisasi" ? 'selected' : ''); ?>>Sosialisasi</option>
                        <option value="Lainnya"<?php echo e($kunjungan->jenis_tamu == "Lainnya" ? 'selected' : ''); ?>>Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Instansi :</strong>
                    <input type="text" name="instansi_tamu" class="form-control" value="<?php echo e($kunjungan->instansi_tamu); ?>" placeholder="Instansi">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Kegiatan : </strong>
                    <input type="text" name="nama_kegiatan" class="form-control" value="<?php echo e($kunjungan->nama_kegiatan); ?>" placeholder="Nama Kegiatan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Waktu Pelaksanaan : </strong>
                    <input type="date" name="waktu_tamu" class="form-control" value="<?php echo e($kunjungan->waktu_tamu); ?>" placeholder="Waktu Pelaksanaan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Durasi (Menit)</strong>
                    <input type="number" name="durasi_tamu" class="form-control" value="<?php echo e($kunjungan->durasi_tamu); ?>" placeholder="Durasi">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>File Pendukung</strong>
                    <input type="file" name="file" class="form-control" value="<?php echo e(URL::asset($kunjungan->file_pendukung)); ?>" accept=".jpg,.jpeg,.bmp,.png,.gif,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip" >
                </div>
            </div>
            <div class="d-none col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Konfirmasi Kunjungan:</strong>
                    <input type="number" class="form-control" name="konfirmasi_tamu" value="<?php echo e($kunjungan->konfirmasi_tamu); ?>" id="exampleFormControlSelect1"> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary bg-primary w-100">Submit</button>
            </div>
     
            
        </div>

    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nadiatiara/visit-its/resources/views/User/kunjungans/edit.blade.php ENDPATH**/ ?>