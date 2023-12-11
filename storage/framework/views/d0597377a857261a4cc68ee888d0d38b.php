<?php $__env->startSection('container'); ?>

<h2>Add Class Schedule</h2>

<?php if(session()->has('error')): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Failed</strong> <?php echo e(session('error')); ?>

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

<form action="<?php echo e(route('class-schedule.update', $classSchedule->id)); ?>" method="POST" class="mt-3" style="width: 80%">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PATCH'); ?>
 <div class="mb-3">
  <label for="name" class="form-label">Mata Kuliah</label>
  <input
    type="text"
    class="form-control"
    id="subject"
    name="subject"
    autocomplete="off"
    value="<?php echo e(old('subject', $classSchedule->subject)); ?>"
    autofocus
  />
  <?php $__errorArgs = ['subject'];
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
 <label for="lecturer" class="form-label">Dosen Pengampu</label>
 <input class="form-control" type="text" name="lecturer"
 autocomplete="off" list="lecturerOption" id="lecturer" value="<?php echo e(old('lecturer', $classSchedule->lecturer)); ?>">
 <?php $__errorArgs = ['lecturer'];
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
  <label for="class" class="form-label">Kelas</label>
  <input
    type="text"
    class="form-control"
    id="class"
    name="class"
    autocomplete="off"
    value="<?php echo e(old('class', $classSchedule->class)); ?>"
  />
  <?php $__errorArgs = ['class'];
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
  <label for="lab">Lab</label>
  <select class="form-select" name="lab_id">
    <?php $__currentLoopData = $labs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($lab->id); ?>" <?php if($lab->id == $classSchedule->lab_id): ?> selected <?php endif; ?>><?php echo e($lab->name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </select>
  <?php $__errorArgs = ['lab_id'];
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
<div class="row">
  <div class="col-4">
    <label for="lab">Hari</label>
    <select class="form-select" name="day">
      <option value="monday" <?php if($classSchedule->day == 'monday'): ?> selected <?php endif; ?>>Senin</option>
      <option value="tuesday" <?php if($classSchedule->day == 'tuesday'): ?> selected <?php endif; ?>>Selasa</option>
      <option value="wednesday" <?php if($classSchedule->day == 'wednesday'): ?> selected <?php endif; ?>>Rabu</option>
      <option value="thursday" <?php if($classSchedule->day == 'thursday'): ?> selected <?php endif; ?>>Kamis</option>
      <option value="friday" <?php if($classSchedule->day == 'friday'): ?> selected <?php endif; ?>>Jumat</option>
    </select>
    <?php $__errorArgs = ['day'];
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
  <div class="col-4">
    <label for="lab">Jam Mulai</label>
    <select class="form-select" name="start_time">
      <option selected>Pilih Jam Mulai</option>
      <?php $__currentLoopData = $time_format; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <option value="<?php echo e($time); ?>" <?php if($time == App\Utilities\TimeMappings::convertToLetter($classSchedule->start_time)): ?>
           selected
       <?php endif; ?>><?php echo e($time); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <?php $__errorArgs = ['start_time'];
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
  <div class="col-4">
    <label for="lab">Jam Selesai</label>
    <select class="form-select" name="end_time">
     <?php $__currentLoopData = $time_format; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <option value="<?php echo e($time); ?>" <?php if($time == App\Utilities\TimeMappings::convertToLetter($classSchedule->end_time)): ?>
         selected
     <?php endif; ?>><?php echo e($time); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <?php $__errorArgs = ['end_time'];
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
</div>
<button type="submit" class="btn btn-primary mt-3">simpan</button>
</form>


<script>
 const dosenInput = document.getElementById('lecturer');
 const lecturerOption = document.getElementById('lecturerOption');
 let isFirstInput = true;

 dosenInput.addEventListener('input', function () {
     if (this.value) {
       if(isFirstInput) {
         var nilaiArray = <?php echo json_encode($lecturers, 15, 512) ?>;
         var datalist = document.createElement('datalist');
             datalist.id = 'lecturerOption';

               for (var i = 0; i < nilaiArray.length; i++) {
                 var option = document.createElement('option');
                 option.value = nilaiArray[i];
                 datalist.appendChild(option);
             }

             document.body.appendChild(datalist);

             document.getElementById('lecturer').setAttribute('list', 'lecturerOption');
         isFirstInput = false;
       }
     }
      else {
       var datalist = document.getElementById('lecturerOption');
       if(datalist) {
         datalist.remove();
       }
         isFirstInput = true;
     }
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\simaru\resources\views/dashboard/class_schedule/edit.blade.php ENDPATH**/ ?>