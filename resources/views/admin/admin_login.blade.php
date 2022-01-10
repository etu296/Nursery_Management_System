<!-- <h1>created</h1>
<div class="container">
					<div class="login-page">
						<div class="login-form form">
							<div class="block-title">
								<h2 class="title"><span>Login</span></h2>
							</div>
						
							<form action="{{route('do.admin.login')}}" method="post" >
								@csrf
								<div class="form-group">
									<label>Email</label>
									<input type="email" value="" name="email">
								</div>
								
								<div class="form-group">
									<label>Password</label>
									<input type="password" value="" name="password">
								</div>
								
								
								
								<div class="form-group text-center">
									<input type="submit" class="btn btn-primary" value="Sign In">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div> -->
			
			<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{url('/css/login.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

<form action="{{route('do.admin.login')}}" method="post">
@csrf
  <div class="login">
 
<div class="title">Nursery Management System</div>
<div class="subtitle">Admin Panel</div>  
<div class="fields">
<div class="usur">
  <i class="far fa-user"></i>
    <input type="username" name="email" class="userinput" placeholder="username">
</div>
<div class="password">
  <i class="fas fa-key"></i>
  <input type="password" class="pass" name="password" placeholder="password">
</div>
</div>
<!-- <a href="{{route('do.admin.login')}}" method="post"> -->
<button class="btn">Login</button>
<!-- </a> -->

</div>
</form>
@if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            
</body>
</html>