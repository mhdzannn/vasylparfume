
<?php $__env->startSection('judul', 'Home'); ?>
<?php $__env->startSection('content'); ?>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo e(asset('assets/Gambar1.jpg')); ?>" class="d-block w-100" alt="parfume image"  style="height: auto;">
        <div class="carousel-caption" style="color: black;">
          <h5>VASYL PARFUME</h5>
          <p>Parfume & Cologne Unisex</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo e(asset('assets/Gambar2.jpg')); ?>" class="d-block w-100" alt="parfume image"  style="height: auto;">
        <div class="carousel-caption" style="color: black;">
          <h5>VASYL PARFUME</h5>
          <p>Parfume & Men's cologne</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo e(asset('assets/Gambar3.jpg')); ?>" class="d-block w-100" alt="parfume image"  style="height: auto;">
        <div class="carousel-caption" style="color: black;">
          <h5>VASYL PARFUME</h5>
          <p>Parfume & Men's cologne</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
<!--Div Produk Kedua-->
<div class="container-fluid text-light" style="height: auto">
<div class="row text-center align-items-center mt-5">
  <div class="col-12">
    <img src="<?php echo e(asset('assets/Logo1.jpg')); ?>" width="150" height="150"/>
    <h2 class="mt-2">VASYL PARFUME STORE</h2>
    <i>Hello, welcome to VASYL store parfume nomor 1 di INDONESIA</i>
  </div>
</div>
<div class="row text-dark text-center justify-content-md-center mt-2">
    <div class="col-sm-3 g-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">FLORAL ELEGANCE</h5>
          <img src="<?php echo e(asset('assets/g1.jpeg')); ?>" class="d-block w-100" alt="parfume image"  style="width: 150px; object-fit:cover;">
          <a href="https://instagram.com/Vasylparfume" class="btn btn-dark d-block">SHOP NOW</a>
        </div>
      </div>
    </div>
    <div class="col-sm-3 g-3">  
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">VERDANT ESSENCE</h5>
          <img src="<?php echo e(asset('assets/g2.jpeg')); ?>" class="d-block w-100" alt="parfume image"  style="width: 150px; object-fit:cover;">
          <a href="https://instagram.com/Vasylparfume" class="btn btn-dark d-block">SHOP NOW</a>
        </div>
      </div>
    </div>
    <div class="col-sm-3 g-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">LIVELY CITRUS SPARK</h5>
          <img src="<?php echo e(asset('assets/g3.jpeg')); ?>" class="d-block w-100" alt="parfume image"  style="width: 150px; object-fit:cover;">
          <a href="https://instagram.com/Vasylparfume" class="btn btn-dark d-block">SHOP NOW</a>
          </div>
        </div>
      </div>
  </div>
</div>

<!--Div Produk Ketiga-->
<div class="row text-dark text-center justify-content-md-center mt-2">
    <div class="col-sm-3 g-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">OPHELIE</h5>
          <img src="<?php echo e(asset('assets/Feed 3.jpg')); ?>" class="d-block w-100" alt="parfume image"  style="width: 150px; object-fit:cover;">
          <a href="https://instagram.com/Vasylparfume" class="btn btn-dark d-block">SHOP NOW</a>
        </div>
      </div>
    </div>
    <div class="col-sm-3 g-3">  
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">ZOE</h5>
          <img src="<?php echo e(asset('assets/Feed 3.jpg')); ?>" class="d-block w-100" alt="parfume image"  style="width: 150px; object-fit:cover;">
          <a href="https://instagram.com/Vasylparfume" class="btn btn-dark d-block">SHOP NOW</a>
        </div>
      </div>
    </div>
    <div class="col-sm-3 g-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">GODFREY</h5>
          <img src="<?php echo e(asset('assets/Feed 3.jpg')); ?>" class="d-block w-100" alt="parfume image"  style="width: 150px; object-fit:cover;">
          <a href="https://instagram.com/Vasylparfume" class="btn btn-dark d-block">SHOP NOW</a>
          </div>
        </div>
      </div>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\website-fauzan\resources\views/index.blade.php ENDPATH**/ ?>