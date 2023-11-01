
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <style type="text/css">
        label{
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
            <div class="ps-lg-1">
              
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      
@include('admin.sidebar')

      <!-- partial -->
      
  @include('admin.navbar')

        <!-- partial -->
        
        
            <div class="container" align="center" style="padding: 100px;">
                @if(session()->has('message'))
                <div class="alert alert-success">
    
                
                       
                   </button>
                   {{session()->get('message')}}
    
                </div>
               @endif
                <div class="container-fluid page-body-wrapper">
                 
                <form action="{{url('editdoctor' , $data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px;">
                        <label>Ime</label>
                        <input type="text" style="color: black;" name="name" value="{{$data->name}}">
                    </div>
                    <div style="padding: 15px;">
                        <label>Telefon</label>
                        <input type="number" style="color: black;" name="phone" value="{{$data->phone}}">
                    </div>
                    <div style="padding: 15px;">
                    <label>Specijalnost</label>
                    <select name="speciality" style="color: black; width: 200px;" required>
                        <option>--Select--</option>
                        <option value="Otorinolaringolog">Otorinolaringolog</option>
                        <option value="Kardiolog">Kardiolog</option>
                        <option value="Opsta praksa">Opšta praksa</option>
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
                        <input type="text" style="color: black;" name="room" value="{{$data->room}}">
                    </div>
                    <div style="padding: 15px;">
                        <label>Slika</label>
                        <img height="150" width="150" src="doctorimage/{{$data->image}}">
                        
                    </div>
                    <div style="padding: 15px;">
                            <label>Promeni sliku</label>
                            <input type="file" name="file">
                    </div>
                    <div style="padding: 15px;">
                       
                        <input type="submit" class="btn btn-primary" value="Izmeni">
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