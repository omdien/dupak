@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Butir Kegiatan Baru</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/butirs" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="kegiatan" class="form-label">Butir Kegiatan</label>
                <input type="text" class="form-control @error('but_kegiatan') is-invalid @enderror" id=" but_kegiatan" name="but_kegiatan" required autofocus value="{{ old('but_kegiatan') }}">
            </div>
            @error('but_kegiatan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <div class="mb-3">
                <label for="but_slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('but_slug') is-invalid @enderror" id="but_slug" name="but_slug" value="{{ old('but_slug') }}">
                @error('but_slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="but_key" class="form-label">Kata Kunci</label>
                <input type="text" class="form-control" id="but_key" name="but_key" value="{{ old('but_key') }}" required>
            </div>

            <div class="mb-3">
                <label for="but_id" class="form-label">Kode Butir</label>
                <input type="text" class="form-control" id="but_id" name="but_id" value="{{ old('but_id') }}" required>
            </div>

            <div class="mb-3">
                <label for="but_gambar" class="form-label">Gambar Butir Kegiatan</label>
                <input class="form-control @error('but_gambar') is-invalid @enderror" type="file" id="but_gambar" name="but_gambar">
                @error('but_gambar')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="but_desc" class="form-label">Deskripsi</label>
                <input id="but_desc" type="hidden" name="but_desc" value="{{ old('but_desc') }}">
                <trix-editor input="but_desc"></trix-editor>
            </div>
            <div class="mb-3">
                <label for="kategori02_id" class="form-label">Kategori</label>
                <select class="form-select @error('kategori02_id') is-invalid @enderror" name="kategori02_id" id="kategori02_id">
                    @foreach($kategories as $kategori)
                    @if(old('kategori02_id') == $kategori->id)
                    <option value="{{ $kategori->id }}" selected>{{ $kategori->kat02_kategori }}</option>
                    @else
                    <option value="{{ $kategori->id }}">{{ $kategori->kat02_kategori }}</option>
                    @endif
                    @endforeach
                </select>
                @error('kategori02_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="satuan" class="form-label">Satuan Hasil</label>
                <input type="text" class="form-control" id="but_satuan" name="but_satuan" value="{{ old('but_satuan') }}">
            </div>
            <div class="mb-3">
                <label for="kredit" class="form-label">Angka Kredit</label>
                <input type="text" class="form-control" id="but_kredit" name="but_kredit" value="{{ old('but_kredit') }}">
            </div>
            <div class="mb-3">
                <label for="batasan" class="form-label">Batasan Penilaian</label>
                <input type="text" class="form-control" id="but_batasan" name="but_batasan" value="{{ old('but_batasan') }}">
            </div>
            <div class="mb-3">
                <label for="jenjang_id" class="form-label">Pelaksana</label>
                <select class="form-select @error('jenjang_id') is-invalid @enderror" name="jenjang_id" id="jenjang_id">
                    @foreach($jenjangs as $jenjang)
                    @if(old('jenjang_id') == $jenjang->id)
                    <option value="{{ $jenjang->id }}" selected>{{ $jenjang->jen_jenjang }}</option>
                    @else
                    <option value="{{ $jenjang->id }}">{{ $jenjang->jen_jenjang }}</option>
                    @endif
                    @endforeach
                </select>
                @error('jenjang_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="but_fisik" class="form-label">Bukti Fisik</label>
                <input id="but_fisik" type="hidden" name="but_fisik" value="{{ old('but_fisik') }}">
                <trix-editor input="but_fisik"></trix-editor>
            </div>
            <div class="mb-3">
                <label for="but_contoh" class="form-label">Contoh</label>
                <input id="but_contoh" type="hidden" name="but_contoh" value="{{ old('but_contoh') }}">
                <trix-editor input="but_contoh"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</main>
<script>
    const but_kegiatan = document.querySelector('#but_kegiatan');
    const but_slug = document.querySelector('#but_slug');

    debugger;
    but_kegiatan.addEventListener('change', function() {
        fetch('/dashboard/butirs/checkSlug?but_kegiatan=' + but_kegiatan.value)
            .then(response => response.json())
            .then(data => but_slug.value = data.but_slug)
    });

    document.addEventListener('trick-file-accept', function(e) {
        e.preventDefault();
    })
</script>
@endsection