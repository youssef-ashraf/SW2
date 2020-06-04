
<?php $__env->startSection('styles'); ?>

<link rel="stylesheet" href="<?php echo e(asset('front/login')); ?>/login.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main>
         
<form id="msform"action="<?php echo e(route('front.login')); ?>" method="post" >
 
<?php echo e(csrf_field()); ?>

 
   <h2 class="fs-title">Login</h2>
   <input type="email"name='email' class="input-field" placeholder="User Email" required>
   <input type="password"name='pass' class="input-field" placeholder="User pass" required>
   <input type="submit"  class="next action-button" value="Login" />
   <a href="<?php echo e(route('front.reg')); ?>" class="next action-button" role="button" aria-pressed="true" >new_account</a> 
</form>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\catym\Desktop\github flight2\SW2\laravel\resources\views/front/login.blade.php ENDPATH**/ ?>