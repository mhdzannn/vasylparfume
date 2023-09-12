@extends('welcome')
@section('judul', 'Tentang')

@section('content')
<!--Div Pertama-->
      <div class="container-fluid text-dark mt-4">
      <div class="card mb-3" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('assets/Logo1.jpg')}}" class="img-fluid" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><b> V A S Y L Parfume </b> </h5>
        <p class="card-text">Penggunaan parfum 3 in 1 dapat memiliki berbagai keuntungan dan pentingnya tergantung pada preferensi individu serta kebutuhan pengguna. Berikut beberapa alasan mengapa penggunaan parfum 3 in 1 bisa dianggap penting:
        </p>WANGIMU MEMBUAT PERCAYADIRI MU<P/>
        </p>Perfume: "Rasakan kelezatan aroma beri dalam parfum 3 in 1 kami. Kesegaran manis yang memikat sepanjang hari."
          Deodorant: "Perlindungan deodorant yang efektif dengan aroma beri yang lezat. Nikmati kesegaran dan keharuman yang terus berlanjut."
          Body Mist: "Bawa aroma manis ke dalam setiap langkah Anda dengan body mist varian aroma beri ini. Semangkuk buah-buahan segar dalam botol."
          Varian Aroma Lautan:</p>

      </p>Perjalanan dan Mobilitas: Produk 3 in 1 sangat cocok untuk perjalanan karena mengurangi jumlah produk yang perlu dibawa. Ini dapat membantu Anda tetap merasa segar dan percaya diri di mana pun Anda berada.</p>
        <i class="card-text"><small class="text-muted">est.2023</small></i>
      </div>
    </div>
  </div>
</div>
</div>

<!--Div Kedua-->
<div class=" row justify-content-center">
      <div class="row text-dark mt-4">
            <div class="col-sm-4 g-4">
              <div class="card">
                <div class="card-body">
                  <img src="{{asset('assets/A1.jpeg')}}" class="d-block w-100" alt="parfume image"  style="height: 320px;">
                </div>
              </div>
            </div>
            <div class="col-sm-4 g-4">  
              <div class="card">
                <div class="card-body">
                  <img src="{{asset('assets/A2.jpeg')}}" class="d-block w-100" alt="parfume image"  style="height: 320px;">
                </div>
              </div>
            </div>
            <div class="col-sm-4 g-4">
              <div class="card">
                <div class="card-body">
                  <img src="{{asset('assets/A3.jpeg')}}" class="d-block w-100" alt="parfume image"  style="height: 320px;">
                  </div>
                </div>
              </div>
          </div>
      </div>
</div>

<!--Div Ketiga-->
<div class=" row justify-content-center">
  <div class="row text-dark mt-4">
        <div class="col-sm-4 g-4">
          <div class="card">
            <div class="card-body">
              <img src="{{asset('assets/Feed 4.jpg')}}" class="d-block w-100" alt="parfume image"  style="height: 320px;">
            </div>
          </div>
        </div>
        <div class="col-sm-4 g-4">  
          <div class="card">
            <div class="card-body">
              <img src="{{asset('assets/Feed 5.jpg')}}" class="d-block w-100" alt="parfume image"  style="height: 320px;">
            </div>
          </div>
        </div>
        <div class="col-sm-4 g-4">
          <div class="card">
            <div class="card-body">
              <img src="{{asset('assets/Fee 6.jpg')}}" class="d-block w-100" alt="parfume image"  style="height: 320px;">
              </div>
            </div>
          </div>
      </div>
  </div>
</div>
@endsection