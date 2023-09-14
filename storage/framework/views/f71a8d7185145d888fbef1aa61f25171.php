<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/Logo1.jpg')); ?>" type="image/jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title><?php echo $__env->yieldContent('judul'); ?> - VASYL - STORE</title>
</head>

<!--Navbar-->
<body class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">V A S Y L P A R F U M E</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link <?php echo e((request()->is('/')) ? 'active' : ''); ?>"  href="<?php echo e(route('index')); ?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo e((request()->is('about')) ? 'active' : ''); ?>" href="<?php echo e(route('about')); ?>">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo e((request()->is('contact')) ? 'active' : ''); ?>" href="<?php echo e(route('contact')); ?>">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<!--Div Pertama-->
        <?php echo $__env->yieldContent('content'); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\laragon\www\website-fauzan\resources\views/welcome.blade.php ENDPATH**/ ?>