<?php $__env->startSection('container'); ?>
<div id="calendar"></div>

<?php $__env->startPush('scripts'); ?>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>

 <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid/main.css" rel="stylesheet" />

<script> 
 document.addEventListener('DOMContentLoaded', function () {
     var calendarEl = document.getElementById('calendar');
     var calendar = new FullCalendar.Calendar(calendarEl, {
         initialView: 'timeGridWeek',
         slotMinTime: '07:00:00',
         slotMaxTime: '20:00:00',
         events: <?php echo json_encode($events, 15, 512) ?>,
         selectable: true
     });
     calendar.render();
 });
</script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\simaru\resources\views/lab/index.blade.php ENDPATH**/ ?>