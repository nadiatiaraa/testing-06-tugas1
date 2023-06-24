<?php $__env->startSection('content'); ?>
    <div class="d-flex flex-row m-5 justify-content-center">

        <div class="pt-4 pb-2">
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
                class="img-thumbnail bg-none border-0 w-75"
                src="<?php echo e(asset('assets/img_about.svg')); ?>"
                alt="Avatar"
                />
            </div>

        </div>
        <div class="pt-4 pb-2">
            <h2 class="text-primary font-weight-bold">E-VITS</h2>
            <p>
                E-VITS merupakan layanan 24 jam 
                untuk penerimaan tamu kunjugan pada Kampus ITS.
                Dengan adanya E-VITS ini diharapkan dapat memudahkan 
                pengunjung maupun administrator, sehingga tamu undangan dapat 
                terdata dengan baik.
            </p>
              <?php if(str_contains(url()->previous(), 'user')): ?>
              <a class="btn btn-primary bg-primary"  href="/user/kunjungans/create">Visit Now!</a>
              <?php elseif(str_contains(url()->previous(), 'admin')): ?>
              <a class="btn btn-primary bg-primary"  href="/admin/kunjungans/create">Visit Now!</a>
              <?php else: ?>
              <a class="btn btn-primary bg-primary"  href="/">Visit Now!</a>
              <?php endif; ?>
        </div>
    </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nadiatiara/visit-its/resources/views/about.blade.php ENDPATH**/ ?>