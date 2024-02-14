<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <style type="text/css">
        label{
            display: inline-block;
            width: 200px;
        }
    </style>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
       
        <a class="navbar-brand"  href="{{url('home ')}}"><span class="text-primary">Viva</span>-Medic</a>

      

       
        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
           

          

   

            <x-app-layout>

            </x-app-layout>




          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>


  <div align="center" style="padding: 70px;">
     <div class="container" align="center" style="padding : 100px">
        @if(session()->has('message'))
        <div class="alert alert-success"> <!-- bootstrap classa -->

           
           {{session()->get('message')}}

        </div>
       @endif
     <form action="{{url('editapp' , $data->id)}}" method="post">
     @csrf

        <div style="padding:15px;">
            <label>Doktor</label>
            <input type="text" name="doctor" value="{{$data->doctor}}">
        </div>
        <div style="padding:15px;">
            <label>Datum</label>
            <input type="date" name="date" value="{{$data->date}}">
        </div>
        <div style="padding:15px;">
            <label>Poruka</label>
            <input type="text" size="50" name="message" value="{{$data->message}}">
          
        </div>
        <div style="padding:15px;">
            <input type="submit" value="Izmeni" style="background-color: green;" class="btn btn-primary">
        </div>
     </form>

     </div>


  </div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>