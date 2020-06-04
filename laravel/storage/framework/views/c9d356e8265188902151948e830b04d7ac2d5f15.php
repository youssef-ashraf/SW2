
<?php $__env->startSection('styles'); ?>

<link rel="stylesheet" href="<?php echo e(asset('front/css')); ?>/form.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Engoy your Flight</span>
                            <h2>Your Ticket</h2>
                        </div>
                    </div>
                </div>
<table border = 1>
         <tr>
         <th>ID</th>

        <th>From Country</th>
        <th>To Country</th>
        <th>Take Off Date</th>
        <th>Take Off Time</th>
        <th>Land Date</th> 
        <th>Land Time</th>
        <th>Seat Type</th>
        <th>Seat Number</th>
        <th>Seat Cost</th> 
         </tr>
         <tr>
         
            <td> <?php echo e($ticket->id); ?></td>
                      <td><?php echo e($ticket->from_country); ?></td>
                      <td><?php echo e($ticket->to_country); ?></td>
                      <td><?php echo e($ticket->take_off_date); ?></td>
            <td><?php echo e($ticket->take_off_time); ?></td>
            <td><?php echo e($ticket->land_date); ?></td>
                      <td><?php echo e($ticket->land_time); ?></td>
                    
                     
                      <td><?php echo e($ticket->seat_type); ?></td>
            <td><?php echo e($ticket->seat_num); ?></td>
            <td><?php echo e($ticket->cost); ?></td>  
         </tr>
      </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\catym\Desktop\github flight2\SW2\laravel\resources\views/front/ticket.blade.php ENDPATH**/ ?>