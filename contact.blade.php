@extends('welcome')
@section('judul', 'Hubungi')

@section('content')

<!--Div Pertama-->
      <div class="container text-light" style="height: auto">
      <div class="row text-center align-items-center mt-5">
          <div class="col-12">
            <img src="{{asset('assets/Logo1.jpg')}}" width="150" height="150"/>
            <h2 class="mt-2">VASYL PARFUME CONTACT</h2>
            <i>Hello, if you have problems click the link below</i>
          </div>
        </div>
        <div class="row text-dark text-center justify-content-md-center mt-4">
          <div class="col-sm-2 g-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-center">INSTAGRAM</h5>
                <img src="{{asset('assets/instagram2.jpg')}}" class="d-block w-100" alt="parfume image"  style="width: 150px; object-fit:cover;">
                <a href="https://instagram.com/vasylparfume/" class="btn btn-dark d-block">CONTACT NOW</a>
              </div>
            </div>
          </div>
          <div class="col-sm-2 g-2">  
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-center">WHATSAPP</h5>
                <img src="{{asset('assets/wa1.png')}}" class="d-block w-100" alt="parfume image"  style="width: 150px; object-fit:cover;">
                <a href="https://wa.me/6283194097513" class="btn btn-dark d-block">CONTACT NOW</a>
              </div>
            </div>
          </div>
          <div class="col-sm-2 g-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-center">EMAIL</h5>
                <img src="{{asset('assets/email1.jpg')}}" class="d-block w-100" alt="parfume image"  style="width: 150px; object-fit:cover;">
                <a href="/contact/" class="btn btn-dark d-block">CONTACT NOW</a>
              </div>
            </div>
          </div>
        </div>
    </div>
          @endsection
         


