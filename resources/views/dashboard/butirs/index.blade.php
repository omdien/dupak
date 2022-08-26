@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Butir Kegiatan Pranata Komputer</h1>
  </div>
  @if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
  @endif
  <div class="table-responsive">
    {{-- col-lg-8" --}}
    <a href="/dashboard/butirs/create" class="btn btn-primary mb-3">Tambah Butir</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Kegiatan</th>
          <th scope="col">Sub Unsur Kegiatan</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($butirs as $butir)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $butir->but_kegiatan }}</td>
          <td>{{ $butir->kategori02->kat02_kategori }}</td>
          <td>
            <a href="/dashboard/butirs/{{ $butir->but_slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
            <a href="/dashboard/butirs/{{ $butir->but_slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="/dashboard/butirs/{{ $butir->but_slug}}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Anda yakin ?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</main>
@endsection