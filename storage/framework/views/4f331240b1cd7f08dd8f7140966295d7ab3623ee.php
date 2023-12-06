<?php $__env->startSection('content'); ?>
    <!-- INPUT FORMS -->
    <div class="col-9 mx-auto mt-5 content">
      <h2 class="text-center mb-3">Update User</h2>
      <form action="/update/user/<?php echo e($data->id); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
          <label for="nama_lengkap" class="form-label text-secondary">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?php echo e($data->nama_lengkap); ?>">
        </div>
        <div class="mb-3">
            <label for="username" class="form-label text-secondary">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo e($data->username); ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label text-secondary">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo e($data->email); ?>">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label text-secondary">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo e($data->alamat); ?>">
        </div>
        <div class="mb-3">
            <label for="universitas" class="form-label text-secondary">Universitas</label>
            <input type="text" class="form-control" id="universitas" name="universitas" value="<?php echo e($data->universitas); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin-generics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/flxnzz/Documents/Code/Web Development/UniXploit/resources/views/admin/update-user.blade.php ENDPATH**/ ?>