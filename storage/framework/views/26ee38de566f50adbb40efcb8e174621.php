<?php $__env->startPush('style'); ?>
    <style>
      .bg-light-gray {
          background-color: #f7f7f7;
      }
      .table-bordered thead td,
      .table-bordered thead th {
          border-bottom-width: 2px;
      }
      .table thead th {
          vertical-align: bottom;
          border-bottom: 2px solid #dee2e6;
      }
      .table-bordered td,
      .table-bordered th {
          border: 1px solid #dee2e6;
      }

      .bg-sky.box-shadow {
          box-shadow: 0px 5px 0px 0px #00a2a7;
      }

      .bg-orange.box-shadow {
          box-shadow: 0px 5px 0px 0px #af4305;
      }

      .bg-green.box-shadow {
          box-shadow: 0px 5px 0px 0px #4ca520;
      }

      .bg-yellow.box-shadow {
          box-shadow: 0px 5px 0px 0px #dcbf02;
      }

      .bg-pink.box-shadow {
          box-shadow: 0px 5px 0px 0px #e82d8b;
      }

      .bg-purple.box-shadow {
          box-shadow: 0px 5px 0px 0px #8343e8;
      }

      .bg-lightred.box-shadow {
          box-shadow: 0px 5px 0px 0px #d84213;
      }

      .bg-sky {
          background-color: #02c2c7;
      }

      .bg-orange {
          background-color: #e95601;
      }

      .bg-green {
          background-color: #5bbd2a;
      }

      .bg-yellow {
          background-color: #f0d001;
      }

      .bg-pink {
          background-color: #ff48a4;
      }

      .bg-purple {
          background-color: #9d60ff;
      }

      .bg-lightred {
          background-color: #ff5722;
      }

      .padding-15px-lr {
          padding-left: 80px;
          padding-right: 80px;
      }
      .padding-5px-tb {
          padding-top: 5px;
          padding-bottom: 5px;
      }
      .margin-10px-bottom {
          margin-bottom: 10px;
      }
      .border-radius-5 {
          border-radius: 5px;
      }

      .margin-10px-top {
          margin-top: 10px;
          overflow: hidden;
          width: 80%;
          display: inline-block;
          text-overflow: ellipsis;
          white-space: nowrap;
      }
      .font-size14 {
          font-size: 14px;
      }

      .text-light-gray {
          color: #d6d5d5;
      }
      .font-size13 {
          font-size: 13px;
      }

      .table-bordered td,
      .table-bordered th {
          border: 1px solid #dee2e6;
      }
      .table td,
      .table th {
          padding: 0.75rem;
          vertical-align: top;
          border-top: 1px solid #dee2e6;
      }

    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('container'); ?>
<?php if(session()->has('success')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> <?php echo e(session('success')); ?>

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>
<?php if(session()->has('error')): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Failed</strong> <?php echo e(session('error')); ?>

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>
<a href="<?php echo e(route('class-schedule.create')); ?>" class="btn btn-primary">Add Class Schedule</a>
  <div class="table-responsive">
      <table class="table table-bordered mt-4">
          <thead>
              <tr class="bg-light-gray text-center">
                  <th class="text-uppercase">Lab/Day<br /></th>
                  <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th class="text-uppercase"><?php echo e($day); ?><br /></th>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $labs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                  <td class="align-middle"><?php echo e($lab->name); ?></td>
                  <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td class="position-relative">
                      <?php $__currentLoopData = $classSchedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php if($schedule->lab_id == $lab->id && $schedule->day == strtolower($day)): ?>
                        <div class="margin-10px-top font-size14">
                            <span class="text-light-gray">| </span>
                              (<?php echo e(App\Utilities\TimeMappings::convertToLetter($schedule->start_time)); ?> - <?php echo e(App\Utilities\TimeMappings::convertToLetter($schedule->end_time)); ?>)
                              <strong>
                                <?php echo e($schedule->subject); ?>

                              </strong>
                             (<?php echo e($schedule->lecturer); ?>)
                        </div>
                        <button type="button" class="badge bg-primary border-0 position-absolute bottom-0 end-0 mb-1 me-1" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-three-dots" ></i></button>
                        <?php endif; ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
      </table>
  </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\simaru\resources\views/dashboard/class_schedule/index.blade.php ENDPATH**/ ?>