<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Template</title>

   
    <link rel="stylesheet" href="<?php echo e(URL::asset('school/css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(URL::asset('school/css/style.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(URL::asset('school/css/font-awesome.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(URL::asset('school/css/admin.css')); ?>" />


    <script type="text/javascript" src="<?php echo e(URL::asset('school/js/jquery.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('school/js/bootstrap.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('school/js/main.js')); ?>"></script>


 


    



  
  </head>

  <body>

<div class="container">
  <h2>Welcome Admin Login</h2>


<?php echo e(Form::open(['url' => 'login2'])); ?>


<?php echo e(Form::label('email', 'E-Mail Address')); ?>


<?php echo e(Form::text('email')); ?>


<?php echo e(Form::label('password', 'password')); ?>


<?php echo e(Form::text('password')); ?>


<?php echo e(Form::submit('Login')); ?>



<?php echo e(Form::close()); ?>



 
</body>
    


</html>