
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
  
  <form  action="/register" method="post">
  <table border = 1>
    <?php echo e(csrf_field()); ?>

    <label for="name">name</label>
    <input type="text" id="name" name="name" placeholder="Your name...">
    <label for="email">e-mail</label>
    <input type="text" id="email" name="email" placeholder="Your E-MAIL...">
    <label for="pass">password</label>
    <input type="text" id="password" name="password" placeholder="Your password(should be 16 number)..">
    <input type="submit" value="Submit"> 
  </form>
</div>
   </body>
</html>

<?php /**PATH C:\Users\catym\Desktop\flight github\SW2\laravel\resources\views/form.blade.php ENDPATH**/ ?>