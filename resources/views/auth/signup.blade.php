<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Регистрация</title>

<!-- Adaptive -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- My CSS -->
<link rel="stylesheet" href="styles/admin.css">

<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png')}}">

</head>
<body>

<!-- MAIN SCREEEN OPEN -->
<div class="container-fluid-signup">
	<div class="main-screen-signup d-flex justify-content-center align-items-center">
		<div class="general-block-signup">
			<div class="left-block-signup">
				<img class="logo-signup" src="{{asset('/images/logowhite.png')}}" alt="logo">
				<div class="text-signup d-flex flex-column">
					<h1>Регистрация</h1>
					<h2>Создайте аккаунт, чтобы получить доступ</h2>
				</div>
				<p class="name-company-signup">Voice Intercommunication</p>
			</div>

			<div class="right-block-signup d-flex justify-content-center align-items-center">
				<form enctype="multipart/form-data" method="POST" class="d-flex flex-column align-items-center w-100" action="/signup" >
					{{ csrf_field() }}
					@if(session('roleError'))
						<div class="alert alert-danger" role="alert">{{Session::get('roleError')}}</div>
					@elseif(session('error'))
						<div class="alert alert-danger" role="alert">{{Session::get('error')}}</div>
					@endif
					<div class="inputs w-100 d-flex flex-column align-items-center justify-content-center">
						<input class="username" type="text" placeholder="Имя пользователя" required name="login">
						<input class="password" type="password" placeholder="Пароль" required name="password">
						<input class="name" type="text" placeholder="Имя" required name="firstName">
						<input class="secondname" type="text" placeholder="Фамилия" required name="secondName">
						<input class="email" type="email" placeholder="E-mail" required name="email">
						<input class="phone" type="phone" placeholder="Номер телефона" required name="phoneNumber">
						<div class="radio d-flex">
							<input id="radio-document-add" type="radio"
								onMouseDown="this.isChecked=this.checked;" 
								onClick="this.checked=!this.isChecked; checkRules()">
							<p>Я принимаю правила пользования сайтом</p>
						</div>

					</div>
					<button id="accept-rules-button" class="disabled-btn" type="submit" disabled>
						Зарегистрироваться
					</button>
				</form>
			</div>
			
		</div>
		<!-- <div class="container">
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
		</div> -->
	</div>
</div>

<script type="text/javascript">
	function checkRules() {
		const regButton = document.querySelector('#accept-rules-button');
		if (regButton.disabled) {
			deletebtnclass();
			regButton.disabled = this.checked;
			
		}
		else {
			addbtnclass();
			regButton.disabled=!this.checked;	
		}

		function deletebtnclass() {
			regButton.classList.remove('disabled-btn')
		}

		function addbtnclass() {
			regButton.classList.add('disabled-btn')
		}
		
	}
</script>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>