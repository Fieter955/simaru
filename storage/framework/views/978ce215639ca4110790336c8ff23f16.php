<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
  <title>SIMARU</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body class="font-poppins bg-blue-400">
 <?php echo $__env->yieldContent('container'); ?>

 <script>
  localStorage.theme = 'light'
 </script>
</body>
</html><?php /**PATH C:\applications\simaru\resources\views/layouts/auth.blade.php ENDPATH**/ ?>