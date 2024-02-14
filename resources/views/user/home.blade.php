<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">


  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>


  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> 011 000 000</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> health@gmail.net</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> 
      </div> 
    </div> 

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{url('home ')}}"><span class="text-primary">HEALTH</span>-Center</a>

       

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
           

            @if(Route::has('login'))

            @auth

            <li class="nav-item">
              <a class="nav-link" style="background-color: green; color: black;" href="{{url('myappointment')}}">List of appointments</a>
            </li>

            <x-app-layout>
             <!-- Korisnik u gornjem densom uglu -->
            </x-app-layout>


            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3"  href="{{route('login')}}">Log in</a>
            </li>

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>

            @endauth

            @endif


          </ul>
        </div> 
      </div> 
    </nav>
  </header>
  @if(session()->has('message'))
             <div class="alert alert-success">

                    
                
                {{session()->get('message')}}

             </div>
            @endif

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Your health is our concern!</span>
        
        
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Contact</span><span> <br>011 000 000</span> </p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>Always</span> protected</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>Health</span> 
comes first</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to health center <br> </h1>
            <p class="text-grey mb-4">This is an application intended for scheduling medical examinations. 
              Anyone can order an examination, while a registered user, in addition to making an appointment,
               can view the scheduled examination and, if he wishes, cancel it through his account. The admin is responsible for adding doctors to the database,
               changing their data, as well as deleting them, as well as changing the status of the examination to approved or rejected.</p>
          
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

 @include('user.doctor')
 


 <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp" style="font-size:30px">schedule an appointment</h1>

      <form class="main-form" action="{{url('appointment')}}"  method="POST">

      @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input required type="text" name="name" class="form-control" placeholder="Enter name...">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input required type="text" name="email" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input required type="date" name="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select required name="doctor" id="departement" class="custom-select">
            <option>Choose doctor</option>
              @foreach($doctor as $doctors)  
              
              <option value="{{$doctors->name}}">{{$doctors->name}},  {{$doctors->speciality}}</option>

              @endforeach
             
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input required type="text" name="number" class="form-control" placeholder="Phone number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea  name="message" id="message" class="form-control" rows="6" placeholder="Your message..."></textarea>
          </div>
        </div>

      

            
            <button type="submit" style="color: green; background-color: aqua;"  class="btn btn-primary mt-3 wow zoomIn">Send</button>
            

          



           

           

      </form>
    </div>
  </div> <!-- .page-section -->

  

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">O nama</a></li>
            <li><a href="#">Karijera</a></li>
            <li><a href="#">Naš tim</a></li>
            <li><a href="#">Zastita prava</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Više</h5>
          <ul class="footer-menu">
            
            <li><a href="#">Privatnost</a></li>
            <li><a href="#">Zabava</a></li>
            <li><a href="#">Pridružite nam se</a></li>
          </ul>
        </div>
      
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Kontakt</h5>
          <br>
          <a href="#" class="footer-link">011 875 9800</a>
          <a href="#" class="footer-link">healthcenter@gmail.net</a>

          <h5 class="mt-3">Društvene mreže</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All right reserved</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

  <script src="../assets/vendor/wow/wow.min.js"></script>

  <script src="../assets/js/theme.js"></script>
  
</body>
</html>