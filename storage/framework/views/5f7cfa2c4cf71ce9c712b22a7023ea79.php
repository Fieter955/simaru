 <table>
     <thead>
       <tr>
         <th>NO</th>
         <th>Lab</th>
         <th>Peminjam</th>
         <td>Email Peminjam</td>
         <td>No. Peminjam</td>
         <th>Tujuan</th>
         <th>Tanggal</th>
         <th>Jam Mulai</th>
         <th>Jam Selesai</th>
       </tr>
     </thead>
     <tbody>
     <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr>
         <th><?php echo e($loop->iteration); ?></th>
         <td><?php echo e($booking->lab->name); ?></td>
         <td><?php echo e($booking->user->name); ?></td>
         <td><?php echo e($booking->user->email); ?></td>
         <td><?php echo e($booking->user->phone_number); ?></td>
         <td><?php echo e($booking->reason_to_booking); ?></td>
         <td><?php echo e($booking->booking_date); ?></td>
         <td><?php echo e(App\Utilities\TimeMappings::convertToLetter($booking->start_time)); ?></td>
         <td><?php echo e(App\Utilities\TimeMappings::convertToLetter($booking->end_time)); ?></td>
     </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </tbody>
  </table><?php /**PATH C:\applications\simaru\resources\views/dashboard/reports/excel.blade.php ENDPATH**/ ?>