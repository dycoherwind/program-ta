@extends('layouts.main')

@section('css')
    
@endsection

@section('content')
<div class="container mb-3 py-4">
    <div>
        <div class="mb-4">
            <h5 > 
                PILIH MOTOR YANG INGIN ANDA RESTORASI 
            </h5>
        </div>
        <div class="d-flex">
            @foreach ($kategori as $item)
            <a href="{{ route('paket.detail', ['id' => 1]) }}" class="card text-decoration-none text-muted" style="width: 18rem; border: none;">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('kategori/motor/'.$item->img.'') }}" class="rounded-circle px-4 card-img-top" style="width: 150px; height: 100px" alt="...">
                </div>
                <div class="card-body">
                  <p class="card-text text-center">{{ $item->nama }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('js')
    
@endsection