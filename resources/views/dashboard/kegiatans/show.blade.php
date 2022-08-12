@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $butir->but_kegiatan }}</h1>
            <a href="/dashboard/butirs" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali ke Butir Kegiatan</a>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Hapus</a>
            <img src="https://source.unsplash.com/1200x400?{{ $butir->bat_key }}" class="card-img-top mt-3" alt="{{ $butir->kategori02->kat02_kategori }}">
            <h6>Batasan Penilaian : {{ $butir->but_batasan}}</h6>
            <article class="my-3 fs-5">
                {!! $butir->but_desc !!}
            </article>
        </div>
    </div>
</div>
@endsection