<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<!-- Adaptive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token()}}">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- My CSS -->
	<script
		src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		crossorigin="anonymous">
	</script>
	<link rel="stylesheet" href="{{ asset('styles/style.css') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png')}}">
</head>
<body>

	@yield('content')
	<!-- Bootstrap JS -->	
	<script type="text/javascript">

		if ($(".mail").val()===''){
			$(".mail").attr('placeholder', 'Введите email');
			$(".btn-submit").attr('disabled', true);
		}
		$(".mail").change(function(){
			$(".btn-submit").attr('disabled', false);
		});


		$(".btn-submit").click(function(e){

			//email.validation
			const val = $(".mail").val();
			const emailValid = val.match(/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/gm);
			if (emailValid == null){
				$('.mail').css('border','1px solid red');
				$('.mail').val('');
				$('.mail').attr('placeholder','Invalid email');
				return
			}			
			$('.btn-submit').html("<span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span><p>Loading...</p>");

			e.preventDefault();

			var email = $("input[name=mail]").val();

			$.ajax({

				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

				type:'POST',

				url:'/send-mail',

				data:
				{
					email:email
				},

				success:function(data){
					$('.btn-submit').html('Send');
					$('.msg').show();
					$('input[name=mail]').val('');
					$('.mail').css('border','1px solid green');
					$('.mail').attr('placeholder','Enter your email');
				}
			});
		});
	
		
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
	
	@if(session('user'))
	<div class="modal fade" id="account-info-modal" tabindex="-1" role="dialog" aria-labelledby="account-info-modalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="account-info-modalLabel">Информация об аккаунте</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body d-flex flex-column align-items-center">
					<div class="block-account-info d-flex justify-content-between align-items-center">
						<p><strong>Имя:  </strong>{{Session::get('user')->name}}</p>
						<button data-dismiss="modal" data-toggle="modal" data-target="#account-edit-name-modal" class="btn-edit"></button>
					</div>
					<div class="block-account-info d-flex justify-content-between align-items-center">
						<p><strong>Фамилия:  </strong>{{Session::get('user')->surname}} </p>
						<button data-dismiss="modal" data-toggle="modal" data-target="#account-edit-surname-modal"  class="btn-edit"></button>
					</div>
					<div class="block-account-info d-flex justify-content-between align-items-center">
						<p><strong>Email:  </strong>{{Session::get('user')->email}} </p>
						<button data-dismiss="modal" data-toggle="modal" data-target="#account-edit-email-modal" class="btn-edit"></button>
					</div>
					<div class="block-account-info d-flex justify-content-between align-items-center">
						<p><strong>Номер:  </strong>{{Session::get('user')->phone}} </p>
						<button data-dismiss="modal" data-toggle="modal" data-target="#account-edit-phone-modal" class="btn-edit"></button>
					</div>
					<div class="block-account-info d-flex justify-content-between align-items-center">
						<p><strong>Имя пользователя:  </strong>{{Session::get('user')->username}} </p>
						<button data-dismiss="modal" data-toggle="modal" data-target="#account-edit-username-modal" class="btn-edit"></button>
					</div>
					<div class="block-account-info d-flex justify-content-between align-items-center">
						<p><strong>Пароль:  </strong>********* </p>
						<button data-dismiss="modal" data-toggle="modal" data-target="#account-edit-password-modal" class="btn-edit"></button>
					</div>  
				</div>
				<div class="modal-footer">
					<button type="button" class="btn" data-dismiss="modal">Закрыть</button>
				</div>
			</div>
		</div>
  	</div>


	<!-- edit name modal -->
	<div class="modal fade edit-info-modal" id="account-edit-name-modal" tabindex="-1" role="dialog" aria-labelledby="account-edit-name-modalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="account-edit-name-modalLabel">Редактировать имя</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" action="/changename">
					{{csrf_field()}}
					<div class="modal-body d-flex flex-column align-items-center">
		  				<div class="block-account-info d-flex justify-content-between align-items-center">
							<p><strong>Old name:  </strong>{{Session::get('user')->name}}</p>
							<input type="text" class="account-info-input" placeholder="Новое имя" required name="new_name">
						</div>
					</div>

					<div class="modal-footer d-flex justify-content-between">
						<button type="button" data-toggle="modal" data-target="#account-info-modal" class="btn" data-dismiss="modal">Назад</button>
						<button type="submit" class="btn">Сохранить изменения</button>
					</div>
				</form>
			</div>
		</div>
  	</div>
  	<!-- edit name modal -->


  	<!-- edit name modal -->
	<div class="modal fade edit-info-modal" id="account-edit-surname-modal" tabindex="-1" role="dialog" aria-labelledby="account-edit-surname-modalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="account-edit-surname-modalLabel">Редактировать фамилию</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" action="/editsurname">
					{{csrf_field()}}
					<div class="modal-body d-flex flex-column align-items-center">
		  				<div class="block-account-info d-flex justify-content-between align-items-center">
							<p><strong>Старая фамилия:  </strong>{{Session::get('user')->surname}}</p>
							<input name="new_surname" type="text" class="account-info-input" placeholder="Новая фамилия" required>
						</div>
					</div>

					<div class="modal-footer d-flex justify-content-between">
						<button type="button" data-toggle="modal" data-target="#account-info-modal" class="btn" data-dismiss="modal">Назад</button>
						<button type="submit" class="btn">Сохранить изменения</button>
					</div>
				</form>
			</div>
		</div>
  	</div>
  	<!-- edit name modal -->


  	<!-- edit email modal -->
	<div class="modal fade edit-info-modal" id="account-edit-email-modal" tabindex="-1" role="dialog" aria-labelledby="account-edit-email-modalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="account-edit-email-modalLabel">Редактровать Email</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" action="/changeemail">
					{{csrf_field()}}
					<div class="modal-body d-flex flex-column align-items-center">
		  				<div class="block-account-info d-flex justify-content-between align-items-center">
							<p><strong>Старый email:  </strong>{{Session::get('user')->email}}</p>
							<input name="new_email "type="email" class="account-info-input" placeholder="Новый email" required>
						</div>
					</div>

					<div class="modal-footer d-flex justify-content-between">
						<button type="button" data-toggle="modal" data-target="#account-info-modal" class="btn" data-dismiss="modal">Назад</button>
						<button type="submit" class="btn">Сохранить изменения</button>
					</div>
				</form>
			</div>
		</div>
  	</div>
  	<!-- edit email modal -->


  	<!-- edit phone modal -->
	<div class="modal fade edit-info-modal" id="account-edit-phone-modal" tabindex="-1" role="dialog" aria-labelledby="account-edit-phone-modalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="account-edit-phone-modalLabel">Редактировать номер</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" action="/changephone">
					{{csrf_field()}}
					<div class="modal-body d-flex flex-column align-items-center">
		  				<div class="block-account-info d-flex justify-content-between align-items-center">
							<p><strong>Старый номер:  </strong>{{Session::get('user')->phone}}</p>
							<input name="new_phone"type="phone" class="account-info-input" placeholder="Новый номер" required>
						</div>
					</div>

					<div class="modal-footer d-flex justify-content-between">
						<button type="button" data-toggle="modal" data-target="#account-info-modal" class="btn" data-dismiss="modal">Назад</button>
						<button type="submit" class="btn">Сохранить изменения</button>
					</div>
				</form>
			</div>
		</div>
  	</div>
  	<!-- edit phone modal -->


  	<!-- edit username modal -->
	<div class="modal fade edit-info-modal" id="account-edit-username-modal" tabindex="-1" role="dialog" aria-labelledby="account-edit-username-modalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="account-edit-username-modalLabel">Редактировать имя пользователя</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" action="/changeusername">
					{{csrf_field()}}
					<div class="modal-body d-flex flex-column align-items-center">
		  				<div class="block-account-info d-flex justify-content-between align-items-center">
							<p><strong>Старое имя пользователя:  </strong>{{Session::get('user')->username}}</p>
							<input name="new_username" type="text" class="account-info-input" placeholder="Новое имя пользователя" required>
						</div>
					</div>

					<div class="modal-footer d-flex justify-content-between">
						<button type="button" data-toggle="modal" data-target="#account-info-modal" class="btn" data-dismiss="modal">Назад</button>
						<button type="submit" class="btn">Сохранить изменения</button>
					</div>
				</form>
			</div>
		</div>
  	</div>
  	<!-- edit username modal -->

  	<!-- edit password modal -->
	<div class="modal fade edit-info-modal" id="account-edit-password-modal" tabindex="-1" role="dialog" aria-labelledby="account-edit-password-modalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="account-edit-password-modalLabel">Редактировать пароль</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" action="changepassword">
					{{csrf_field()}}
					<div class="modal-body d-flex flex-column align-items-center">
		  				<div class="block-account-info d-flex justify-content-between align-items-center">
							<p><strong>Старый пароль:  </strong>****</p>
							<input type="password" class="account-info-input" placeholder="Новый пароль" required name="new_password">
						</div>
					</div>

					<div class="modal-footer d-flex justify-content-between">
						<button type="button" data-toggle="modal" data-target="#account-info-modal" class="btn" data-dismiss="modal">Назад</button>
						<button type="submit" class="btn">Сохранить изменение</button>
					</div>
				</form>
			</div>
		</div>
  	</div>
  	<!-- edit password modal -->
	@endif
	  <!-- account info modal -->
</body>
</html>