<?php $__env->startSection('container'); ?>
 <div class="flex gap-x-2">
  <?php if(Route::has('login')): ?>
  <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
      <?php if(auth()->guard()->check()): ?>
      <?php echo e(Auth::user()->name); ?>

          <a href="<?php echo e(url('/home')); ?>" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>

          <form action="<?php echo e(route('logout')); ?>" method="post">
              <?php echo csrf_field(); ?>
              <button type="submit" class="dark:text-white ">Logout</button>
          </form>
      <?php else: ?>
          <a href="<?php echo e(route('login')); ?>" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

          <?php if(Route::has('register')): ?>
              <a href="<?php echo e(route('register')); ?>" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
          <?php endif; ?>
      <?php endif; ?>
  </div>
  <?php endif; ?>
 </div>
 


<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('success-booking', []);

$__html = app('livewire')->mount($__name, $__params, 'ViKvRa6', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>


<?php if(auth()->guard()->check()): ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('modal-booking', ['user' => Auth::user(),'labs' => $labs,'timeMappings' => $timeMappings]);

$__html = app('livewire')->mount($__name, $__params, '1N9BPGk', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
<?php endif; ?>

<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('schedule-calendar', ['labs' => $labs,'lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'iB9uk2h', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

<?php $__env->startPush('scripts'); ?>
<script>

Livewire.on('close-modal', function () {
    // Menutup modal dengan data-te-modal-dismiss
    const modal = document.querySelector('[data-te-modal-init]');
    modal.click();
});

Livewire.on('showModalDetail', function () {
    // Menampilkan modal dengan data-te-modal-init
    const modal = document.getElementById('modalScheduleDetail');
    modal.classList.add('block');
});

Livewire.on('success-booking', function () {
  const toasty = document.getElementById('static-example');    
    toasty.classList.replace('data-[te-toast-show]:hidden', 'data-[te-toast-show]:block')
    
    setTimeout(() => {
      toasty.classList.replace('data-[te-toast-show]:block', 'data-[te-toast-show]:hidden')
    }, 2000);
});
</script>
<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\simaru\resources\views/home/index.blade.php ENDPATH**/ ?>