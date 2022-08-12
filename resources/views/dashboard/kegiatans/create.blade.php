@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Butir Kegiatan Baru</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/butirs">
        @csrf
        <div class="mb-3">
          <label for="kegiatan" class="form-label">Butir Kegiatan</label>
          <input type="text" class="form-control" id="kegiatan" name="kegiatan">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</main>
@endsection