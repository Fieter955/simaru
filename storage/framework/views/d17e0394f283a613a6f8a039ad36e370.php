<div>
    <table id="myTable" class="display">
        <thead>
          <tr>
            <th>#</th>
            <th>Lab</th>
            <th>Peminjam</th>
            <th>Tujuan</th>
            <th>Tanggal</th>
            <th>Jam Mulai</th>
            <th>Jam Selesai</th>
          </tr>
        </thead>
        <tbody>
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr wire:key="<?php echo e($booking->id); ?>">
            <th scope="row"><?php echo e($loop->iteration); ?></th>
            <td><?php echo e($booking->lab->name); ?></td>
            <td><?php echo e($booking->user->name); ?></td>
            <td><?php echo e($booking->reason_to_booking); ?></td>
            <td><?php echo e($booking->booking_date); ?></td>
            <td><?php echo e(App\Utilities\TimeMappings::convertToLetter($booking->start_time)); ?></td>
            <td><?php echo e(App\Utilities\TimeMappings::convertToLetter($booking->end_time)); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
        </tbody>
      </table>
      
</div>
<?php /**PATH C:\applications\simaru\resources\views/livewire/report.blade.php ENDPATH**/ ?>