<?php $__env->startSection('container'); ?>
<h2>Edit <?php echo e($lab->name); ?></h2>
<form action="<?php echo e(route('labs.update', $lab->slug)); ?>" method="POST">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>
 <div class="mb-3">
   <label for="name" class="form-label">Lab Name</label>
   <input
     type="text"
     class="form-control"
     id="name"
     name="name"
     value="<?php echo e($lab->name); ?>"
     autocomplete="off"
     autofocus
   />
   <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
  <div >
    <?php echo e($message); ?>

  </div>
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
 </div>
 <div class="mb-3">
   <label for="capacity" class="form-label"
     >Kapasitas</label
   >
   <input
     type="text"
     class="form-control"
     id="capacity"
     name="capacity"
     value="<?php echo e($lab->capacity); ?>"
     autocomplete="off"
   />
   <?php $__errorArgs = ['capacity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
  <div >
    <?php echo e($message); ?>

  </div>
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
 </div>

 <div class="mb-3">
   <label for="size" class="form-label">Ukuran</label>
   <input
     type="text"
     class="form-control"
     id="size"
     name="size"
     value="<?php echo e($lab->size); ?>"
     autocomplete="off"
   />
   <?php $__errorArgs = ['size'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
  <div >
    <?php echo e($message); ?>

  </div>
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
 </div>
 <div class="mb-3">
   <label for="description" class="form-label"
     >Deskripsi</label
   >
   <input
     type="text"
     class="form-control"
     id="description"
     name="description"
     value="<?php echo e($lab->description); ?>"
     autocomplete="off"
   />
   <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
  <div >
    <?php echo e($message); ?>

  </div>
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
 </div>
 <button type="submit" class="btn btn-primary">Save</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\simaru\resources\views/dashboard/lab/edit.blade.php ENDPATH**/ ?>