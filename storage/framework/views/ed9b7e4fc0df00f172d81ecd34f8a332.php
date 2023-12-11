<?php $__env->startSection('container'); ?>
<form action="<?php echo e(route('labs.store')); ?>" method="POST">
  <?php echo csrf_field(); ?>
 <div class="mb-3">
   <label for="name" class="form-label">Lab Name</label>
   <input
     type="text"
     class="form-control"
     id="name"
     name="name"
     value="<?php echo e(old('name')); ?>"
     autocomplete="off"
     autofocus
   />
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
     value="<?php echo e(old('capacity')); ?>"
     autocomplete="off"
   />
 </div>

 <div class="mb-3">
   <label for="size" class="form-label">Ukuran</label>
   <input
     type="text"
     class="form-control"
     id="size"
     name="size"
     value="<?php echo e(old('size')); ?>"
     autocomplete="off"
   />
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
     value="<?php echo e(old('description')); ?>"
     autocomplete="off"
   />
 </div>
 <button type="submit" class="btn btn-primary">Save</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\simaru\resources\views/dashboard/lab/create.blade.php ENDPATH**/ ?>