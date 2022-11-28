@extends('layouts.main')

@section('container')

    <h1> Detail Buku </h1>

    <div class="row">

        @forelse ($book as $b)
            <div class="col-lg-3 col-md-4 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="https://marketplace.canva.com/EAFFC7J8mbI/1/0/1003w/canva-putih-kuning-lanskap-minimalis-sampul-buku-novel-qBdCH1piX8E.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$b->title}}</h5>
                        <p class="card-text">{{$b->author}}</p>
                        <p class="card-text">{{$b->year}}</p>
                        <p class="card-text">{{$b->synopsis}}</p>
                    </div>
                </div>
            </div>
        @empty

        @endforelse

    </div>
@endsection
