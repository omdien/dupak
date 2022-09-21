@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kegiatan Pranata Komputer Keterampilan</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/butirs">
        @csrf
        <div class="mb-3">
            <label for="keg_nama" class="form-label">Nama PPK</label>
            <input type="text" class="form-control @error('but_kegiatan') is-invalid @enderror" id="keg_nama" name="keg_nama" required autofocus value="{{ auth()->user()->name }}" disabled readonly>
        </div>
        @error('but_kegiatan')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        <div class="mb-3 col-3">
            <label for="keg_nip" class="form-label">NIP</label>
            <input type="text" class="form-control @error('but_nip') is-invalid @enderror" id="keg_nip" name="keg_nip" required autofocus value="{{ auth()->user()->nip }}" disabled readonly>
        </div>
        @error('keg_nip')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        <div class="mb-3">
            <label for="keg_pangkat" class="form-label">Pangkat/Golongan</label>
            <input type="text" class="form-control @error('but_nip') is-invalid @enderror" id="keg_pangkat" name="keg_pangkat" required autofocus value="{{ $users->kepangkatan->pangkat }}/{{ $users->kepangkatan->golongan }}{{ $users->kepangkatan->ruang }}" disabled readonly>
        </div>
        @error('keg_pangkat')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        <div class="mb-3">
            <label for="keg_jenjang" class="form-label">Jenjang Jabatan</label>
            <select class="form-select @error('keg_jenjang') is-invalid @enderror" name="keg_jenjang" id="keg_jenjang">
                @foreach($jenjangs as $jenjang)
                @if(old('keg_jenjang') == $jenjang->id)
                    <option value="{{ $jenjang->id }}" selected disabled>{{ $jenjang->jen_jenjang }}</option>
                @else
                <option value="{{ $jenjang->id }}">{{ $jenjang->jen_jenjang }}</option>
                @endif
                @endforeach
            </select>
            @error('keg_jenjang')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="keg_butir" class="form-label">Butir Kegiatan</label>
            <select class="form-select @error('keg_butir') is-invalid @enderror" name="keg_butir" id="keg_butir">
                @foreach($butirs as $butir)
                @if(old('keg_butir') == $butir->id)
                    <option value="{{ $butir->id }}" selected>{{ $butir->but_kegiatan }}</option>
                @else
                <option value="{{ $butir->id }}">{{ $butir->but_kegiatan }}</option>
                @endif
                @endforeach
            </select>
            @error('keg_butir')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
        <label for="date" class="col-sm-1 col-form-label">Date</label>
                <div class="col-sm-4">
                    <div class="input-group date" id="datepicker">
                        <input type="text" class="form-control">
                        <span class="input-group-append">
                            <span class="input-group-text bg-white d-block">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </span>
                    </div>
                </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</main>
@endsection