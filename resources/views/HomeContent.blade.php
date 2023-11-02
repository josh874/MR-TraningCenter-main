@extends('HomeM')

@section('content')
      <section class="inner-banner mb-4" >
        <div class="container">
          <div class="caption">
            <h2>Get your Courses</h2>
            <p>Get your programming courses <span>Including the new one </span><span class="badge bg-warning text-dark"> New</span></p>
          </div>
        </div>
      </section>
      <div class="container mb-5">
        <h2 class="text-center">How it works ?</h2>
        <div class="row justify-content-center">
          <div class=" col-sm-12 m-3" style="width: 20rem; ">
            <div class=" text-center" >
              <img src="{{url('/images/signup.gif')}}" class="d-block w-100" alt="Image"/>
              <h2 class="my-4">Become Student</h2>
            </div>
            <div class="text-center">
              <h7>Choose a course plan that suits you and register !</h7>
            </div>
          </div>

          <div class="col-4  m-3" style="width: 20rem; ">
            <div class=" text-center" >
              <img src="{{url('/images/Start-learning.gif')}}" class="d-block w-100" alt="Image"/>
              <h2 class="my-4">Start Learning</h2>
            </div>
            <div class="text-center">
              <h7 >Start Learning your dream cource with a deep way with us.</h7>
            </div>
          </div>
          <div class=" col-4  m-3" style="width: 20rem; ">
            <div class=" text-center">
              <img src="{{url('/images/achieve-goals.gif')}}" class="d-block w-100" alt="Image"/>
              <h2 class="my-4">Achive Your Goal</h2>
            </div>
            <div class="text-center">
              <h7 >Achive Your goal by compliting all necessary steps for your selected cource !</h7>
            </div>
          </div>
        </div>
      </div>
      <div class="container mb-5" id="HomeContetnt">
          <div class="row ">
            <h2 class="text-warning" ><i class="fa-brands fa-mastodon"></i>R Traning Center</h2>
            <hr class="hr">
            <div class="col-md-9">
               <div class="row mx-5">
                  <strong>Different Categories of Programming Language are There!</strong>
                  <div class="card categories col-4 shadow px-0 m-3" style="width: 12rem;">
                      <div class="card-body text-center" id="card-body">
                        <i class="fa-solid fa-c mb-2 text-white"></i>
                      </div>
                      <div class="card-footer bg-body">
                        <h4 class="text-center">C++</h4>
                      </div>
                  </div>
                  <div class="card categories col-4 shadow px-0 m-3" style="width: 12rem; border-radius:7%">
                    <div class="card-body text-center" id="card-body">
                      <i class="fa-brands fa-python mb-2 text-white"></i>
                    </div>
                    <div class="card-footer bg-body">
                      <h4 class="text-center">Python</h4>
                    </div>
                  </div>
                  <div class="card categories col-4 shadow px-0 m-3" style="width: 12rem; border-radius:7%">
                    <div class="card-body text-center" id="card-body">
                      <i class="fa-brands fa-java mb-2 text-white"></i>
                    </div>
                    <div class="card-footer bg-body">
                      <h4 class="text-center">Java</h4>
                    </div>
                  </div>
                  <div class="card categories col-4 shadow px-0 m-3" style="width: 12rem; border-radius:7%">
                    <div class="card-body text-center" id="card-body">
                      <i class="fa-brands fa-css3-alt mb-2 text-white"></i>
                    </div>
                    <div class="card-footer bg-body">
                      <h4 class="text-center">CSS</h4>
                    </div>
                  </div>
                  <div class="card categories col-4 shadow px-0 m-3" style="width: 12rem; border-radius:7%">
                    <div class="card-body text-center" id="card-body">
                      <i class="fa-brands fa-js-square mb-2 text-white"></i>
                    </div>
                    <div class="card-footer bg-body">
                      <h4 class="text-center">java script</h4>
                    </div>
                  </div>
                  <div class="card categories col-4 shadow px-0 m-3" style="width: 12rem; border-radius:7%">
                    <div class="card-body text-center" id="card-body">
                      <i class="fa-brands fa-html5 mb-2 text-white"></i>
                    </div>
                    <div class="card-footer bg-body">
                      <h4 class="text-center">HTML</h4>
                    </div>
                  </div>
                  <div class="card categories col-6 shadow px-0 m-3" style="width: 18rem; border-radius:7%">
                    <div class="card-body text-center" id="card-body">
                      <i class="fa-brands fa-laravel mb-2 text-white"></i>
                    </div>
                    <div class="card-footer bg-body">
                      <h4 class="text-center">Laravel</h4>
                    </div>
                  </div>
                  <div class="card categories col-6 shadow px-0 m-3" style="width: 18rem; border-radius:7%">
                    <div class="card-body text-center" id="card-body">
                      <i class="fa-brands fa-react mb-2 text-white"></i>
                    </div>
                    <div class="card-footer bg-body">
                      <h4 class="text-center">React</h4>
                    </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3">
                  <button class="btn btn-warning btn-bordered mb-3"> <i class="fa fa-list"></i> </button>
                  <strong class="btn btn-warning mb-3"> View all Categories </strong>
                  <div class="shadow-sm p-3 mb-2 bg-body rounded">Basic Computer Skill</div>
                  <div class="shadow-sm p-3 mb-2 bg-body rounded">Microsoft Office</div>
                  <div class="shadow-sm p-3 mb-2 bg-body rounded"><i class=""></i>Programming Language</div>
                  <div class="shadow-sm p-3 mb-2 bg-body rounded">Web Development</div>
                  <div class="shadow-sm p-3 mb-2 bg-body rounded">Graphics Design</div>
                  <div class="shadow-sm p-3 mb-2 bg-body rounded">Software Development</div>  
                  <hr>
                  <Strong ><h5> Find Us </h5></Strong>
                  <hr>
                  <div>
                    <button class="btn btn-outline-warning"  data-bs-toggle="tooltip" data-bs-placement="top" title="facebook"><i class="fa-brands fa-facebook"></i></button>
                    <button class="btn btn-outline-warning"  data-bs-toggle="tooltip" data-bs-placement="top" title="telegram"><i class="fa-brands fa-telegram"></i></button>
                    <button class="btn btn-outline-warning"  data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin"><i class="fa-brands fa-linkedin"></i></button>
                    <button class="btn btn-outline-warning"  data-bs-toggle="tooltip" data-bs-placement="top" title="github"><i class="fa-brands fa-github"></i></button>
                    <button class="btn btn-outline-warning"  data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"><i class="fa-solid fa-envelope"></i></button>
                  </div>              
            </div>                 
          </div>  
      </div>
      
    
@endsection

