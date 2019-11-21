<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>

	<!-- Adaptive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- My CSS -->
	<link rel="stylesheet" href="styles/admin.css">

</head>
<body>

	@if(session('error'))
		<h1 class="text-center">{{Session::get('error')}}</h1>
	@endif
	<!-- MAIN SCREEEN OPEN -->
	<div class="container-fluid">
		<div class="main-screen d-flex justify-content-center align-items-center">
			<div class="container">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col-12 d-flex flex-column justify-content-center align-items-center">
						<img class="logo" src="{{asset('/images/logodark.png')}}" alt="logo">
						<form method="POST" class="d-flex flex-row" action="login/tryLogin">
							{{ csrf_field() }}
							<div class="inputs">
								<input class="username" type="text" placeholder="Username" required name="login">
								<input class="password" type="password" placeholder="Password" required name="password">
							</div>
							<button type="submit">
								<img class="login-logo" src="images/login.png" alt="login">
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function login() {
			location.href="adminindex.html";
		}
	</script>

	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>