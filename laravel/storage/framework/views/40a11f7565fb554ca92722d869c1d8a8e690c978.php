
<html>
   
   <head>
      <title>View The Flights</title>
      <style>
      /* Style inputs with type="text", select elements and textareas */
   input[type=text], select, textarea {
    width: 100%; /* Full width */
    padding: 12px; /* Some padding */ 
    border: 1px solid #ccc; /* Gray border */
    border-radius: 4px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 16px; /* Bottom margin */
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
  }
  
  /* Style the submit button with a specific background color etc */
  input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  /* When moving the mouse over the submit button, add a darker green color */
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  /* Add a background color and some padding around the form */
  .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }
      </style>
   </head>
   
   <body>
 <div class="container">
  <form  action="/reserve" method="post">
  <table border = 1>
         <tr>
            <td>ID</td>
            <td>from_country</td>
            <td>to_country</td>
            <td>start_Time</td>
            <td>end_time</td>
            <td>cost</td>
            <td>seat_num</td>
            
         </tr>
         <?php $__currentLoopData = $flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
         
            <td><input type="radio" name="flight" value="<?php echo e($flight->id); ?>"> <?php echo e($flight->id); ?></td>
            <td><?php echo e($flight->from_country); ?></td>
            <td><?php echo e($flight->to_country); ?></td>
            <td><?php echo e($flight->start_time); ?></td>
            <td><?php echo e($flight->end_time); ?></td>
            <td><?php echo e($flight->cost); ?></td>
            <td><?php echo e($flight->seat_num); ?></td>
         </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
    <?php echo e(csrf_field()); ?>

    <label for="pass">Password</label>
    <input type="text" id="password" name="password" placeholder="Your PASSWORD...">
    <label for="email">e-mail</label>
    <input type="text" id="email" name="email" placeholder="Your E-MAIL...">
    <label for="lname">Visa Number</label>
    <input type="text" id="visa_num" name="visa_num" placeholder="Your VISA NUMBER(should be 16 number)..">
    <label for="lname">Visa password</label>
    <input type="text" id="visa_pass" name="visa_pass" placeholder="Your VISA PASSWORD..">
    <label for="seat" >choose seat</label>
    <select id="seat" name="seat">
      <option value="Normal">normal</option>
      <option value="Vip">vip</option>
    </select>
    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    <input type="submit" value="Submit"> 
  </form>
</div>
   </body>
</html>


<?php /**PATH C:\Users\catym\Desktop\flight github\SW2\laravel\resources\views/flight_views/addTicket.blade.php ENDPATH**/ ?>