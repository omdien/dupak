@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $butir->but_kegiatan }}</h1>
            <a href="/dashboard/butirs" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali ke Butir Kegiatan</a>
            <a href="/dashboard/butirs/{{ $butir->but_slug}}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/butirs/{{ $butir->but_slug}}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn bg-danger" onclick="return confirm('Anda yakin ?')"><span data-feather="x-circle"></span> Delete</button>
            </form>
            @if ($butir->but_gambar)
            <img src="{{ asset('storage/' . $butir->but_gambar) }}" class="card-img-top mt-3" alt="{{ $butir->kategori02->kat02_kategori }}">
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $butir->but_key }}" class="card-img-top mt-3" alt="{{ $butir->kategori02->kat02_kategori }}">
            @endif
            <h6>Batasan Penilaian : {{ $butir->but_batasan}}</h6>
            <article class="my-3 fs-5">
                {!! $butir->but_desc !!}
            </article>
        </div>
    </div>
</div>
@endsection