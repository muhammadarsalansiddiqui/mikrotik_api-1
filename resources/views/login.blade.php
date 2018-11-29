<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mikrotik Login</title>
	<link href= "{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href= "{{ asset('css/datepicker3.css') }}" rel="stylesheet">
	<link href= "{{ asset('css/styles.css') }}" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-primary">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					<form role="form" action="/home" method="post">
						{{ csrf_field() }}
						<fieldset>
							<div class="form-group">
								<span class="label label-primary">Hostname</span>
								<input class="form-control" placeholder="Hostname" name="hostname" type="text" autofocus="" required>
							</div>
							<div class="form-group">
									<span class="label label-primary">Username</span>
								<input class="form-control" placeholder="username" name="username" type="text" value="" required>
							</div>
							<div class="form-group">
									<span class="label label-primary">Password</span>
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>


							<button type="submit" name="Login" class="btn btn-primary pull-right">Login</button>
							</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->


<script src= "{{ asset('js/jquery-1.11.1.min.js') }}"></script>
	<script src= "{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
