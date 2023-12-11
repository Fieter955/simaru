<?php $__env->startSection('container'); ?>

<div class="lg:flex">
  <div class="text-white hidden lg:block lg:mx-auto lg:mt-28 lg:ml-60 lg:-mr-20"> <!--Responsive-->
    <span><h1 class="text-4xl font-bold mb-3">Sistem</h1></span>
    <span><h1 class="text-4xl font-bold mb-3">Peminjaman</h1></span>
    <span><h1 class="text-4xl font-bold mb-4">Ruangan</h1></span>
    <h3 class="text-lg mt-1 font-bold mb-4">Fakultas Teknik dan Kejuruan</h3>
    <p class="text-xs leading-5">Jika anda memiliki pertanyaan atau kendala <br> bisa menghubungi kontak dibawah</p>
    <div class="flex flex-row items-center p-4">
        <div>
          <i class="bi bi-envelope"></i>
        </div>
        <div>
            <a href="#"><h4 class="text-xs ml-2">ftk@undiksha.ac.id</h4></a>
        </div>
    </div>
    <div class="flex flex-row items-center p-4 -mt-3">
        <div >
          <i class="bi bi-telephone"></i>
        </div>
        <div>
            <a href="#"><h4 class="text-xs ml-2">(+62)81238396581</h4></a>
        </div>
    </div>
    <div class="flex flex-row items-center p-4 -mt-3">
        <div >
          <i class="bi bi-geo-alt"></i>
        </div>
        <div>
            <a href="#"><h4 class="text-xs ml-2 leading-5">Jl. Udayana Banjar Tegal, Kec. Buleleng,<br> Kabupaten Buleleng</h4></a>
        </div>
    </div>
</div>
  <div class="text-white ml-14 my-4 font-bold lg:hidden"> <!--Judul-->
      <span><h1 class="text-2xl">Sistem</h1></span>
      <span><h1 class="text-2xl">Peminjaman</h1></span>
      <span><h1 class="text-2xl">Ruangan</h1></span>
      <h3 class="text-xs mt-1">Fakultas Teknik dan Kejuruan</h3>
  </div>
  <div class="bg-[#F2F1FA] w-80 mx-auto  rounded-lg p-5 lg:w-96 lg:mt-12 shadow-md lg:shadow-xl lg:p-7"> <!--Form-->
      <h2 class="text-[#60A5FA] font-bold text-2xl">Sign Up</h2>
      <p class="mt-1 text-[13px]">Silakan isi data dibawah ini dengan benar</p>
      <form action="<?php echo e(route('register')); ?>" method="POST">
        <?php echo csrf_field(); ?> 
          <label class="text-sm font-bold text-[#60A5FA]" for="nama">Nama</label><br>
          <input class="p-2 text-[12px] mb-3 mt-1 w-full  rounded-md " placeholder="Jhon Doe" type="text" id="nama" name="name" value="<?php echo e(old('name')); ?>"><br>
          <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="text-sm text-red-400 -mt-2 mb-1">
            <?php echo e($message); ?>

          </div>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

          <label class=" text-sm font-bold text-[#60A5FA]" for="email">Email</label><br>
          <input class="mb-3 mt-1 w-full  rounded-md p-2 text-[12px]" placeholder="email@example.com" type="email" id="email" name="email" value="<?php echo e(old('name')); ?>"><br>
          <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="text-sm text-red-400 -mt-2 mb-1">
            <?php echo e($message); ?>

          </div>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

          <label class="text-sm font-bold text-[#60A5FA]" for="telepon">Telepon (WhatsApp)</label><br>
          <input class="p-2 text-[12px] mb-3 mt-1 w-full  rounded-md" type="text" placeholder="0812313451" id="telepon" name="phone_number" value="<?php echo e(old('phone_number')); ?>"><br>
          <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="text-sm text-red-400 -mt-2 mb-1">
            <?php echo e($message); ?>

          </div>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

          <div class="grid grid-cols-2 gap-2 mb-1">
              <div>
                  <label class="text-sm font-bold text-[#60A5FA]" for="password">Password</label><br>
                  <input class="p-2 text-[12px]  mt-1 w-full  rounded-md" placeholder="*********" type="password" id="password" name="password"><br>
                  
              </div>
              <div>
                  <label class="text-sm font-bold text-[#60A5FA]" for="confirm_pass">Confirm Password</label><br>
                  <input class="p-2 text-[12px]  mt-1 w-full rounded-md"  placeholder="*********" type="password" id="confirm_pass" name="confirm_pass"><br>
              </div>
          </div>
          <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="text-sm text-red-400 mb-1">
            <?php echo e($message); ?>

          </div>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

          <button class="bg-blue-400 hover:bg-blue-500 bg-b1 text-white text-[15px] font-bold py-2 px-4 rounded-md w-full mt-4 mb-2 " type="submit">Sign Up</button>
      </form>
      <p class="text-[13px] ">Sudah punya akun? Sign In dibawah ini</p>
      <a class="text-[13px] text-b1 underline text-blue-500 " href="/login" wire:navigate><p>Sign In</p></a>
  </div>
  
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\simaru\resources\views/auth/register.blade.php ENDPATH**/ ?>