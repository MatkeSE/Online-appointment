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

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Viva</span>-Medic</a>

      

       
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
    <table>


        <tr style="background-color: Green;" >
            <th style="padding: 10px; font-size: 20px; color: white;">
               Ime doktora
            </th>
            <th style="padding: 10px; font-size: 20px; color: white;">
                Datum
            </th>
            <th style="padding: 10px; font-size: 20px; color: white;">
                Poruka
            </th>
            <th style="padding: 10px; font-size: 20px; color: white;">
                Status
            </th>

            <th style="padding: 10px; font-size: 20px; color: white;">
                Otkaži
            </th>
           
        </tr>

        @foreach($appoint as $appoints)
        <tr style="background-color: Green;" align="center">
            <td style="padding: 10px; color: white;">{{$appoints->doctor}}</td>
            <td style="padding: 10px; color: white;">{{$appoints->date}}</td>
            <td style="padding: 10px; color: white;">{{$appoints->message}}</td>
            <td style="padding: 10px; color: white;">{{$appoints->status}}</td>
            
            <td><a class="bt btn-danger" onclick="return confirm('Da li ste sigurni da zelite da obrišete?  ')" href="{{url('cancel_appoint',$appoints->id)}}">Obriši </a></td>
            

        </tr>

        @endforeach
    </table>
    <a href="{{url('home')}}" style="color: blue;"   >Nazad na početnu</a>
  </div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>