<?php $__env->startSection('content'); ?>
    <div class="row pt-4 pb-2">
        <div class="d-flex col-lg-12 margin-tb align-items-center">
            <div class="mr-2 pull-left">
                <h2>List Kunjungan </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('user.kunjungans.create')); ?>" title="Create a kunjungan"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Kegiatan</th>
            <th width="20px">Durasi (Menit)</th>
            <th>Instansi Asal</th>
            <th>Status</th>
            <th>Tanggal Kunjungan</th>
            <th width="150px">Action</th>
        </tr>
        <?php $__currentLoopData = $kunjungans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kunjungan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e(++$i); ?></td>
                <td><?php echo e($kunjungan->nama_tamu); ?></td>
                <td><?php echo e($kunjungan->nama_kegiatan); ?></td>
                <td><?php echo e($kunjungan->durasi_tamu); ?></td>
                <td><?php echo e($kunjungan->instansi_tamu); ?></td>
                <td>
                    <?php if($kunjungan->konfirmasi_tamu == 0): ?>
                        <span class="badge bg-warning text-black text-center">
                            Belum terkonfirmasi
                        </span>
                    <?php elseif($kunjungan->konfirmasi_tamu == 1): ?>
                    <span class="badge bg-success text-black text-center">
                            Terkonfirmasi
                    </span>
                    <?php else: ?>
                    <span class="badge bg-danger text-black text-center">
                            Ditolak
                    </span>
                    <?php endif; ?>
            </td>
                <td><?php echo e(date('j F, Y', strtotime( $kunjungan->waktu_tamu ))); ?></td>
                <td>
                    <form action="<?php echo e(route('user.kunjungans.destroy', $kunjungan->id)); ?>" method="POST">

                        <a href="<?php echo e(route('user.kunjungans.show', $kunjungan->id)); ?>" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="<?php echo e(route('user.kunjungans.edit', $kunjungan->id)); ?>">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo e($kunjungans->links()); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nadiatiara/visit-its/resources/views/User/kunjungans/index.blade.php ENDPATH**/ ?>