<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="{{asset('storage/kebutuhan/topeng_hangker rill.png')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="{{asset('storage/kebutuhan/topeng_hangker rill.png')}}" height="80" alt="topeng hangker">
            <div class="col-lg-4">
                
            <p class="fs-1 ms-3" style="color: rgb(255, 123, 0)" >Welcome to</p>
            <h1 class="ms-3">Hangker Class</h1>
        </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav"> 
                <div class="col-lg me-3 mt-3 hidden">
                <audio controls autoplay>
                  <source src="{{asset('storage/kebutuhan/jancuk pristal 1 jam.mp3')}}" type="audio/mpeg"/>
                </audio>
              </div>
               @if (Route::has('login'))
                      <div class="hidden fixed top-0 right-4 px-6 py-4 sm:block  ">
                          @auth
                              <a href="{{ url('/home') }}" class="text-sm btn btn-outline-dark text-gray-700 dark:text-gray-500 " >Home</a>
                          @else
                              <a href="{{ route('login') }}" class="text-dark btn-outline-primary me-2 btn"style="text-decoration: none;color:black " >Log in</a>
                             
      
                              @if (Route::has('register'))
                                  <a href="{{ route('register') }}" class="text-dark btn-outline-warning btn" style="text-decoration: none;color:black">Register</a>
                              @endif
                          @endauth
                      </div>
                  @endif
            </div>
            
          </div>
        </div>
    </nav>
    
    <div class="container-fluid">
      <div class="row justify-content-center">
        
        <section class="skill bg-white" id="skill">
          <div class="container-lg py-4">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="section-title text-center">
                  <h2 class="fw-bold mb-5">Skill For You</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mt-5 mt-md-0">
                <div class="skill-item mb-4">
                  <h3 class="fs-6">Hack Nasa</h3>
                  <div class="progress" style="height: 5px">
                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="skill-item mb-4">
                  <h3 class="fs-6">Hack Web Ujian</h3>
                  <div class="progress" style="height: 5px">
                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="skill-item mb-4">
                  <h3 class="fs-6">Hack Database</h3>
                  <div class="progress" style="height: 5px">
                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="skill-item mb-4">
                  <h3 class="fs-6">Hack Wifi</h3>
                  <div class="progress" style="height: 5px">
                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-text">
                  <h2 class="fs-3 mb-3">Kelas kami memiliki persentase keberhasilan 100%</h2>
                  <p class="text-muted">
                    Setelah lulus dari kelas kami,para alumni memiliki citra yang sangat menakjubkan baik di mata masyarakat yang ketakukan maupun yang   
                  </p>
                </div>
                <div class="row text-center text-uppercase my-3">
                  <div class="col-sm-4">
                    <div class="fact-item">
                      <h4 class="fs-1 fw-bold">100</h4>
                      <p class="text-muted">Projects Selesai</p>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="fact-item">
                      <h4 class="fs-1 fw-bold">100</h4>
                      <p class="text-muted">Kepuasan Pelajar</p>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="fact-item">
                      <h4 class="fs-1 fw-bold">100</h4>
                      <p class="text-muted">Ahli hangker</p>
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
          </div>
        </section>
      </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f8f9fa" fill-opacity="1" d="M0,96L48,101.3C96,107,192,117,288,112C384,107,480,85,576,74.7C672,64,768,64,864,96C960,128,1056,192,1152,197.3C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        <div class="container-fluit bg-light">
          <div class="row justify-content-center">
        <div class="col-lg-8 mt-3">
          <div class="section-title">
            <h2 class="fw-bold mb-5 text-center" >Berikut adalah beberapa foto lulusan dari kelas kami</h2>
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="col-lg">
            <img height="500" width="600" src="{{asset('storage/kebutuhan/bocil-hengker.jpg')}}" alt="">
            
          </div>
          
          <div class="col-lg">
            <img height="500" width="600" src="{{asset('storage/kebutuhan/hangker-sd.jpg')}}" alt="">
          </div>
        </div>
        </div>
        
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 
</body>
</html>