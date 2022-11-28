@extends('layouts.main')

@section('container')

    <h1> Daftar Buku </h1>

    <div class="row">

        @forelse ($bookcategory as $b)
            @if($b->category_id==1)
                <div class="col-lg-3 col-md-4">
                    <div class="card mt-5" style="width: 18rem;">
                        <img src="https://marketplace.canva.com/EAFFC7J8mbI/1/0/1003w/canva-putih-kuning-lanskap-minimalis-sampul-buku-novel-qBdCH1piX8E.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$b->book->title}}</h5>
                            <p class="card-text">{{$b->category->name}}</p>
                            <a href="/about" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endif
        @empty

        @endforelse

    </div>
@endsection
