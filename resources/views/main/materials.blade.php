@extends('mainLayout')

@section('title', 'Materials')


@section('content')

<div class="container-fluid">

  <div class="main-screen-materials">

      <!-- navbar open -->
      @include('partials.header')
      <!-- navbar close -->


      <!-- description open -->
      <div class="container description d-flex justify-content-between">
          <div class="col-12">
              <h1 class="cursor-default">Materials</h1>
              <p class="cursor-default">Articles about dog, how to train it and care it. 
              Presentation materials of the complex</p>
              <button>See more</button>
          </div>
      </div>
      <!-- description close -->

  </div>



  <!-- articles open -->
  <div class="articles text-center">
      <div class="container">
          <h2>Articles</h2>
          <h3>Information about dogs for homie</h3>

          <div class="row d-flex justify-content-around align-items-start">
              <div class="general-articles d-flex flex-wrap justify-content-between">
                  <div class="sub-article col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                      <div class="article-block">
                          <h4>How to care</h4>
                          <h5>25.11.2019</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis voluptatum saepe assumenda, fugit illo dolorum expedita odit!</p>
                          <a data-toggle="modal" data-target="#article-modal">See more</a>
                      </div>
                  </div>

                  <div class="sub-article col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                      <div class="article-block">
                          <h4>How to care</h4>
                          <h5>25.11.2019</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis voluptatum saepe assumenda, fugit illo dolorum expedita odit!</p>
                          <a data-toggle="modal" data-target="#article-modal">See more</a>
                      </div>
                  </div>

                  <div class="sub-article col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                      <div class="article-block">
                          <h4>How to care</h4>
                          <h5>25.11.2019</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis voluptatum saepe assumenda, fugit illo dolorum expedita odit!</p>
                          <a data-toggle="modal" data-target="#article-modal">See more</a>
                      </div>
                  </div>

                  <div class="sub-article col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                      <div class="article-block">
                          <h4>How to care</h4>
                          <h5>25.11.2019</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis voluptatum saepe assumenda, fugit illo dolorum expedita odit!</p>
                          <a data-toggle="modal" data-target="#article-modal">See more</a>
                      </div>
                  </div>

              </div>
          </div>  
          <hr>
      </div>
  </div>
  <!-- articles close -->




  <!-- documentation open -->
  <div class="documentation text-center">
      <div class="container">
          <h2>Documentation</h2>
          <h3>Presentation documents</h3>
          <div class="row d-flex justify-content-around align-items-start">
               <div class="general-docs d-flex flex-wrap justify-content-around w-100">

                  <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 doc-block d-flex flex-column justify-content-center align-items-center">
                      <img class="doc-icon" src="images/docs.png" alt="docs_png">
                      <h4>Presentation</h4>
                      <a href="images/dev.jpg" download>Save</a>
                  </div>

                  <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 doc-block d-flex flex-column justify-content-center align-items-center">
                      <img class="doc-icon" src="images/docs.png" alt="docs_png">
                      <h4>Presentation</h4>
                      <a href="images/dev.jpg" download>Save</a>
                  </div>

                  <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 doc-block d-flex flex-column justify-content-center align-items-center">
                      <img class="doc-icon" src="images/docs.png" alt="docs_png">
                      <h4>Presentation</h4>
                      <a href="images/dev.jpg" download>Save</a>
                  </div>

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
                          <a href="/">Main</a>
                          <a href="/about-us">About Us</a>
                          <a href="/materials">Materials</a>
                          <a href="/home-pets">Home dogs</a>
                          <a href="/pet-workers">Duty dogs</a>
                          <a href="/gover-pets">Government structures</a>
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
<div class="modal fade" id="article-modal" tabindex="-1" role="dialog" aria-labelledby="article-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="article-modalLabel">How to care</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          <div class="modal-body">
              <p class="article-modal-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas dicta magnam assumenda tenetur, asperiores. Vitae vero, deleniti quis sit, nisi est minima vel ut eveniet, excepturi nam similique aliquam itaque tempora harum sunt cumque! Possimus numquam magnam ipsum, reprehenderit vero blanditiis itaque perspiciatis fugit sapiente rerum esse adipisci eveniet nulla!</p>
              <img class="article-modal-img" src="images/dev.jpg" alt="article_img">
              <h5 class="article-modal-date">Public date: 25.11.2019</h5>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn" data-dismiss="modal">Close</button>
          </div>
        </div>
    </div>
</div>






@endsection