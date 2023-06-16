@extends('layout.main')
  @section('mainlayout')
  <div class="container1">
    <div class="row flex-row">
      @foreach ($objects as $item)
        <div class="col-sm-4 text-center"> <!-- Menambahkan kelas "text-center" di sini -->
          <div class="card">
            <center><img src="{{ asset('img/'.$item->image) }}" class="card-img-top w-50" alt="..."></center>
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">{{ $item->title }}</h5>
              <p class="card-text"><strong>Lokasi:</strong> {{ $item->location }}</p>
              <p class="card-text"><strong>Deskripsi singkat:</strong>  {{ Str::limit($item->description, 50) }}</p>
              <a href="#" class="btn btn-primary mt-auto">Read More</a>
            </div>
          </div>
        </div>
      @endforeach        
    </div>
  </div>
  
  
@endsection
