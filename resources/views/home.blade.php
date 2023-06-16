@extends('layout.main')
  @section('mainlayout')
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/c1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Destinasi</h5>
          <p>Toraja memiliki banyak destinasi wisata menarik yang patut dikunjungi</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/c2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Spot Foto</h5>
          <p>Di Toraja, Anda akan menemukan banyak spot foto yang memukau untuk mengabadikan momen tak terlupakan</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/c3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>kuliner</h5>
          <p>Kuliner Toraja merupakan bagian tak terpisahkan dari pengalaman wisata di daerah ini.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container mt-5" style="background-color: rgba(3, 0, 0, 0.2)">
    <center><h3>Selamat datang di Toraja</h3>
    <p class="text-red">Destinasi wisata yang memikat dengan keindahan alam yang menakjubkan dan kekayaan budaya yang tiada tara. Di sini, Anda akan disambut dengan tangan terbuka oleh penduduk yang ramah dan hangat. Nikmatilah pesona lanskap pegunungan yang memukau, lembah hijau yang menyejukkan, dan sawah-sawah yang menghijau di sepanjang perjalanan Anda.
<br>
      Jelajahi keajaiban alam Toraja dengan menikmati pemandangan alam yang memesona, seperti Danau Tempe yang menawarkan keindahan panorama air dan kehidupan nelayan lokal yang autentik. Jangan lewatkan juga keunikan Toraja dalam tradisi pemakaman yang kaya akan adat istiadat dan upacara adat yang memikat hati.
<br>      
      Selain itu, cobalah kuliner khas Toraja yang lezat, seperti penganan tradisional seperti Pa'piong, Ayam Betutu, dan Kapurung. Rasakan kelezatan cita rasa unik yang hanya bisa Anda temukan di Toraja.
<br>     
      Selamat menikmati petualangan tak terlupakan di Toraja, dan dapatkan pengalaman wisata yang akan membekas dalam ingatan Anda selamanya. Selamat datang di Toraja, tempat di mana keajaiban alam dan kebudayaan berkumpul menjadi satu!</p></center>
  </div>


@endsection
