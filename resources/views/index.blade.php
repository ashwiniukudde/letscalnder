<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--Bootsrap 4 CDN-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{url('style.css')}}">
</head>
<body>
<div class="container-fluid">
<div class="row no-gutter">

<div class="col-md-8 col-lg-6">
<div class="login d-flex align-items-center py-5">
<div class="container">
<div class="row">
<div class="col-md-9 col-lg-8 mx-auto">
<h3 class="login-heading mb-4" align ="center" style="font-style:italic;">Register here!</h3>
<form action="{{url('post-registration')}}" method="POST" autocomplete="off" id="regForm" enctype="multipart/form-data">
@csrf
<div class="form-label-group">
 <input type="text" id="fname" name="fname" class="form-control" placeholder="Full name" autofocus value="{{ old('fname') }}">
<label for="inputName">First Name<span class="text-danger">*</span></label>

</div>
<div class="form-label-group">
<input type="text" id="lname" name="lname" class="form-control" placeholder="Full name" autofocus value="{{ old('lname') }}">
<label for="inputlname">Last Name<span class="text-danger">*</span></label>
  
</div> 
<div class="form-label-group">
<input type="email" name="email" id="email" class="form-control" placeholder="Email address" value="{{ old('email') }}">
<label for="inputEmail">Email address<span class="text-danger">*</span></label>
   
</div>
<button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign Up</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>