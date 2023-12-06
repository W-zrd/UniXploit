<?php $__env->startSection('content'); ?>
    <div class="m-5 user-table">
      <table id="example" class="display table">
          <thead>
              <tr>
                  <th>Judul</th>
                  <th>Kategori</th>
                  <th>Tema</th>
                  <th>Last Updated</th>
                  <th>Action</th>
                  
              </tr>
          </thead>

          
          <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                  <td><?php echo e($item->title); ?></td>
                  <td><?php echo e($item->kategori); ?></td>
                  <td><?php echo e($item->tema); ?></td>
                  <td><?php echo e($item->updated_at->format('d F Y')); ?></td>
                  <td>
                    <a href="/post/<?php echo e($item->post_id); ?>" class="material-symbols-outlined me-2" href="">edit</a>
                    <a href="/delete/post/<?php echo e($item->post_id); ?>" class="material-symbols-outlined"  id="delete-icon">delete_forever</a>
                  </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
       
      </table>
    </div>
  </div>
<?php $__env->stopSection(); ?>  
<?php echo $__env->make('admin.layout.admin-generics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/flxnzz/Documents/Code/Web Development/UniXploit/resources/views/admin/admin-dashboard.blade.php ENDPATH**/ ?>