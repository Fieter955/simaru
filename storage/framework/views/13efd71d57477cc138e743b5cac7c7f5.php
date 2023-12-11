<?php $__env->startSection('container'); ?>

<h2>Penjadwalan Ulang</h2>

<?php if(session()->has('error')): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> <?php echo e(session('error')); ?>

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

<?php if(session()->has('success')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>success!</strong> <?php echo e(session('success')); ?>

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

<div class="mb-3">
 <label for="name" class="form-label">Nama Peminjam</label>
  <input class="form-control" type="text" value="<?php echo e($booking->user->name); ?>" aria-label="Disabled input example" disabled readonly>
</div>
<div class="mb-3">
 <label for="name" class="form-label">Tujuan Peminjam</label>
  <input class="form-control" type="text" value="<?php echo e($booking->reason_to_booking); ?>" aria-label="Disabled input example" disabled readonly>
</div>
<div class="row">
  <div class="mb-3 col-6">
    <label for="name" class="form-label">No HP Peminjam</label>
    <br>
     <a href="https://wa.me/<?php echo e($booking->user->phone_number ?? ''); ?>"><?php echo e($booking->user->phone_number ?? '-'); ?></a>
    </div>
   <div class="mb-3 col-6">
    <label for="name" class="form-label">Email Peminjam</label>
    <br>
     <a href="mailto:<?php echo e($booking->user->email ?? ''); ?>"><?php echo e($booking->user->email ?? '-'); ?></a>
  </div>
</div>

<form method="POST" action="<?php echo e(route('reschedule.store', $id)); ?>">
 <?php echo csrf_field(); ?>
 <div class="mb-3">
  <label for="name" class="form-label">Alasan Penjadwalan Ulang</label>
   <input class="form-control" type="text" name="reason_for_request">
 </div>
  <div class="mb-3">
   <label for="lab">Lab</label>
   <select class="form-select" name="new_lab_id">
     <?php $__currentLoopData = $labs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <option value="<?php echo e($lab->id); ?>" <?php if($lab->id == $booking->lab_id): ?> selected <?php endif; ?>><?php echo e($lab->name); ?></option>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </select>
  </div>
  <div class="mb-3">
   <label for="" class="form-label">Tanggal</label>
   <input type="date" name="new_booking_date" class="form-control" id="" value="<?php echo e($booking->booking_date); ?>">
  </div>
  <div class="row">
   <div class="col-6">
    <label for="start_time">Jam Mulai</label>
    <select class="form-select" name="new_start_time">
      <option selected>Pilih Jam Mulai</option>
      <?php $__currentLoopData = $time_format; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <option value="<?php echo e($value[0]); ?>" <?php if($value[0] == $booking->start_time): ?> selected <?php endif; ?>><?php echo e($key); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
   </div>
   <div class="col-6">
    <label for="end_time">Jam Selesai</label>
    <select class="form-select" name="new_end_time">
      <option selected>Pilih Jam Selesai</option>
      <?php $__currentLoopData = $time_format; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <option value="<?php echo e($value[1]); ?>" <?php if($value[1] == $booking->end_time): ?> selected <?php endif; ?>><?php echo e($key); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
   </div>
</div>

<div class="mt-3">
 <button type="submit" class="btn btn-primary">Ajukan Penjadwalan Ulang </button>
</div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\simaru\resources\views/dashboard/reschedule/create.blade.php ENDPATH**/ ?>