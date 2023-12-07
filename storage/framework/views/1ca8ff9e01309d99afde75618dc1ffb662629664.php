
    <nav class="navbar fixed-top navbar-expand-lg bg-light navbar-light border-danger h-21 shadow-sm" data-bs-theme="light" >
        <div class="container-fluid" data-bs-theme="light">
            <a class="navbar-brand fs-4 fw-semibold" href="#" style="color: #121415;">
                <img src="<?php echo e(asset('assets/img/UniShare-logo.png')); ?>" alt="Logo" width="45" height="45" class="d-inline-block align-items-center" />
                UniShare
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav justify-content-end ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fs-6" href="/dashboard">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6" href="/karir">Karir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6" href="/event">Acara</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6" href="/beasiswa">Beasiswa</a>
                    </li>
                    <li class="nav-item">
                        <img src= <?php echo e(asset('assets/img/pp.png')); ?> >
                    </li>    
                    <div class="btn-group">
                        <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo e(auth()->user()->username); ?>

                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li> <a class="dropdown-item fs-6" href="/editprof">Profile</a> </li>
                          <form action="<?php echo e(route('logout')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <li> <button class="dropdown-item fs-6">Log Out</button> </li>
                          </form>
                        </ul>
                      </div>
                </ul>
            </div>
        </div>
    </nav><?php /**PATH /home/flxnzz/Documents/Code/Webdev/UniXploit/resources/views/layouts/parts/navbar.blade.php ENDPATH**/ ?>