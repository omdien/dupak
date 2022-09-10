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
            <div class="row">
                <article class="my-3 fs-5">
                    {!! $butir->but_desc !!}
                </article>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3">
                    <h5>Satuan Hasil :</h5>
                </div>
                <div class="col-sm-5">
                    <article class="fs-5">
                    {{$butir->but_satuan}}
                    </article>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3">
                    <h5>Angka Kredit :</h5>
                </div>
                <div class="col-sm-5">
                    <article class="fs-5">
                    {{$butir->but_kredit}}
                    </article>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3">
                    <h5>Batasan Penilaian :</h5>
                </div>
                <div class="col-sm-9">
                    <article class="fs-5">
                    {!! $butir->but_batasan !!}
                    </article>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3">
                    <h5>Pelaksana :</h5>
                </div>
                <div class="col-sm-5">
                    <article class="fs-5">
                    {{$butir->jenjang->jen_jenjang}}
                    </article>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3">
                    <h5>Bukti Fisik :</h5>
                </div>
                <div class="col-sm-9">
                    <article class="fs-5">
                        {!! $butir->but_fisik !!}
                    </article>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3">
                    <h5>Contoh :</h5>
                </div>
                <div class="col-sm-9">
                    <article class="fs-5">
                        {!! $butir->but_contoh !!}
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection