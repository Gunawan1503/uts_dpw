<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d0ee1fa2b0.js" crossorigin="anonymous"></script>

    <title>Form Login</title>
    <style>
    	h1 {
	text-align: center;
	font-weight: 300;
	}
	 
	.tulisan_login {
		color: #fff;
		text-align: center;
		text-transform: uppercase;
	}
	 
	.kotak_login {
		width: 400px;
		background: rgba(0,0,0,0.6);
		margin: 80px auto;
		padding: 30px 20px;
	}
	 
	.text-title {
		font-size: 12pt;
		color: #fff;
	}
	 
	.form_login{
		box-sizing : border-box;
		width: 100%;
		padding: 10px;
		font-size: 12pt;
		margin-bottom: 20px;
	}

	.btn {
		width: 100%;
	}
    </style>
 </head>
 <body style="background: url(sistem/resources/assets/bg.jpg); background-size: cover;">
  	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
		@include('templateAdmin.utils.notification')
		<form action="{{url('Login')}}" method="post">
			@csrf
			<label class="text-title">Email</label>
			<input type="email" name="email" class="form_login" placeholder="Email ..">
	 
			<label class="text-title">Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password ..">
	 
			<input type="submit" class="btn btn-outline-warning" value="LOGIN">
			<br><br>
			<p  style="color: #fff;">Don't have an account? <a class="link" href="{{ url('Register') }}">Sign Up</a></p>
		</form>	
	</div>
  	
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
   
  </body>
</html>