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

						<a class="nav-link" id="v-pills-about-tab" data-toggle="pill" href="#v-pills-about" role="tab" aria-controls="v-pills-about" aria-selected="true">О компании</a>

						<a class="nav-link" id="v-pills-materials-tab" data-toggle="pill" href="#v-pills-materials" role="tab" aria-controls="v-pills-materials" aria-selected="true">Материалы</a>

						<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Для домашних</a>

						<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Для боевых</a>

						<a class="nav-link" id="v-pills-govs-tab" data-toggle="pill" href="#v-pills-govs" role="tab" aria-controls="v-pills-govs" aria-selected="false">Для государства</a>

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

						<!-- Раздел About -->
						<div class="tab-pane fade" id="v-pills-about" role="tabpanel" aria-labelledby="v-pills-about-tab">
							<div class="opportunities">
								<h1>Команда</h1>
						        <div class="row d-flex justify-content-around align-items-start">
						            <div class="members-of-team d-flex flex-wrap justify-content-start align-items-center w-100">
										@foreach ($members as $member )
										<div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 member-block">
										<img class="member-photo" src="{{asset('storage/'.$member->photo)}}" alt="avatar">
						                    <h4>{{$member->fullname}}</h4>
						                    <h5>{{$member->position}}</h5>
						                    <div class="btns-opportunities d-flex flex-row justify-content-around align-items-center">
												<form method="POST" action="/adminpanel/deletemember/{{$member->id}}">
													{{ csrf_field() }}
							                    	<button class="btn-delete" type="submit"></button>
							                    </form>
												<button data-toggle="modal" data-target="#edit-team-modal-{{$member->id}}" class="btn-edit"></button>
						                    </div>
						                </div>
										@endforeach
										<button data-toggle="modal" data-target="#add-team-modal" class="btn-add"></button>
					                </div>
					            </div>
					        </div>
						</div>
						<!-- Раздел About -->


						<!-- Раздел Materials -->
						<div class="tab-pane fade" id="v-pills-materials" role="tabpanel" aria-labelledby="v-pills-materials-tab">
							<!-- Статьи -->
							<div class="opportunities">
								<h1>Статьи</h1>
								<div class="row d-flex justify-content-around align-items-start">
								  	<div class="general-articles d-flex flex-wrap justify-content-start align-items-center w-100">
								  		@foreach($articles as $article)
									      	<div class="sub-article col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
									          	<div class="article-block">
									              	<h4>{{$article->name}}</h4>
									              	<h5>{{mb_substr($article->created_at,0,10)}}</h5>
									              	<p>{{$article->description}}</p>
									              	<a data-toggle="modal" data-target="#article-modal-{{$article->id}}">Подробнее</a>
									          	</div>
									      	</div>
								  		@endforeach

									<button data-toggle="modal" data-target="#add-article-modal" class="btn-add"></button>
								  	</div>
								</div>  
					        </div>
					        <!-- Статьи -->

							<!-- Документы -->
							<div class="opportunities" style="margin-top: 40px">
								<h1>Документы</h1>
								<div class="row d-flex justify-content-around align-items-start">
					               	<div class="general-docs d-flex flex-wrap justify-content-start align-items-center w-100">

					               		@foreach($documents as $document)
						                  	<div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 doc-block d-flex flex-column justify-content-center align-items-center">
						                      	<img class="doc-icon" src="images/docs.png" alt="docs_png">
						                      	<h4>{{$document->name}}</h4>
						                      	<div class="btns-actions d-flex justify-content-around w-100">
						                      		<a class="d-flex justify-content-center align-items-center" href="{{asset('storage/'.$document->file)}}" download>Save</a>

							                      	<!-- удаление документа -->
							                      	<form method="post" action="adminpanel/deletedocument/{{$document->id}}">
							                      		{{csrf_field()}}
							                      		<button class="btn-delete" type="submit" style="margin: 0!important"></button>
							                      	</form>
						                      	</div>
						                      	

						                      	<!-- удаление документа -->
						                  	</div>
					               		@endforeach
										<button data-toggle="modal" data-target="#add-doc-modal" class="btn-add"></button>

					              	</div>
					          	</div>           
					        </div>
					        <!-- Документы -->

						</div>
						<!-- Раздел Materials -->


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
									@foreach ($goverDogs[0]->capabilities as $gover)
										<div class="card col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 text-center flex-column align-items-center d-flex justify-content-center">
											<div class="image">
												<img src="{{asset('storage/'.$gover->icon)}}" alt="Card image cap">
											</div>
											<p class="card-text">{{$gover->desc}}</p>
											<div class="btns-opportunities d-flex flex-row justify-content-around align-items-center">
												<form action="adminpanel/cap/delete/{{$gover->id}}" method="post">
													{{ csrf_field() }}
													<button class="btn-delete" type="submit"></button>
												</form>
												
												<button data-toggle="modal" data-target="#edit-opportunites-modal-{{$gover->id}}" class="btn-edit"></button>
											</div>
										</div>											
									@endforeach
									<button data-toggle="modal" data-target="#add-opportunites-modal-gover" class="btn-add"></button>
								</div>
							</div>
						</div>
						<!-- Коля тут просто свой код измени чтобы выводилось все для государственных собак, удалять я старый не стал, потому что там просто тебе хуйня поменять как я понимаю -->





						<!-- Проверка и подтверждение аккаунтов гос.структур -->
						<!-- После того как аккаунт подтвержден, кнопка подтверждения пропадает, остается только кнопка удалить -->
						<div class="tab-pane fade" id="v-pills-govemp" role="tabpanel" aria-labelledby="v-pills-govgovemp-tab">
							<div class="gov-employes">
								<h1>Проверка и подтверждение аккаунтов гос.структур</h1>
								<div class="row align-items-center">
									
									@foreach ($giveAccess as $give)
										<div class="card col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 d-flex text-center flex-column align-items-center justify-content-center">
											<div class="btns-save">
												<!-- в href нужно засунуть файл, который можно будет скачать -->
												<a class="save-link" href="{{asset('storage/'.$give->map)}}" download>Карта</a>
												<a class="save-link" href="{{asset('storage/'.$give->doc)}}" download>Письмо</a>
												<!-- в href нужно засунуть файл, который можно будет скачать -->
											</div>
											<p class="card-text"><strong>Имя:</strong> {{$give->username}}</p>
											<p class="card-text"><strong>Фамилия:</strong> {{$give->surname}}</p>
											<p class="card-text"><strong>Email</strong>: {{$give->email}}</p>
											<p class="card-text"><strong>Телефон</strong> {{$give->phone}}</p>
											<div class="btns-opportunities d-flex flex-row justify-content-around align-items-center">
												<form method="post" action="adminpanel/verifyUser/{{Session('user')->id}}">
													{{ csrf_field() }}
													<!-- удаление заявки -->
													<button class="btn-delete" type="submit"></button>
													<!-- по нажатию на эту кнопку аккаунт будет подтвержедн -->
													<button class="btn-accept" type="submit"></button>
													<!-- по нажатию на эту кнопку аккаунт будет подтвержедн -->
												</form>
											</div>
										</div>	
									@endforeach											
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
								<textarea class="textarea-style" required name="desc">{{$hom->desc}}</textarea>
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
								<textarea class="textarea-style" required name="desc">{{$war->desc}}</textarea>
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

	@foreach ($goverDogs[0]->capabilities as $gover)
		<div class="modal fade" id="edit-opportunites-modal-{{$gover->id}}" tabindex="-1" role="dialog" aria-labelledby="edit-opportunites-modalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="edit-opportunites-modalLabel">Редактирование возможности</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<form method="POST" action="adminpanel/cap/update/{{$gover->id}}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="modal-body">
							<div class="complex-description">
								<h6>Описание</h6>
								<textarea class="textarea-style" required name="desc">{{$gover->desc}}</textarea>
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

	<div class="modal fade" id="add-opportunites-modal-gover" tabindex="-1" role="dialog" aria-labelledby="add-opportunites-modalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="add-opportunites-modalLabel">Добавление возможности</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<form method="POST" action="adminpanel/caps/addNew-goverDog" enctype="multipart/form-data">
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
		                            <input type="file" class="file custom-file-input" name="goverDogIcon" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
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


	<!-- add team modal open -->
	<div class="modal fade" id="add-team-modal" tabindex="-1" role="dialog" aria-labelledby="add-team-modalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="add-team-modalLabel">Добавление члена команды</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<form method="POST" action="adminpanel/new_member" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="modal-body">
						<div class="opportunity-description">
							<h6>Имя и Фамилия</h6>
							<textarea class="textarea-style" required name='name'></textarea>
						</div>
						<div class="opportunity-description">
							<h6>Должность</h6>
							<textarea class="textarea-style" required name="position"></textarea>
						</div>
						<div class="file">
							<h6>Фото</h6>
		                    <div class="input-group">
		                        <div class="input-group-prepend">
		                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
		                        </div>
		                        <div class="custom-file">
		                            <input type="file" class="file custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required name="member_image">
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
	<!-- add team modal close -->



	<!-- edit team modal open -->
	@foreach ($members as $member)
		<div class="modal fade" id="edit-team-modal-{{$member->id}}" tabindex="-1" role="dialog" aria-labelledby="edit-team-modalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="edit-team-modalLabel">Редактирование члена команды</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<form method="POST" action="adminpanel/editmember/{{$member->id}}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="modal-body">
							<div class="opportunity-description">
								<h6>Имя и Фамилия</h6>
								<textarea class="textarea-style" required name="fullname">{{$member->fullname}}</textarea>
							</div>
							<div class="opportunity-description">
								<h6>Должность</h6>
								<textarea class="textarea-style" required name="position">{{$member->position}}</textarea>
							</div>
							<div class="file">
								<h6>Фото</h6>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
									</div>
									<div class="custom-file">
										<input type="file" class="file custom-file-input" name="avatar" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
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

	<!-- edit team modal close -->


	<!-- articles modal open -->
	@foreach($articles as $article)
		<div class="modal fade" id="article-modal-{{$article->id}}" tabindex="-1" role="dialog" aria-labelledby="article-modalLabel" aria-hidden="true">
		    <div class="modal-dialog modal-dialog-centered" role="document">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h5 class="modal-title" id="article-modalLabel">{{$article->name}}</h5>
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                    <span aria-hidden="true">&times;</span>
		                </button>
		            </div>
			        <div class="modal-body">
			            <p class="article-modal-desc">{{$article->description}}</p>
			            <img class="article-modal-img" src="{{asset('storage/'.$article->img)}}" alt="article_img">
			            <h5 class="article-modal-date">Дата публикации: {{mb_substr($article->created_at,0,10)}}</h5>
			        </div>
			        <div class="modal-footer d-flex align-items-center justify-content-between">
			        	<form style="width: 33%;" method="post" action='adminpanel/detelearticle/{{$article->id}}'>
			        		{{csrf_field()}}
			        		<button type="submit" class="btn" style="margin: 0!important; width: 100%;">Удалить</button>
			        	</form>
		          		<button type="button" style="width: 33%;" class="btn" data-toggle="modal" data-target="#edit-article-modal-{{$article->id}}
		          		" data-dismiss="modal">Редактировать</button>
			            <button type="button" style="width: 33%;" class="btn" data-dismiss="modal">Закрыть</button>
			        </div>
		        </div>
		    </div>
		</div>
	@endforeach

	<!-- articles modal close -->




	<!-- edit article modal open -->
	@foreach($articles as $article)
		<div class="modal fade" id="edit-article-modal-{{$article->id}}" tabindex="-1" role="dialog" aria-labelledby="edit-article-modalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="edit-article-modalLabel">Редактирование статьи</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<form method="POST" action="adminpanel/editarticle/{{$article->id}}" enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="modal-body">
							<div class="opportunity-description">
								<h6>Заголовок</h6>
								<textarea class="textarea-style" required name="name">{{$article->name}}</textarea>
							</div>
							<div class="opportunity-description">
								<h6>Содержание</h6>
								<textarea class="textarea-style" required name="description">{{$article->description}}</textarea>
							</div>
							<div class="file">
								<h6>Фото</h6>
			                    <div class="input-group">
			                        <div class="input-group-prepend">
			                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
			                        </div>
			                        <div class="custom-file">
			                            <input type="file" class="file custom-file-input" name="article_image" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
			                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
			                        </div>
			                    </div>
							</div>
						</div>

						<div class="modal-footer d-flex justify-content-between">
							<button type="button" class="btn" data-toggle="modal" data-target="#article-modal" data-dismiss="modal">Назад</button>
							<button type="submit" class="btn">Сохранить изменения</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	<!-- edit article modal close -->
	@endforeach



	<!-- add article modal open -->
	<div class="modal fade" id="add-article-modal" tabindex="-1" role="dialog" aria-labelledby="add-article-modalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="add-article-modalLabel">Добавление статьи</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<form method="POST" action='adminpanel/addarticle' enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="modal-body">
						<div class="opportunity-description">
							<h6>Заголовок</h6>
							<textarea class="textarea-style" required name="name"></textarea>
						</div>
						<div class="opportunity-description">
							<h6>Содержание</h6>
							<textarea class="textarea-style" required name="description"></textarea>
						</div>
						<div class="file">
							<h6>Фото</h6>
		                    <div class="input-group">
		                        <div class="input-group-prepend">
		                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
		                        </div>
		                        <div class="custom-file">
		                            <input type="file" class="file custom-file-input" 
		                             id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required name="article_image">
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
	<!-- add article modal close -->


	<!-- add doc modal open -->
	<div class="modal fade" id="add-doc-modal" tabindex="-1" role="dialog" aria-labelledby="add-doc-modalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="add-doc-modalLabel">Добавление документа</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<form method="POST" action="adminpanel/addnewdocument" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="modal-body">
						<div class="opportunity-description">
							<h6>Заголовок</h6>
							<textarea class="textarea-style" required name="name"></textarea>
						</div>
						<div class="file">
							<h6>Фото</h6>
		                    <div class="input-group">
		                        <div class="input-group-prepend">
		                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
		                        </div>
		                        <div class="custom-file">
		                            <input type="file" class="file custom-file-input" name="document" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
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
	<!-- add doc modal close -->



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