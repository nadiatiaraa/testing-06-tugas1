<html>

<head>
    <title>  Visit ITS <?php echo $__env->yieldContent('title'); ?></title>
    <link rel="shortcut icon" href="<?php echo e(asset('assets/logo_evits.png')); ?>">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/app.css')); ?>">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
     
        .footer {
            width: 100%;
            color: white;
            text-align: center;
            padding: 12px 0;
          
        }
        .footer p{
          margin-bottom:0px;
        }

    </style>

</head>

<body>
    <?php $__env->startSection('sidebar'); ?>

    <?php echo $__env->yieldSection(); ?>
   
    <header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <button
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#navbarExample01"
              aria-controls="navbarExample01"
              aria-expanded="false"
              aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse px-5" id="navbarExample01">
        <div class="links">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <?php if(Auth::check()): ?>
              <a class="nav-link" aria-current="page" href="<?php echo e(route('user.kunjungans.index')); ?>">Home</a>
              <?php elseif(session()->has('LoggedAdmin')): ?>
              <a class="nav-link" aria-current="page" href="<?php echo e(route('admin.kunjungans.index')); ?>">Home</a>
              <?php else: ?>
              <a class="nav-link" aria-current="page" href="<?php echo e(route('login')); ?>">Home</a>
              <?php endif; ?>
            </li>
            <?php if(!session()->has('LoggedAdmin')): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('user.myvisit')); ?>">My Visit</a>
            </li>
            <?php endif; ?>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
          </ul>
        </div>
        <?php if(str_contains(Route::current()->getName(), 'user')): ?>
        <?php if(auth()->guard()->check()): ?>
        <div>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="<?php echo e(route('signout')); ?>">Logout</a>
            </li>
          </ul>
        </div>
        
        <?php endif; ?>
        <?php endif; ?>
        <?php if(session()->has('LoggedAdmin') && str_contains(Route::current()->getName(), 'admin')): ?>
        <div>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="<?php echo e(route('logout-admin.custom')); ?>">Logout</a>
            </li>
          </ul>
        </div>
        <?php endif; ?>

      </div>
    </div>
  </nav>
  <!-- Navbar -->

</header>
    <div class="container">
   

        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <div class="text-center footer bg-primary">
        <p> &copy; Copyright E-VITS Team 2021</p>
    </div>

    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>
<?php /**PATH /Users/nadiatiara/visit-its/resources/views/layouts/app.blade.php ENDPATH**/ ?>