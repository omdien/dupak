@extends('dashboard.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Kegiatan Didin Handiman</h1>
        </div>
        <div class="table-responsive">
            {{-- col-lg-8" --}}
            <a href="/dashboard/butirs/create" class="btn btn-primary mb-3">Tambah Kegiatan</a>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Butir Kegiatan</th>
                  <th scope="col">Nama Kegiatan</th>
                  <th scope="col">Tanggal</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($kegiatans as $kegiatan)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    {{-- <td>{{ $kegiatan->butir->but_id }}</td> --}}
                    <td>{{ $kegiatan->keg_nama }}</td>
                    <td>{{ $kegiatan->keg_tgl }}</td>
                    <td>
                        <a href="/dashboard/kegiatans/{{ $kegiatan->keg_slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                        <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
                        <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
                    </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
  </main>
@endsection