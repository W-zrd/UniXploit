<?php $__env->startSection('content'); ?>
      <div class="ms-5 mb-5 content">

        
        <div class="row mt-5 ms-5 me-5">
          <h2>Update Post</h2>
          <h6 class="text-secondary fw-normal">Change and update your posts as you wish!</h6>
        </div>

        <section class="event-form p-5 me-5 ms-5 mt-4">
          <form action="/update/post/<?php echo e($data->post_id); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            
            <div class="row ">
              
              <div class="col">
                <div class="mb-3">
                  <label for="title" class="form-label">Judul</label>
                  <input value="<?php echo e($data->title); ?>" type="text" class="form-control" id="title" name="title" aria-describedby="judulPostHelp" style="border-radius: 20px">
                  <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="alert alert-danger shadow-sm mt-2"><?php echo e($message); ?></p>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>
            </div>

            
            <div class="row">
              
              <div class="col">
                <div class="mb-3">
                  <label for="author" class="form-label">Penyelenggara</label>
                  <input value="<?php echo e($data->author); ?>" type="text" class="form-control" id="author" name="author" aria-describedby="authorHelp" style="border-radius: 20px">
                  <?php $__errorArgs = ['author'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="alert alert-danger shadow-sm mt-2"><?php echo e($message); ?></p>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>

              
              <div class="col">
                <div class="mb-3">
                  <label for="url_event" class="form-label">Link Acara</label>
                  <input value="<?php echo e($data->url_event); ?>" type="text" class="form-control" name="url_event" id="url_event" aria-describedby="urlHelp" style="border-radius: 20px">
                  <?php $__errorArgs = ['url_event'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="alert alert-danger shadow-sm mt-2"><?php echo e($message); ?></p>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>
            </div>
  
            
            <div class="row pt-2">
              
              <div class="col">
                <div class="mb-3">
                  <label for="tema" class="form-label">Tema</label>
                  <select class="form-select" name="tema" aria-label="tema" style="border-radius: 20px">
                    <option value="Teknologi">Teknologi</option>
                    <option value="Sains">Sains</option>
                    <option value="Bisnis">Bisnis</option>
                    <option value="Desain">Desain</option>
                    <option value="Fotografi">Fotografi</option>
                    <option value="Manajemen">Manajemen</option>
                  </select>
                  <?php $__errorArgs = ['tema'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="alert alert-danger shadow-sm"><?php echo e($message); ?></p>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>
  
              
              <div class="col">
                <div class="mb-3">
                  <label for="kategori" class="form-label">Kategori</label>
                  <select class="form-select" name="kategori" aria-label="kategori" style="border-radius: 20px">
                    <option value="Kompetisi">Kompetisi</option>
                    <option value="Workshop">Workshop</option>
                    <option value="Seminar">Seminar</option>
                  </select>
                  <?php $__errorArgs = ['kategori'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="alert alert-danger shadow-sm"><?php echo e($message); ?></p>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>
            </div>
  
            
            <div class="row pt-2">
              
              <div class="col">
                <div class="mb-3">
                  <label for="guidebook" class="form-label">Guidebook</label>
                  <input type="file" class="form-control <?php $__errorArgs = ['guidebook'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="guidebook" name="guidebook" aria-describedby="guidebookHelp" style="border-radius: 20px">
                  <?php $__errorArgs = ['guidebook'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="alert alert-danger shadow-sm"><?php echo e($message); ?></p>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>

              
              <div class="col">
                <div class="mb-3">
                  <label for="banner_img" class="form-label">Banner Acara</label>
                  <input type="file" class="form-control <?php $__errorArgs = ['banner_img'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="banner_img" \ id="banner_img" aria-describedby="urlHelp" style="border-radius: 20px">
                  <?php $__errorArgs = ['banner_img'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="alert alert-danger shadow-sm"><?php echo e($message); ?></p>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>
            </div>

            
            <div class="row pt-2">
              
              <div class="mb-3">
                <label for="content" class="form-label">Example textarea</label>
                <textarea class="form-control" id="content" name="content" rows="3"><?php echo e($data->content); ?></textarea>
                <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <p class="alert alert-danger shadow-sm"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            </div>

            <button class="btn btn-primary" type="submit" style="background-color: #f75600; border-color: #f75600">Update</button>
  
          </form>
        </section>
        
      </div>

  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin-generics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/flxnzz/Documents/Code/Web Development/UniXploit/resources/views/admin/update-post.blade.php ENDPATH**/ ?>