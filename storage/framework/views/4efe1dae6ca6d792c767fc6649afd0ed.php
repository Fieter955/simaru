<div class="wrapper bg-white rounded shadow mt-10">
    <div class="header flex justify-between border-b p-2">
        <span class="text-lg font-bold p-2">
            <?php echo e($startDate->format('F Y')); ?>

        </span>

    <div class="flex items-center lg:mr-3">
      <button class="p-1" wire:click="previousWeek">
        <i class="bi bi-arrow-left-circle"></i>
      </button>
      <button class="p-1" wire:click="nextWeek">
        <i class="bi bi-arrow-right-circle"></i>
      </button>
    </div>
  </div>
    <table class="overflow-x-scroll xl:w-full lg:overflow-x-hidden">
        <thead>
            <tr>
                <th class="py-2 border-r h-10 md:w-30 sm:w-20 w-10 xl:text-sm text-xs bg-blue-500 text-white lg:w-50">
                    <span class="xl:block lg:block md:block sm:block hidden">Ruangan<br>Hari</span>
                    <span class="xl:hidden lg:hidden md:hidden sm:hidden block bg-blue-500 text-white">Ruangan<br>Hari</span>
                </th>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $weekDates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $week): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th class="p-2 border-r h-10 lg:w-50 md:w-30 sm:w-20 w-10 xl:text-sm text-sm bg-blue-400 text-white">
                        <span class="xl:block lg:block md:block sm:block hidden"><?php echo e($week['day']); ?>, <?php echo e($week['date']); ?></span>
                        <span class="xl:hidden lg:hidden md:hidden sm:hidden block bg-blue-400 text-white"><?php echo e($week['day']); ?>, <?php echo e($week['date']); ?></span>
                    </th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
            </tr>
        </thead>
        <tbody>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $timeMappings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="text-center h-10">
                    <td class="border lg:px-3 md:w-30 sm:w-20 items-center bg-blue-300 overflow-hidden">
                        <div class="md:w-30 sm:w-full w-10 mx-auto flex justify-center items-center">
                            <div class="top p-0 -mx-4">
                                <span class="font-bold text-white"><?php echo e($key); ?></span>
                            </div>
                        </div>
                    </td>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $weekDates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $week): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        $found = false;
                        $totalRowspan = 1;
                        ?>
        
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $labBookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!--[if BLOCK]><![endif]--><?php if($booking->booking_date == $week['date'] && $booking->start_time == $value[0]): ?>
                                <?php
                                $totalRowspan = ceil((strtotime($booking['end_time']) - strtotime($booking['start_time'])) / 3600);
                                $found = true;
                                ?>
                                <td class="border xl:w-20 lg:w-20 md:w-30 sm:w-20 w-10 transition" rowspan="<?php echo e($totalRowspan); ?>">
                                    <?php echo e($booking->reason_to_booking); ?>

                                </td>
                            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
        
                        

                        <!--[if BLOCK]><![endif]--><?php if(!$found): ?>
                            <td class="border xl:w-20 lg:w-20 md:w-30 sm:w-20 w-10 transition"></td>
                            
                        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
        </tbody>
        
    </table>
</div> 
<?php /**PATH C:\applications\simaru\resources\views/livewire/lab-schedule.blade.php ENDPATH**/ ?>