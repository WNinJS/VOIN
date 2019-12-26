@extends('mainLayout')

@section('title', 'Материалы')


@section('content')

<div class="container-fluid">

  <div class="main-screen-materials">

      <!-- navbar open -->
      @include('partials.header')
      <!-- navbar close -->


      <!-- description open -->
      <div class="container description d-flex justify-content-between">
          <div class="col-12">
              <h1 class="cursor-default">Материалы</h1>
              <p class="cursor-default">Статьи о собаках, о том, как триенировать и заботиться о них. Презентационные материалы комплекса</p>
              <a class="anchor" href="#articles"> <button >Подробнее</button> </a>          
            </div>
      </div>
      <!-- description close -->

  </div>



  <!-- articles open -->
  <div id="articles" class="articles text-center">
      <div class="container">
          <h2>Статьи</h2>
          <h3>Информация о собаках и уходе за ними</h3>

          <div class="row d-flex justify-content-around align-items-start">
              <div class="general-articles d-flex flex-wrap justify-content-between w-100">
              	    @foreach($articles as $article)
	                  <div class="sub-article col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
	                      <div class="article-block">
	                          <h4>{{$article->name}}</h4>
	                          <h5>{{mb_substr($article->created_at,0,10)}}</h5>
	                          <p>{{mb_substr($article->description,0,150)}}...</p>
	                          <a data-toggle="modal" data-target="#article-modal-{{$article->id}}">Подробнее</a>
	                      </div>
	                  </div>
                  	@endforeach
              </div>
          </div>  
          <hr>
      </div>
  </div>
  <!-- articles close -->


  <!-- documentation open -->
  <div class="documentation text-center">
      <div class="container">
          <h2>Документация</h2>
          <h3>Презентационные доукументы</h3>
          <div class="row d-flex justify-content-around align-items-start">
               <div class="general-docs d-flex flex-wrap justify-content-around w-100">
               		@foreach($documents as $document)
	                  <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 doc-block d-flex flex-column justify-content-center align-items-center">
	                      <img class="doc-icon" src="images/docs.png" alt="docs_png">
	                      <h4>{{$document->name}}</h4>
	                      <a href="{{asset('storage/'.$document->file)}}" download>Сохранить</a>
	                  </div>
               		@endforeach
              </div>
          </div>          
      </div>
  </div>
  <!-- documentation close -->



  <!-- footer open -->
  <footer class="gover-footer">
      <div class="container">
          <div class="row">
              <div class="col d-flex justify-content-between align-items-end footer-general-block">
                  <div class="links d-flex">

                      <div class="left-block d-flex flex-column">
                          <a href="/">Главная</a>
                          <a href="/about-us">О нас</a>
                          <a href="/materials">Материалы</a>
                          <a href="/home-pets">Домашние собаки</a>
                          <a href="/pet-workers">Военные собаки</a>
                          <a href="/gover-pets">Государственные структуры</a>
                      </div>

                      <div class="right-block d-flex flex-column justify-content-end mx-3">
                          <h5>ask@vo-in.com</h5>
                          <h5>info@vo-in.com</h5>
                          <h5>nda@vo-in.com</h5>
                          <h5>support@vo-in.com</h5>
                          <h5>Voice Intercommunication</h5>
                      </div>
                  </div>

                  <div class="social-media">
                      <a target="_blank" href="https://vk.com/edvardkarimov96"><img src="images/whitevk.png" alt="vk"></a>
                      <a target="_blank" href="https://www.facebook.com/woody.jakson"><img src="images/whitefacebook.png" alt="facebook"></a>
                      <a target="_blank" href="http://instagram.com/mrVol1/"><img src="images/whiteinst.png" alt="instagram"></a>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- footer close -->

</div>




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
	          <div class="modal-footer">
	              <button type="button" class="btn" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	    </div>
	</div>
@endforeach







@endsection