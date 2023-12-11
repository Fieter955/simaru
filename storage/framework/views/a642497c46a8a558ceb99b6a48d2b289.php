<div>
    <div x-show="open" class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="modalScheduleDetail">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-center justify-center p-4 text-center sm:items-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-5xl w-full">
                <button @click="open = ! open" class="absolute right-3 top-2 text-2xl"><i class="bi bi-x-circle"></i></button>
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div class="mt-3 sm:ml-4 sm:mt-0 sm:text-left">
                            <!--[if BLOCK]><![endif]--><?php if($labName): ?>
                                <h1 class="text-2xl font-semibold"><?php echo e($labName->name); ?></h1>
                                <h3 class="font-semibold" id="modal-title"><?php echo e($day); ?>, <?php echo e($date); ?></h3>
                            <?php else: ?>
                            <div class="animate-pulse">
                                <div class="h-7 bg-gray-400 w-32"></div>
                            </div>
                            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

                            <div class="mt-2">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <tbody>
                                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $timeMappings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                        
                                        <?php
                                        $found = false;
                                        $totalRowspan = 1;
                                        ?>
                                
                                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $labBookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <!--[if BLOCK]><![endif]--><?php if($booking['start_time'] == $value[0]): ?>
                                            <?php
                                                $totalRowspan = ceil((strtotime($booking['end_time']) - strtotime($booking['start_time'])) / 3600);
                                            ?>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        <?php echo e($key); ?>

                                                    </th>
                                                    <td class="w-full bg-pink-600 rounded-lg p-3 text-white align-top" rowspan="<?php echo e($totalRowspan); ?>">
                                                        <div class="flex justify-between">
                                                            <div class="">
                                                                <h1 class="text-2xl font-semibold"><?php echo e($booking->reason_to_booking); ?></h1>
                                                                <p class="text-sm font-light mt-1"><?php echo e($booking->user->name); ?> (<?php echo e($booking->user->role); ?>)</p>
                                                                <p class="mt-3"><?php echo e($booking->start_time); ?> - <?php echo e($booking->end_time); ?></p>
                                                            </div>
                                                            <!--[if BLOCK]><![endif]--><?php if(auth()->guard()->check()): ?>
                                                                <!--[if BLOCK]><![endif]--><?php if(Auth::user()->role === 'admin'): ?>
                                                                    <div class="align-middle">
                                                                        <a href="<?php echo e(route('reschedule.create', $booking->id)); ?>" class="py-3 px-5 rounded-full bg-white text-black block">Reschedule</a>
                                                                    </div>
                                                                <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                                            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php
                                                $found = true;
                                                ?>
                                            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $classSchedule; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <!--[if BLOCK]><![endif]--><?php if($class['start_time'] == $value[0]): ?>
                                            <?php
                                                $totalRowspan = ceil((strtotime($class['end_time']) - strtotime($class['start_time'])) / 3600);
                                            ?>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        <?php echo e($key); ?>

                                                    </th>
                                                    <td class="w-full bg-yellow-600 rounded-lg p-3 text-white align-top" rowspan="<?php echo e($totalRowspan); ?>">
                                                        <div class="flex justify-between">
                                                            <div class="">
                                                                <span
                                                                    class="inline-block whitespace-nowrap rounded-[0.27rem] bg-neutral-50 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-neutral-600">
                                                                    Kuliah
                                                                </span>
                                                                <h1 class="text-2xl font-semibold"><?php echo e($class->subject); ?></h1>
                                                                <p class="text-sm font-light mt-1"><?php echo e($class->lecturer); ?></p>
                                                                <p class="mt-3"><?php echo e($class->start_time); ?> - <?php echo e($class->end_time); ?></p>
                                                            </div>
                                                            <!--[if BLOCK]><![endif]--><?php if(auth()->guard()->check()): ?>
                                                                <!--[if BLOCK]><![endif]--><?php if(Auth::user()->role === 'admin'): ?>
                                                                    <div class="align-middle">
                                                                        <a href="<?php echo e(route('class-schedule.edit', $class->id)); ?>" class="py-3 px-5 rounded-full bg-white text-black block">Edit Jadwal</a>
                                                                    </div>
                                                                <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                                            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php
                                                $found = true;
                                                ?>
                                            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                                
                                        <!--[if BLOCK]><![endif]--><?php if(!$found): ?>
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    <?php echo e($key); ?>

                                                </th>
                                                <td class="w-full">
                                                    <!-- Isi jika tidak ada booking -->
                                                </td>
                                            </tr>
                                        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\applications\simaru\resources\views/livewire/detail-schedule.blade.php ENDPATH**/ ?>