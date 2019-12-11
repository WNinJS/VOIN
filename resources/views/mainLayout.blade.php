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
			$(".mail").attr('placeholder', 'Enter your email');
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
	


</body>
</html>