<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">ZAKAŽITE PREGLED</h1>

      <form class="main-form" action="{{url('appointment')}}"  method="POST">

      @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Unesite vase ime">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Email adresa..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="departement" class="custom-select">
            <option>Odaberite doktora</option>
              @foreach($doctor as $doctors)  
              
              <option value="{{$doctors->name}}">{{$doctors->name}},  {{$doctors->speciality}}</option>

              @endforeach
             
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="number" class="form-control" placeholder="Vas broj telefona..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Vasa poruka.."></textarea>
          </div>
        </div>

        <button type="submit" style="color: black;" class="btn btn-primary mt-3 wow zoomIn">Zakaži</button>
      </form>
    </div>
  </div> <!-- .page-section -->