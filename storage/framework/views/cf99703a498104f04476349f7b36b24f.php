<?php $__env->startSection('container'); ?>
<div class="d-flex justify-content-between">
 <h1>Lab</h1>
 
 <a href="<?php echo e(route('labs.create')); ?>" class="btn btn-primary" style="height: 40px">Add Lab</a>
</div>

<?php if(session()->has('status')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> <?php echo e(session('status')); ?>

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>
<?php if(session()->has('error')): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Failed</strong> <?php echo e(session('error')); ?>

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

<table class="table">
 <thead>
   <tr>
     <th scope="col">#</th>
     <th scope="col">Lab</th>
     <th scope="col">Kapasitas</th>
     <th scope="col">Ukuran</th>
     <th scope="col">Action</th>
   </tr>
 </thead>
 <tbody>
  <?php $__currentLoopData = $labs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <tr>
     <th scope="row"><?php echo e($loop->iteration); ?></th>
     <td><?php echo e($lab->name); ?></td>
     <td>
      <?php echo e($lab->capacity); ?>

     </td>
     <td>
       <?php echo e($lab->size); ?>

      </td>
     <td class="d-flex">
       <a href="<?php echo e(route('labs.edit', ['lab' => $lab->slug])); ?>" class="btn btn-warning me-2">Edit</a>
       <form action="<?php echo e(route('labs.destroy', $lab->slug)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus lab ini?')">Delete</button>
      </form>
     </td>
   </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\simaru\resources\views/dashboard/lab/index.blade.php ENDPATH**/ ?>