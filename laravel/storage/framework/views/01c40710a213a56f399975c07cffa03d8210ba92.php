

<?php $__env->startSection('styles'); ?>

<link rel="stylesheet" href="<?php echo e(asset('front/login')); ?>/login.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main>


<form id="msform" action="<?php echo e(route('front.register')); ?>" method="post" >
 
<?php echo e(csrf_field()); ?>

    <h2 class="fs-title">Registeration</h2>
    <input type="text" name="name" class="input-field" placeholder="User Name" required>
    <input type="email" name="email"class="input-field" placeholder="Email " required>
    <input type="password" name="password"class="input-field" placeholder="Pass" required>
	<input type="submit" class="next action-button" value="register"> 
  
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\catym\Desktop\flight github\SW2\laravel\resources\views/front/register.blade.php ENDPATH**/ ?>