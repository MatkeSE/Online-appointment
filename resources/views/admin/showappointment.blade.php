
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
                        <th style="padding: 10px;">Pacijent</th>
                        <th style="padding: 10px;">Email</th>
                        <th style="padding: 10px;">Telefon</th>
                        <th style="padding: 10px;">Doktor</th>
                        <th style="padding: 10px;">Datum</th>
                        <th style="padding: 10px;">Poruka</th>
                        <th style="padding: 10px;">Status</th>
                        

                    </tr>
                    @foreach($data as $appoint)
                    <tr align="center" style="background-color: skyblue;">
                        <td>{{$appoint->name}}</td>
                        <td>{{$appoint->email}}</td>
                        <td>{{$appoint->phone}}</td>
                        <td>{{$appoint->doctor}}</td>
                        <td>{{$appoint->date}}</td>
                        <td>{{$appoint->message}}</td>
                        <td>{{$appoint->status}}</td>
                        
                        <td><a class="btn btn-success" href="{{url('approved',$appoint->id)}}">prihvati</a></td>
                        <td><a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">odbij</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>

        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.script')
    
    <!-- End custom js for this page -->
  </body>
</html>