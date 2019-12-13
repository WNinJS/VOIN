<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Adminpanel</title>

	<!-- Adaptive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- My CSS -->
	<link rel="stylesheet" href="{{asset('styles/admin.css')}}">

	<!-- Favicons -->
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon.png')}}images/favicon.png">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}images/favicon.png">

</head>

<body>

	<div class="container-fluid">
		<!-- navbar -->
		<nav class="navbar d-flex justify-content-between align-items-center">
			<a class="navbar-brand" href="/"> <img src="{{asset('images/logodark.png')}}" alt="logo"></a>
			<div class="profile d-flex align-items-center justify-content-center">

				<p> {{Session::get('login')}}</p>
				<button class="profile-settings"></button>
			</div>

		</nav>
		<!-- navbar -->

		<div class="menu d-flex flex-row justify-content-between">
			<div class="row w-100">

				<!-- menu -->
				<div class="col-4 col-sm-4 col-md-3 col-xl-3 col-lg-4">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

						<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Главная</a>

						<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Для домашних</a>

						<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Для боевых</a>

						<a class="nav-link" id="v-pills-govs-tab" data-toggle="pill" href="#v-pills-govs" role="tab" aria-controls="v-pills-govs" aria-selected="false">Для государства</a>

						<a class="nav-link" id="v-pills-hometickets-tab" data-toggle="pill" href="#v-pills-hometickets" role="tab" aria-controls="v-pills-hometickets" aria-selected="false">Заявки на комплекс для домашних</a>

						<a class="nav-link" id="v-pills-wartickets-tab" data-toggle="pill" href="#v-pills-wartickets" role="tab" aria-controls="v-pills-wartickets" aria-selected="false">Заявки на комплекс для бизнеса</a>

						<a class="nav-link" id="v-pills-govtickets-tab" data-toggle="pill" href="#v-pills-govtickets" role="tab" aria-controls="v-pills-govtickets" aria-selected="false">Заявки на комплекс для государства</a>

						<a class="nav-link" id="v-pills-govemp-tab" data-toggle="pill" href="#v-pills-govemp" role="tab" aria-controls="v-pills-govemp" aria-selected="false">Подтвердить доступ госс. сотрудников</a>

					</div>
				</div>
				<!-- menu -->

				<!-- content -->
				<div class="col-8 col-sm-8 col-md-9 cl-xl-9 col-lg-8">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="complex">
								<h1>Комплекс</h1>
								<div class="general-block d-flex flex-column">
									@foreach ($complexes as $complex) 
										<div class="complex-item d-flex flex-column">
											<h6>{{$complex->name}}</h6>
											<a data-toggle="modal" href="#edit-complex-modal-{{$complex->id}}">Редактировать описание</a>
										</div>
									@endforeach
								</div>
							</div>
						</div>



						<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							<div class="opportunities">
								<h1>Возможности комплекса для домашних собак</h1>
								<div class="row align-items-center">
									@foreach ($home[0]->capabilities as $hom)
										
										<div class="card col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 d-flex text-center flex-column align-items-center justify-content-center">
											<div class="image">
												<img src="{{asset('storage/'.$hom->icon)}}" alt="Card image cap">
											</div>
											
											<p class="card-text">{{$hom->desc}}</p>
											<div class="btns-opportunities d-flex flex-row justify-content-around align-items-center">
												<form action="adminpanel/cap/delete/{{$hom->id}}" method="post">
													{{ csrf_field() }}
													<button class="btn-delete" type="submit"></button>
												</form>
												
												<button data-toggle="modal" data-target="#edit-opportunites-modal-{{$hom->id}}" class="btn-edit"></button>
											</div>
										</div>											
									@endforeach
									<button data-toggle="modal" data-target="#add-opportunites-modal" class="btn-add"></button>
								</div>
							</div>
						</div>
						

						<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
							<div class="opportunities">
								<h1>Возможности комплекса для боевых собак</h1>
								<div class="row align-items-center">
									@foreach ($warDogs[0]->capabilities as $war)
										
										<div class="card col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 text-center flex-column align-items-center d-flex justify-content-center">
											<div class="image">
												<img src="{{asset('storage/'.$war->icon)}}" alt="Card image cap">
											</div>
											<p class="card-text">{{$war->desc}}</p>
											<div class="btns-opportunities d-flex flex-row justify-content-around align-items-center">
												<form action="adminpanel/cap/delete/{{$war->id}}" method="post">
													{{ csrf_field() }}
													<button class="btn-delete" type="submit"></button>
												</form>
												
												<button data-toggle="modal" data-target="#edit-opportunites-modal-{{$war->id}}" class="btn-edit"></button>
											</div>
										</div>											
									@endforeach
									<button data-toggle="modal" data-target="#add-opportunites-modal-war" class="btn-add"></button>
								</div>
							</div>
						</div>


						<!-- Коля тут просто свой код измени чтобы выводилось все для государственных собак, удалять я старый не стал, потому что там просто тебе хуйня поменять как я понимаю -->
						<div class="tab-pane fade" id="v-pills-govs" role="tabpanel" aria-labelledby="v-pills-govs-tab">
							<div class="opportunities">
								<h1>Возможности комплекса для госудаственных собак</h1>
								<div class="row align-items-center">
									@foreach ($warDogs[0]->capabilities as $war)
										<div class="card col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 text-center flex-column align-items-center d-flex justify-content-center">
											<div class="image">
												<img src="{{asset('storage/'.$war->icon)}}" alt="Card image cap">
											</div>
											<p class="card-text">{{$war->desc}}</p>
											<div class="btns-opportunities d-flex flex-row justify-content-around align-items-center">
												<form action="adminpanel/cap/delete/{{$war->id}}" method="post">
													{{ csrf_field() }}
													<button class="btn-delete" type="submit"></button>
												</form>
												
												<button data-toggle="modal" data-target="#edit-opportunites-modal-{{$war->id}}" class="btn-edit"></button>
											</div>
										</div>											
									@endforeach
									<button data-toggle="modal" data-target="#add-opportunites-modal-war" class="btn-add"></button>
								</div>
							</div>
						</div>
						<!-- Коля тут просто свой код измени чтобы выводилось все для государственных собак, удалять я старый не стал, потому что там просто тебе хуйня поменять как я понимаю -->



						<!-- Заявки на заказ комплекса для домашних собак -->
						<div class="tab-pane fade" id="v-pills-hometickets" role="tabpanel" aria-labelledby="v-pills-hometickets-tab">
							<div class="complex">
								<h1>Заявки на заказ комплекса для домашних собак</h1>
								<div class="row align-items-center">
									<div class="card col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 d-flex text-center flex-column align-items-center justify-content-center">
										<p class="card-text"><strong>Имя:</strong> user</p>
										<p class="card-text"><strong>Фамилия:</strong> user</p>
										<p class="card-text"><strong>Email</strong>: user@user</p>
										<p class="card-text"><strong>Телефон</strong> 35235235</p>
										<div class="btns-opportunities d-flex flex-row justify-content-around align-items-center">
											<form method="post">
												<!-- удаление заявки -->
												<button class="btn-delete" type="submit"></button>
											</form>
										</div>
									</div>				

									<div class="card col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 d-flex text-center flex-column align-items-center justify-content-center">
										<p class="card-text"><strong>Имя:</strong> user</p>
										<p class="card-text"><strong>Фамилия:</strong> user</p>
										<p class="card-text"><strong>Email</strong>: user@user</p>
										<p class="card-text"><strong>Телефон</strong> 35235235</p>
										<div class="btns-opportunities d-flex flex-row justify-content-around align-items-center">
											<form method="post">
												<!-- удаление заявки -->
												<button class="btn-delete" type="submit"></button>
											</form>
										</div>
									</div>			

									<div class="card col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 d-flex text-center flex-column align-items-center justify-content-center">
										<p class="card-text"><strong>Имя:</strong> user</p>
										<p class="card-text"><strong>Фамилия:</strong> user</p>
										<p class="card-text"><strong>Email</strong>: user@user</p>
										<p class="card-text"><strong>Телефон</strong> 35235235</p>
										<div class="btns-opportunities d-flex flex-row justify-content-around align-items-center">
											<form method="post">
												<!-- удаление заявки -->
												<button class="btn-delete" type="submit"></button>
											</form>
										</div>
									</div>										
								</div>
							</div>
						</div>
						<!-- Заявки на заказ комплекса для домашних собак -->




						<!-- Заявки на заказ комплекса для бизнеса собак -->
						<div class="tab-pane fade" id="v-pills-wartickets" role="tabpanel" aria-labelledby="v-pills-wartickets-tab">
							<div class="complex">
								<h1>Заявки на заказ комплекса для бизнеса</h1>
								<div class="row align-items-center">
									<div class="card col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 d-flex text-center flex-column align-items-center justify-content-center">
										<p class="card-text"><strong>Имя:</strong> new</p>
										<p class="card-text"><strong>Фамилия:</strong> new</p>
										<p class="card-text"><strong>Email</strong>: new@user</p>
										<p class="card-text"><strong>Телефон</strong> 66666</p>
										<div class="btns-opportunities d-flex flex-row justify-content-around align-items-center">
											<form method="post">
												<!-- удаление заявки -->
												<button class="btn-delete" type="submit"></button>
											</form>
										</div>
									</div>	

									<div class="card col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 d-flex text-center flex-column align-items-center justify-content-center">
										<p class="card-text"><strong>Имя:</strong> new</p>
										<p class="card-text"><strong>Фамилия:</strong> new</p>
										<p class="card-text"><strong>Email</strong>: new@user</p>
										<p class="card-text"><strong>Телефон</strong> 66666</p>
										<div class="btns-opportunities d-flex flex-row justify-content-around align-items-center">
											<form method="post">
												<!-- удаление заявки -->
												<button class="btn-delete" type="submit"></button>
											</form>
										</div>
									</div>	

									<div class="card col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 d-flex text-center flex-column align-items-center justify-content-center">
										<p class="card-text"><strong>Имя:</strong> new</p>
										<p class="card-text"><strong>Фамилия:</strong> new</p>
										<p class="card-text"><strong>Email</strong>: new@user</p>
										<p class="card-text"><strong>Телефон</strong> 66666</p>
										<div class="btns-opportunities d-flex flex-row justify-content-around align-items-center">
											<form method="post">
												<!-- удаление заявки -->
												<button class="btn-delete" type="submit"></button>
											</form>
										</div>
									</div>											
								</div>
							</div>
						</div>
						<!-- Заявки на заказ комплекса для бизнеса собак -->




						<!-- Заявки на заказ комплекса для государства собак -->
						<div class="tab-pane fade" id="v-pills-govtickets" role="tabpanel" aria-labelledby="v-pills-govtickets-tab">
							<div class="complex">
								<h1>Заявки на заказ комплекса для государства</h1>
								<div class="row align-items-center">
									<div class="card col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 d-flex text-center flex-column align-items-center justify-content-center">
										<p class="card-text"><strong>Имя:</strong> Шойгу</p>
										<p class="card-text"><strong>Фамилия:</strong> Шойгу</p>
										<p class="card-text"><strong>Email</strong>: Шойгу@user</p>
										<p class="card-text"><strong>Телефон</strong> 23414</p>
										<div class="btns-opportunities d-flex flex-row justify-content-around align-items-center">
											<form method="post">
												<!-- удаление заявки -->
												<button class="btn-delete" type="submit"></button>
											</form>
										</div>
									</div>				

									<div class="card col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 d-flex text-center flex-column align-items-center justify-content-center">
										<p class="card-text"><strong>Имя:</strong> Шойгу</p>
										<p class="card-text"><strong>Фамилия:</strong> Шойгу</p>
										<p class="card-text"><strong>Email</strong>: Шойгу@user</p>
										<p class="card-text"><strong>Телефон</strong> 23414</p>
										<div class="btns-opportunities d-flex flex-row justify-content-around align-items-center">
											<form method="post">
												<!-- удаление заявки -->
												<button class="btn-delete" type="submit"></button>
											</form>
										</div>
									</div>			

									<div class="card col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 d-flex text-center flex-column align-items-center justify-content-center">
										<p class="card-text"><strong>Имя:</strong> Шойгу</p>
										<p class="card-text"><strong>Фамилия:</strong> Шойгу</p>
										<p class="card-text"><strong>Email</strong>: Шойгу@user</p>
										<p class="card-text"><strong>Телефон</strong> 23414</p>
										<div class="btns-opportunities d-flex flex-row justify-content-around align-items-center">
											<form method="post">
												<!-- удаление заявки -->
												<button class="btn-delete" type="submit"></button>
											</form>
										</div>
									</div>										
								</div>
							</div>
						</div>
						<!-- Заявки на заказ комплекса для государства собак -->



						<!-- Проверка и подтверждение аккаунтов гос.структур -->
						<!-- После того как аккаунт подтвержден, кнопка подтверждения пропадает, остается только кнопка удалить -->
						<div class="tab-pane fade" id="v-pills-govemp" role="tabpanel" aria-labelledby="v-pills-govgovemp-tab">
							<div class="gov-employes">
								<h1>Проверка и подтверждение аккаунтов гос.структур</h1>
								<div class="row align-items-center">
									<div class="card col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 d-flex text-center flex-column align-items-center justify-content-center">
										<div class="btns-save">
											<!-- в href нужно засунуть файл, который можно будет скачать -->
											<a class="save-link" href="{{asset('images/docs.png')}}" download>Карта</a>
											<a class="save-link" href="{{asset('images/docs.png')}}" download>Письмо</a>
											<!-- в href нужно засунуть файл, который можно будет скачать -->
										</div>
										<p class="card-text"><strong>Имя:</strong> Шойгу</p>
										<p class="card-text"><strong>Фамилия:</strong> Шойгу</p>
										<p class="card-text"><strong>Email</strong>: Шойгу@user</p>
										<p class="card-text"><strong>Телефон</strong> 23414</p>
										<div class="btns-opportunities d-flex flex-row justify-content-around align-items-center">
											<form method="post">

												<!-- удаление заявки -->
												<button class="btn-delete" type="submit"></button>

												<!-- по нажатию на эту кнопку аккаунт будет подтвержедн -->
												<button class="btn-accept" type="submit"></button>
												<!-- по нажатию на эту кнопку аккаунт будет подтвержедн -->

											</form>
										</div>
									</div>	

									<div class="card col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 d-flex text-center flex-column align-items-center justify-content-center">
										<div class="btns-save">
											<!-- в href нужно засунуть файл, который можно будет скачать -->
											<a class="save-link" href="{{asset('images/docs.png')}}" download>Карта</a>
											<a class="save-link" href="{{asset('images/docs.png')}}" download>Письмо</a>
											<!-- в href нужно засунуть файл, который можно будет скачать -->
										</div>
										<p class="card-text"><strong>Имя:</strong> Шойгу</p>
										<p class="card-text"><strong>Фамилия:</strong> Шойгу</p>
										<p class="card-text"><strong>Email</strong>: Шойгу@user</p>
										<p class="card-text"><strong>Телефон</strong> 23414</p>
										<div class="btns-opportunities d-flex flex-row justify-content-around align-items-center">
											<form method="post">

												<!-- удаление заявки -->
												<button class="btn-delete" type="submit"></button>

												<!-- по нажатию на эту кнопку аккаунт будет подтвержедн -->
												<button class="btn-accept" type="submit"></button>
												<!-- по нажатию на эту кнопку аккаунт будет подтвержедн -->

											</form>
										</div>
									</div>	

									<div class="card col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 d-flex text-center flex-column align-items-center justify-content-center">
										<div class="btns-save">
											<!-- в href нужно засунуть файл, который можно будет скачать -->
											<a class="save-link" href="{{asset('images/docs.png')}}" download>Карта</a>
											<a class="save-link" href="{{asset('images/docs.png')}}" download>Письмо</a>
											<!-- в href нужно засунуть файл, который можно будет скачать -->
										</div>
										<p class="card-text"><strong>Имя:</strong> Шойгу</p>
										<p class="card-text"><strong>Фамилия:</strong> Шойгу</p>
										<p class="card-text"><strong>Email</strong>: Шойгу@user</p>
										<p class="card-text"><strong>Телефон</strong> 23414</p>
										<div class="btns-opportunities d-flex flex-row justify-content-around align-items-center">
											<form method="post">
												<!-- удаление доступа -->
												<button class="btn-delete" type="submit"></button>
											</form>
										</div>
									</div>											
								</div>
							</div>
						</div>
						<!-- Проверка и подтверждение аккаунтов гос.структур -->

					</div>
				</div>
				<!-- content -->
			</div>
		</div>
	</div>


	<!-- edit opportunites modal open -->
	@foreach ($home[0]->capabilities as $hom)
		<div class="modal fade" id="edit-opportunites-modal-{{$hom->id}}" tabindex="-1" role="dialog" aria-labelledby="edit-opportunites-modalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="edit-opportunites-modalLabel">Редактирование возможности</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
	
					<form method="POST" action="adminpanel/cap/update/{{$hom->id}}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="modal-body">
							<div class="complex-description">
								<h6>Описание</h6>
								<textarea class="textarea-style" required name="desc">{{$hom->desc}}></textarea>
							</div>
							<div class="file">
								<h6>Иконка</h6>
								<div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                  </div>
                  <div class="custom-file">
                    <input type="file" class="file custom-file-input" id="inputGroupFile01"
                     aria-describedby="inputGroupFileAddon01" required name="icon">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                  </div>
                </div>
							</div>
						</div>
	
						<div class="modal-footer d-flex justify-content-between">
							<button type="button" class="btn" data-dismiss="modal">Закрыть</button>
							<button type="submit" class="btn">Сохранить изменения</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	@endforeach

	{{-- edit capabilities for war dogs  --}}

	@foreach ($warDogs[0]->capabilities as $war)
		<div class="modal fade" id="edit-opportunites-modal-{{$war->id}}" tabindex="-1" role="dialog" aria-labelledby="edit-opportunites-modalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="edit-opportunites-modalLabel">Редактирование возможности</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<form method="POST" action="adminpanel/cap/update/{{$war->id}}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="modal-body">
							<div class="complex-description">
								<h6>Описание</h6>
								<textarea class="textarea-style" required name="desc">{{$war->desc}}></textarea>
							</div>
							<div class="file">
								<h6>Иконка</h6>
								<div class="input-group">
			                        <div class="input-group-prepend">
			                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
			                        </div>
			                        <div class="custom-file">
			                            <input type="file" class="file custom-file-input" id="inputGroupFile01"
			                            aria-describedby="inputGroupFileAddon01" required name="icon">
			                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
			                        </div>
			                    </div>
							</div>
						</div>

						<div class="modal-footer d-flex justify-content-between">
							<button type="button" class="btn" data-dismiss="modal">Закрыть</button>
							<button type="submit" class="btn">Сохранить изменения</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	@endforeach
	<!-- edit opportunites open -->



	<!-- add opportunites for homeDogs modal open -->
	<div class="modal fade" id="add-opportunites-modal" tabindex="-1" role="dialog" aria-labelledby="add-opportunites-modalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="add-opportunites-modalLabel">Добавление возможности</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<form method="POST" action="adminpanel/caps/addNew" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="modal-body">
						<div class="opportunity-description">
							<h6>Описание</h6>
							<textarea class="textarea-style" required name="desc"></textarea>
						</div>
						<div class="file">
							<h6>Иконка</h6>

							<div class="input-group">
		                        <div class="input-group-prepend">
		                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
		                        </div>
		                        <div class="custom-file">
		                            <input type="file" class="file custom-file-input" id="inputGroupFile01"
		                            aria-describedby="inputGroupFileAddon01" required name="homeDogIcon">
		                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
		                        </div>
		                    </div>

						</div>
					</div>

					<div class="modal-footer d-flex justify-content-between">
						<button type="button" class="btn" data-dismiss="modal">Закрыть</button>
						<button type="submit" class="btn">Добавить</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="modal fade" id="add-opportunites-modal-war" tabindex="-1" role="dialog" aria-labelledby="add-opportunites-modalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="add-opportunites-modalLabel">Добавление возможности</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<form method="POST" action="adminpanel/caps/addNew-warDog" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="modal-body">
						<div class="opportunity-description">
							<h6>Описание</h6>
							<textarea class="textarea-style" required name="desc"></textarea>
						</div>
						<div class="file">
							<h6>Иконка</h6>
		                    <div class="input-group">
		                        <div class="input-group-prepend">
		                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
		                        </div>
		                        <div class="custom-file">
		                            <input type="file" class="file custom-file-input" name="homeDogIcon" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
		                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
		                        </div>
		                    </div>
						</div>
					</div>

					<div class="modal-footer d-flex justify-content-between">
						<button type="button" class="btn" data-dismiss="modal">Закрыть</button>
						<button type="submit" class="btn">Добавить</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- add opportunites modal open -->


	<!-- edit complex modal open -->
	@foreach ($complexes as $complex)
	<div class="modal fade" id="edit-complex-modal-{{$complex->id}}" tabindex="-1" role="dialog" aria-labelledby="edit-complex-modalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="edit-complex-modalLabel">Редактирование комплекса</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
	
					<form method="POST" action="adminpanel/complex/{{$complex->id}}/update" enctype="multipart/form-data">
						  {{ csrf_field() }}
						<div class="modal-body">
							<div class="complex-header">
								<h6>Название</h6>
								<textarea class="textarea-style" name="name" required>{{$complex->name}}</textarea>
							</div>
							<div class="complex-description">
								<h6>Описание</h6>
								<textarea class="textarea-style" name="description" required>{{$complex->description}}</textarea>
							</div>
							<div class="file" >
								<h6>Картинка</h6>
			                    <div class="input-group">
			                        <div class="input-group-prepend">
			                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
			                        </div>
			                        <div class="custom-file">
			                            <input type="file" class="file custom-file-input" name="img" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
			                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
			                        </div>
			                    </div>

							</div>
						</div>
	
						<div class="modal-footer d-flex justify-content-between">
							<button type="button" class="btn" data-dismiss="modal">Закрыть</button>
							<button type="submit" class="btn">Сохранить изменения</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	@endforeach

	<!-- edit complex modal open -->





	<script type="text/javascript">
		function logout() {
			location.href = "login.html";
		}
	</script>

	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>