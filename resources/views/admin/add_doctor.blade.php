<!DOCTYPE html>
<html lang="en">
  <head>
    
    <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px;
        }
    </style>

    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            
            
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      
@include('admin.sidebar')

      <!-- partial -->
      
  @include('admin.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">


            

          <div class="container" align="center" style="padding-top: 100px;">
            @if(session()->has('message'))
             <div class="alert alert-success"> <!-- bootstrap classa -->

                
                {{session()->get('message')}}

             </div>
            @endif
            <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">

                @csrf <!-- protection -->
                <div style="padding: 15px;">
                    <label>Ime</label>
                    <input type="text" style="color:black" name="name"  required>
                </div>

                <div style="padding: 15px;">
                    <label>Telefon</label>
                    <input type="text" style="color:black" name="phone" placeholder="" required>
                   

                </div>

                <div style="padding: 15px;">
                    <label>Specijalnost</label>
                    <select name="speciality" style="color: black; width: 200px;" required>
                        <option>Odaberi doktora</option>
                        <option value="Otorinolaringolog">Otorinolaringolog</option>
                        <option value="Kardiolog">Kardiolog</option>
                        <option value="Opšta praksa">Opšta praksa</option>
                        <option value="Imunolog">Imunolog</option>
                        <option value="Hirurg">Hirurg</option>
                        <option value="Interna medicina">Interna medicina</option>
                        <option value="Stomatolog">Stomatolog</option>
                        <option value="Sportski lekar">Sportski lekar</option>
                        <option value="Pedijatar">Pedijatar</option>
                        <option value="Neuropsihijatar">Neuropsihijatar</option>


                    </select>
                </div>

                <div style="padding: 15px;">
                    <label>Soba</label>
                    <input type="text" style="color:black" name="room" placeholder="" required>
                </div>

                <div style="padding: 15px;">
                    <label>Slika</label>
                    <input type="file" name="file" required>
                </div>

                <div style="padding: 15px;">
                    
                    <input type="submit" value="dodaj" class="btn-success">
                </div>
            </form>


          </div>
        
        </div>



    <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.script')
    
    <!-- End custom js for this page -->
  </body>
</html>