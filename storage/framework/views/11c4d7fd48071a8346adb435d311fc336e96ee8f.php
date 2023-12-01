<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard</title>

    <!-- METADATA -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="UniShare@Wzrd" />
    <meta property="og:description" content="UniShare" />
    <meta
      property="og:image"
      content="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/582b7519-2ab2-4e3d-b281-4cb2a59b36d8/dg4blgz-8ce48233-9f5d-4402-b827-7d44cb2373fa.jpg/v1/fill/w_1118,h_715,q_70,strp/demonzz_by_ourmine77_dg4blgz-pre.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9ODE4IiwicGF0aCI6IlwvZlwvNTgyYjc1MTktMmFiMi00ZTNkLWIyODEtNGNiMmE1OWIzNmQ4XC9kZzRibGd6LThjZTQ4MjMzLTlmNWQtNDQwMi1iODI3LTdkNDRjYjIzNzNmYS5qcGciLCJ3aWR0aCI6Ijw9MTI4MCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.Gg7IQQ72dETHVAR3_637RND_Db_D8eRO_9PIZES1dqY"
    />
    <meta property="og:url" content="https://unishare.flxnzz.my.id" />

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- FAVICON -->
    <link rel="shortcut icon" href="assets/img/favicon.png" />

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  </head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-light navbar-light border-danger navbar_dashboard h-25 shadow-sm" data-bs-theme="light" >
        <div class="container" data-bs-theme="light">
            <a class="navbar-brand fs-4 fw-semibold" href="#" style="color: #121415;">
                <img src="assets/img/UniShare-logo.png" alt="Logo" width="45" height="45" class="d-inline-block align-items-center" />
                UniShare
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav justify-content-end ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fs-6" href="dashboard">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6" href="karir">Karir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6" href="event">Acara</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6" href="beasiswa">Beasiswa</a>
                    </li>
                    <li class="nav-item">
                        <img src="assets/img/pp.png">
                    </li>                             
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fs-6" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Rafidhia Haikal
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item fs-6" href="editprof">Profile</a>
                            <a class="dropdown-item fs-6" href="/">Log Out</a>
                        </div>
                    </li>  
                </ul>
            </div>
        </div>
    </nav>
    <!-- SEARCH, CAPAIAN BELAJAR, dan NOTIFIKASI-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body card-atas">
                        <h4 class="card-title">Temukan peluang yang tepat untuk mewujudkan impianmu bersama UniShare!</h4>
                        <div class="container mt-4">
                        <div class="input-group">
                                <input type="text" class="form-control autocomplete" placeholder="Cari sesuatu...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">Cari</button>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card d-flex justify-content-center align-items-center card-atas">
                    <img class="card-img-top img-fluid" src="assets/img/Bullseye.png" alt="Card image cap" style="width: 200px;">
                    <div class="card-body">
                        <h5 class="card-title ">Capaian Belajar</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card d-flex justify-content-center align-items-center card-atas">
                    <img class="card-img-top img-fluid" src="assets/img/Bullseye.png" alt="Card image cap" style="width: 200px;">
                    <div class="card-body">
                        <h5 class="card-title">Capaian Belajar</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- EXPLORE-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-11">
                <h2>Explore</h2>
            </div>
            <div class="col-lg-1">
                <h6>More  <span style="font-size: 24px;">&#8594;</span></h6>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="card h-100 d-flex align-items-center">
                <img src="assets/img/01.jpg" class="img-fluid rounded" alt="thumbnail">
                    <div class="card-body flex-fill card-bawah">
                        <h5 class="card-title">Nama Acara [Max 2 Baris]</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>            
            <div class="col-lg-3">
                <div class="card h-100 d-flex align-items-center">
                <img src="assets/img/01.jpg" class="img-fluid rounded" alt="thumbnail">
                    <div class="card-body flex-fill card-bawah">
                        <h5 class="card-title">Nama Acara [Max 2 Baris]</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>            
            <div class="col-lg-3">
                <div class="card h-100 d-flex align-items-center">
                <img src="assets/img/01.jpg" class="img-fluid rounded" alt="thumbnail">
                    <div class="card-body flex-fill card-bawah">
                        <h5 class="card-title">Nama Acara [Max 2 Baris]</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>            
            <div class="col-lg-3">
                <div class="card h-100 d-flex align-items-center">
                <img src="assets/img/01.jpg" class="img-fluid rounded" alt="thumbnail">
                    <div class="card-body flex-fill card-bawah">
                        <h5 class="card-title">Nama Acara [Max 2 Baris]</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>            
        </div>
    </div>    

    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery-plugin/animatescroll.js"></script>
    <script src="assets/js/autocomplete.js"></script>
</body>
</html>
<?php /**PATH /home/flxnzz/Documents/Code/Web Development/UniVuln/resources/views/dashboard.blade.php ENDPATH**/ ?>