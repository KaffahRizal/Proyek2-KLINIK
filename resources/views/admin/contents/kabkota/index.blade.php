@extends('admin.main')

@section('content')
<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
    <div>
        <h3 class="fw-bold m-0">Kabupaten Kota</h3>
        <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/admin/dashboard"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item">Admin</li>
              <li class="breadcrumb-item active">Kabkota</li>
            </ol>
        </nav>
    </div>
</div>
<section class="section">
    <div class="row">
        <div class="card">
          <div class="card-body py-3">
            <div class="d-flex justify-content-end me-5">
                <a href="{{ route('kabkota.create') }}" class="btn btn-primary my-3 btn-rounded">+ KabKota</a>
            </div>
            <div class="table-responsive">
                <table class="table display table-striped table-hover table-bordered table-head-bg-secondary table-bordered-bd-secondary" id="add-row">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>Nama Kabupaten</th>
                            {{-- <th>Latitude</th>
                            <th>Longtitude</th> --}}
                            <th>Provinsi</th>
                            <th>Koordinat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kabkota as $kk)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $kk->nama }}</td>
                            {{-- <td>{{ $kk->latitude }}</td>
                            <td>{{ $kk->longtitude }}</td> --}}
                            <td>{{ $kk->provinsi->nama }}</td>
                            <td>{{ $kk->latitude }}, {{ $kk->longitude }}</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{ route('kabkota.edit', $kk->id) }}" class="btn btn-warning btn-sm me-3">Edit</a>
                                <form action="{{ route('kabkota.destroy', $kk->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
        </div>

    </div>
  </section>
@endsection