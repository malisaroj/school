<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Template</title>

   
    <link rel="stylesheet" href="{{ URL::asset('school/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('school/css/style.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('school/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('school/css/admin.css') }}" />


    <script type="text/javascript" src="{{ URL::asset('school/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('school/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('school/js/main.js') }}"></script>


 


    



  
  </head>

  <body>

<div class="container">
  <h2>Welcome Admin Login</h2>


{{ Form::open(['url' => 'login2']) }}

{{ Form::label('email', 'E-Mail Address') }}

{{ Form::text('email') }}

{{ Form::label('password', 'password') }}

{{ Form::text('password') }}

{{ Form::submit('Login') }}


{{ Form::close() }}


 
</body>
    


</html>