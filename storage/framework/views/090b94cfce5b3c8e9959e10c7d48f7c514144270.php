<?php $__env->startSection('content'); ?>
        <!-- 'user_id'=>$i,
            'admin_id'=>$i,
            'jenis_tamu'=> implode(",", $faker->randomElements(['Event', 'Undangan', 'Personal'], 1)),
            'nama_tamu'=> $faker->name,
            'instansi_tamu'=>implode(",", $faker->randomElements(['Pemerintah','ITS', 'UB', 'UNAIR'], 1)),
            'nama_kegiatan'=>implode(",", $faker->randomElements(['Seminar','Kunjungan', 'Akreditasi'], 1)).' '.implode(",", $faker->randomElements(['Pemerintah','Sosialisasi','Prestasi', 'Olahraga', 'Akademik'], 1)).' '.implode(",", $faker->randomElements(['Pemerintah','ITS', 'UB', 'UNAIR'], 1)).' '.$faker->city ,
            'waktu_tamu'=>$faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
            'durasi_tamu'=>random_int(1,10)*30,
            'konfirmasi_tamu'=>0,
            'file_pendukung'=>'' -->

    <div class=" card border-0 mt-5 d-flex flex-row">     

     <div class="row pt-4 pb-2">
        <div class="col-lg-12 margin-tb">
         <div
              class="
                d-flex
                justify-content-center
                align-items-center
                flex-column
                pull-left
              "
            >
              <img
                class="img-thumbnail border-0 w-75"
                src="<?php echo e(asset('assets/avatar.svg')); ?>"
                alt="Avatar"
              />
              <h2 class="text-center py-2"><?php echo e($kunjungan->nama_tamu); ?></h2>
            </div>
        </div>
    </div>

    <div class="row p-4">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Tamu:</strong>
                <?php echo e($kunjungan->jenis_tamu); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Kegiatan:</strong>
                <?php echo e($kunjungan->nama_kegiatan); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Asal Instansi:</strong>
                <?php echo e($kunjungan->instansi_tamu); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Durasi:</strong>
                <?php echo e($kunjungan->durasi_tamu); ?> menit
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Waktu Pelaksanaan : </strong>
                <?php echo e(date('j F, Y', strtotime( $kunjungan->waktu_tamu ))); ?>

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>File pendukung :</strong>
                <?php if($kunjungan->file_pendukung !=null): ?>
                    <a href="<?php echo e($kunjungan->file_pendukung); ?>" class="btn btn-secondary">Download File</a>
                <?php else: ?>
                file tidak tersedia
                <?php endif; ?>
            </div>
        </div>
    </div>

    </div>   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nadiatiara/visit-its/resources/views/User/kunjungans/show.blade.php ENDPATH**/ ?>