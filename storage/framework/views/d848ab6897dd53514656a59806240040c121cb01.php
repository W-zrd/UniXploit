<?php $__env->startSection('content'); ?>
      <div class="ms-5 content">
        <h1 class="mt-4 mb-5 text-center"> CRUD TABLE </h1>
        <div class="container table-users">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Alamat</th>
                <th scope="col">Universitas</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>

              <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th scope="row"><?php echo e($item->id); ?></th>
                  <td><?php echo e($item->nama_lengkap); ?></td>
                  <td><?php echo e($item->username); ?></td>
                  <td><?php echo e($item->email); ?></td>
                  <td><?php echo e($item->alamat); ?></td>
                  <td><?php echo e($item->universitas); ?></td>
                  
                  <td> 
                    <a href="/user/<?php echo e($item->id); ?>" class="material-symbols-outlined me-2" href="">edit</a>
                    <a href="/delete/user/<?php echo e($item->id); ?>" class="material-symbols-outlined"  id="delete-icon">delete_forever</a>
                  </td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin-generics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/flxnzz/Documents/Code/Web Development/UniXploit/resources/views/admin/view-users.blade.php ENDPATH**/ ?>