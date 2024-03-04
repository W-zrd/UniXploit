<?php $__env->startSection('navbar'); ?>
  <?php echo $__env->make('layouts.parts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('banner'); ?>
    <section>
        <div class="banner container-flex" style="background-image: url(<?php echo e(asset('assets/img/event-banner2.png')); ?>);">
            <div class="row">

                <div class="col-3" id="header-thumbnail">
                    <img src="<?php echo e(asset('assets/img/acara-logo.svg')); ?>" alt="" class="img-fluid mt-5">
                </div>


                <div class="col-7 mt-5">
                    <h2 class="text-wrap" id="title-thumbnail">Eksplorasi peluang karir dan pendidikan yang sesuai dengan minatmu.</h2>
                    <h6 class="text-wrap text-white fw-normal mt-2">Temukan berbagai program pendidikan yang dapat membantu mengembangkan keterampilanmu!</h6>
    
                </div>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="second-navbar pt-3 pb-3">
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Semua</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kompetisi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Workshop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Seminar</a>
        </li>
      </ul>
    </section>

    <section style="height: 1000px">
      <div class="container-fluid mx-auto">
        <div class="row mx-auto">

          <!-- FILTERS -->
          
            <div class="col-lg-3 m-3 mt-5 mx-auto filter-box">
              <form action=/event method="GET" class="row g-3 search-bar mb-3">
                <ul class="list-group" style="max-width: 400px;">
                  <h5 class="ms-3 mt-4">Filter</h5>
                  <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" id="checkbox1">
                    <label class="form-check-label" for="firstCheckbox">Sains</label>
                  </li>
                  <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" id="checkbox2">
                    <label class="form-check-label" for="secondCheckbox">Teknologi</label>
                  </li>
                  <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" id="checkbox3">
                    <label class="form-check-label" for="thirdCheckbox">Bisnis</label>
                  </li>
                  <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" id="checkbox3">
                    <label class="form-check-label" for="thirdCheckbox">Desain</label>
                  </li>
                  <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" id="checkbox3">
                    <label class="form-check-label" for="thirdCheckbox">Fotografi</label>
                  </li>
                  <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" id="checkbox3">
                    <label class="form-check-label" for="thirdCheckbox">Manajemen</label>
                  </li>
                </ul>
                
                <div class="justify-items-center mx-auto">
                  <button type="submit" class="btn btn-custom1 m-3 mb-5 p-2 ps-5 pe-5">Apply!</button>
                </div>
              </form>
            </div>
          
          
          <div class="col-lg-8 mt-5 mx-auto">
            <!-- Search Bar -->
            <div class="container-flex">
              <form action=/event method="GET" class="row g-3 search-bar mb-3">
                <div class="mb-3 search-bar">
                  <input type="text" name="search" class="form-control ms-4" placeholder="Cari acara disini" value="<?php echo e(request('search')); ?>" >
                  <button type="submit" class="btn btn-custom1 ms-4 ps-3 pe-3">Search!</button>
                </div>
                
              </form>
            </div>



            <!-- CARDS -->
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- USER POST -->
            <div class="card mb-4" style="max-width: 1000px;" >
              <div class="row g-0">
                <div class="col-lg-4">
                           
                  <a class="image-popup-no-margins" href="<?php echo e(asset('/storage/' . $item->banner_img)); ?>" title="Caption. Can be aligned to any side and contain any HTML.">
                    <img src="<?php echo e(asset('/storage/' . $item->banner_img)); ?>"  alt="thumbnail" style="width: 100%; height: 100%; object-fit: cover;" class="img-fluid rounded">
                  </a>
 
                </div>

                <div class="col-lg-8">
                  <a class="card-body ms-2" href="<?php echo e(url('/event/' . $item->post_id)); ?>">
                    <h5 class="card-title ms-3"><?php echo e($item->title); ?></h5>
                    <p class="card-text ms-3"><?php echo e(substr($item->content, 0, 185) . " ..."); ?></p>
                    <p class="card-text ms-3"><small class="text-body-secondary">Last updated <?php echo e($item->updated_at->format('d F Y')); ?></small></p>
                    
                  </a>
                </div>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          
          
        </div>


      </div>



    </section>
<?php $__env->stopSection(); ?>

    




<?php echo $__env->make('layouts.generics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/UniXploit/resources/views/event.blade.php ENDPATH**/ ?>