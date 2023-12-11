    <div class="wrapper bg-white rounded shadow mt-10">
        <div class="header flex justify-between border-b p-2">
            <span class="text-lg font-bold p-2">
                <?php echo e($startDate->format('F Y')); ?>

            </span>
        <div class="flex items-center lg:mr-3">
          <button class="m-1" wire:click="previousWeek">
            <i class="bi bi-arrow-left-circle"></i>
          </button>
          <button class="m-1" wire:click="nextWeek">
            <i class="bi bi-arrow-right-circle"></i>
          </button>
        </div>
      </div>
        <table class="overflow-x-scroll xl:w-full lg:overflow-x-hidden">
            <thead>
                <tr>
                    <th class="py-2 border-r h-10 md:w-30 sm:w-20 w-10 xl:text-sm text-xs bg-blue-400 text-white lg:w-50">
                        <span class="xl:block lg:block md:block sm:block hidden">Ruangan<br>Hari</span>
                        <span class="xl:hidden lg:hidden md:hidden sm:hidden block bg-blue-400 text-white">Ruangan<br>Hari</span>
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
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $labs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-center h-20" wire:key="<?php echo e($lab->id); ?>">
                            <td class="border lg:px-3 h-40 md:w-30 sm:w-20 items-center bg-blue-400 overflow-hidden">
                                <div class="h-40 md:w-30 sm:w-full w-10 mx-auto flex justify-center items-center">
                                    <div class="top h-5 p-0 -mx-4">
                                        <span class="font-bold text-white"><?php echo e($lab->name); ?></span>
                                    </div>
                                </div>
                            </td>
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $weekDates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $week): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <td class="border h-40 xl:w-20 lg:w-20 md:w-30 sm:w-20 w-10 transition cursor-pointer duration-500 ease hover:bg-gray-300">
                                <button class="p-0 m-0 w-full h-full box-border"
                                @click="open = ! open" 
                                wire:click="getLabScheduleDetail(<?php echo e($lab->id); ?>, '<?php echo e($week['date']); ?>', '<?php echo e($week['day']); ?>')"
                                >
                                    <div class="flex flex-col h-40 mx-auto sm:w-full">
                                        <div class="bottom flex-grow w-full cursor-pointer">
                                            <div class="overflow-hidden pl-4 box-border">
                                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $lab->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <!--[if BLOCK]><![endif]--><?php if($user->pivot->booking_date === $week['date']): ?>
                                                        <div class="flex w-fit" wire:key="<?php echo e($user->id); ?>">
                                                            <span>|</span>
                                                            <p class="text-left ml-1">
                                                                <?php echo e($user->pivot->reason_to_booking); ?>

                                                            </p>
                                                        </div>
                                                    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $lab->classSchedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $classSchedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <!--[if BLOCK]><![endif]--><?php if($classSchedule->day == $week['day']): ?>
                                                        <div class="flex w-fit" wire:key="<?php echo e($classSchedule->id); ?>">
                                                            <span>|</span>
                                                            <p class="text-left ml-1">
                                                                (Kuliah) <?php echo e($classSchedule->subject); ?>

                                                            </p>
                                                        </div>
                                                    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                                            </div>
                                        </div>
                                    </div>
                                </button>
                                <!--Extra large modal-->                           
                                </td>
                                
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                </tbody>
        </table>


        <template x-teleport="<?php echo e('body'); ?>">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('detail-schedule', ['lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'SZSGGDk', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </template>
    </div>        


<?php /**PATH C:\applications\simaru\resources\views/livewire/schedule-calendar.blade.php ENDPATH**/ ?>