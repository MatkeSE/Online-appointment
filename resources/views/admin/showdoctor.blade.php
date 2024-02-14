
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              
            </div>
        
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      
@include('admin.sidebar')

      <!-- partial -->
      
  @include('admin.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div align="center" style="padding-top: 100px;">
                <table>
                    <tr style="background-color: black;">
                        <th style="padding: 10px;">Doktor</th>
                        <th style="padding: 10px;">Telefon</th>
                        <th style="padding: 10px;">Specijalnost</th>
                        <th style="padding: 10px;">Soba</th>
                        <th style="padding: 10px;">Slika</th>
                       

                        

                    </tr>
                    @foreach($data as $doctor)
                    <tr align="center" style="background-color: skyblue;">
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->phone}}</td>

                        <td>{{$doctor->speciality}}</td>

                        <td>{{$doctor->room}}</td>

                        <td><img height="50" width="90" src="doctorimage/{{$doctor->image}}"></td>

                        <td><a href="{{url('deletedoctor',$doctor->id)}}" onclick="return confirm('Da li ste sigurni da zelite da obrisete dokotra?')" class="btn btn-danger" >Obriši</a></td>
                        <td><a style="background-color: royalblue;" href="{{url('updatedoctor',$doctor->id)}}" class="btn btn-primary" >Izmeni</a></td>


                        

                    </tr>
                    @endforeach
            </div>
 
        </div>




    <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.script')
    
    <!-- End custom js for this page -->
  </body>
</html>