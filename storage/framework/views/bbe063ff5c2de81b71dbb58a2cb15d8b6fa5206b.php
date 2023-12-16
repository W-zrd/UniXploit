<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('layouts.parts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- EDIT PROF -->
    <section class="editprof-content">
        <div class="container">
            <div class="row no-gutters mt-5 pt-5">
                <div class="col-3">
                    <div class="row no-gutters">
                        <div class="col">
                            <div class="cell">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold text-primary">Profile</h5>
                                        <p class="card-text text-secondary mb-0 small">Username</p>
                                        <p class="card-text text-dark"><?php echo e(auth()->user()->username); ?></p>
                                        <p class="card-text text-secondary mb-0 small">Email</p>
                                        <p class="card-text"><?php echo e(auth()->user()->email); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col">
                            <div class="cell">
                                <ul class="nav flex-column bg-white p-2 mt-3">
                                    <li class="nav-item px-1">
                                        <a class="nav-link active nav-JS" aria-current="page" href="#" data-tab="profil">Profil</a>
                                    </li>
                                    <li class="nav-item px-1">
                                        <a class="nav-link nav-JS" href="#" data-tab="privasiii">Privasi</a>
                                    </li>
                                    <li class="nav-item px-1 mb-5">
                                        <a class="nav-link disabled nav-JS" aria-disabled >Riwayat</a>
                                    </li>
                                    <form action="<?php echo e(route('logout')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="text-danger border-0 bg-white px-1 h5 ps-3 pb-2">Log Out</button>
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div id="profil" class="tab-content">
                        <div class="cell justify-content-center rounded bg-white"> 
                            <div class="m-3 h-25 text-center">
                                <img src="<?php echo e(asset('assets/img/demonzz.jpg')); ?>" class="rounded-circle m-1 pt-3" alt="Profile Picture" style="width: 125px">
                                <h3 >Nama lengkap</h3>
                                <hr>
                            </div>
                            <div>
                                <form>
                                    <div class="row p-3 pt-0">
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Nama Lengkap</label>
                                            <input type="text" class="form-control activecolor"value="<?php echo e(auth()->user()->nama_lengkap); ?>">
                                        </div>
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Username</label>
                                            <input type="text" class="form-control activecolor"value="<?php echo e(auth()->user()->username); ?>">
                                        </div>
                                    </div>
                                    <div class="row p-3 pt-0">
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Alamat</label>
                                            <input type="text" class="form-control activecolor" value="<?php echo e(auth()->user()->alamat); ?>">
                                        </div>
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Jenis Kelamin</label>
                                            <select class="form-select activecolor" aria-label="Default select example">
                                                <option selected value="1">Laki-Laki</option>
                                                <option value="2">Perempuan</option>
                                                <option value="3">Rather not say</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row p-3 pt-0">
                                        
                                    </div>
                                    <button type="submit" class="btn btn-primary m-3 mt-0 float-right">Apply</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="privasiii" class="tab-content">
                        <div class="cell justify-content-center rounded bg-white"> 
                            <div class="m-3 h-25 text-center">
                                <img src="<?php echo e(asset('assets/img/demonzz.jpg')); ?>" class="rounded-circle m-1 pt-3" alt="Profile Picture" style="width: 125px">
                                <h3 >Nama lengkap</h3>
                                <hr>
                            </div>
                            <div>
                                <form>
                                    <div class="row p-3 pt-0">
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Username</label>
                                            <input type="text" class="form-control activecolor" value="<?php echo e(auth()->user()->username); ?>">
                                        </div>
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Email</label>
                                            <input type="text"class="form-control activecolor" value="<?php echo e(auth()->user()->email); ?>">
                                        </div>
                                    </div>
                                    <div class="row p-3 pt-0">
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Password</label>
                                            <input type="password" class="form-control activecolor">
                                        </div>
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">No Telp</label>
                                            <input type="text" class="form-control activecolor" value="<?php echo e(auth()->user()->telepon); ?>">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary m-3 mt-0 float-right">Apply</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
  

<?php echo $__env->make('layouts.generics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/flxnzz/Documents/Code/Webdev/UniXploit/resources/views/editprof.blade.php ENDPATH**/ ?>