@extends('mainLayout')

@section('title', 'Government structures')


@section('content')

<div class="container-fluid">

  <div class="main-screen-goverment">

      <!-- navbar open -->
      @include('partials.header')
      <!-- navbar close -->


      <!-- description open -->
      <div class="container description d-flex justify-content-between">
          <div class="col-12">
              <h1 class="cursor-default">Government structures</h1>
              <p class="cursor-default">Monitoring and communication complex for dogs provides remote voice interaction between dog and a person without visual control, dog’s biometric indexes monitoring, POV photofixation and video recording of the actions around the dog, possibility of pre-recorded commands  sending</p>
              <button data-toggle="modal" data-target="#gover-info-modal">Request for access</button>
          </div>
      </div>
      <!-- description close -->

  </div>




<!-- Этот контент виден только тем, кто прошел аутистификацию на документы от Эдика, Начало -->


<!-- opportunities open -->
<div class="opportunities text-center">
    <div class="container">
        <h2>Opportunities</h2>
        <h3>The Voin complex provides</h3>

        <div class="row d-flex justify-content-around align-items-start">
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 flex-column d-flex justify-content-center align-items-center icon-block">
                <div class="image">
                  <img src="" alt="record">
                </div>
                                   
                <p></p>
            </div>    
            <hr class="opportunities-hr">
        </div>
    </div>
</div>
    <!-- opportunities close -->


<!-- feedback open -->
<div id="feedback" class="feedback text-center">
    <div class="container">
        <h2>Feed back</h2>
        <h3>Leave your email below, we will contact you</h3>
        <form method="POST" action="/send-mail">
                  {{ csrf_field() }}
            <input type="email" required placeholder="example@gmail.com" name="mail" class="mail">
            <button type="submit" class="btn-submit">Send</button>
        </form>
        <h2 class="text-center msg" style="display: none;">Your email has been successfuly sent!</h2>
    </div>
</div>
<!-- feedback close -->

<!-- Этот контент виден только тем, кто прошел аутистификацию на документы от Эдика, КОНЕЦ -->


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

<!-- gover info modal -->
<div class="modal fade" id="gover-info-modal" tabindex="-1" role="dialog" aria-labelledby="gover-info-modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="complex-modalLabel">Request for access</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form method="POST">
              <div class="modal-body">
                  @if(session('user'))
                         <p>Для получения доступа к данному разделу нужно прикрепить 2 файла: сопроводительное письмо и карту партнера.</p>
                        <div class="input-group">
                         <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                         </div>
                         <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01"
                             aria-describedby="inputGroupFileAddon01" multiple>
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                  @else
                  <p>Please signup</p>
                  @endif

              </div>
              <div class="modal-footer d0flex justify-content-between">
                  <button type="button" class="btn" data-dismiss="modal">Close</button>
                  @if(session('user'))
                  <button type="submit" class="btn">Request access</button>
                  @endif
              </div>
          </form>
      </div>
  </div>
</div>
<!-- gover info modal -->





@endsection