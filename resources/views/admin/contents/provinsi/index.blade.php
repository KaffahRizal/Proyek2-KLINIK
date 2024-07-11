@extends('admin.main')

@section('content')
<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
    <div>
        <h3 class="fw-bold m-0">Provinsi</h3>
        <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/admin/dashboard"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item">Admin</li>
              <li class="breadcrumb-item active">Provinsi</li>
            </ol>
        </nav>
    </div>
</div>
<section class="section">
    <div class="row">
        <div class="card">
          <div class="card-body py-3">
            <div class="d-flex justify-content-end me-5">
                <a href="{{ route('provinsi.create') }}" class="btn btn-primary my-3 btn-rounded">+ Provinsi</a>
            </div>
            <div class="table-responsive">
                <table class="table display table-striped table-hover table-bordered table-head-bg-info table-bordered-bd-info" id="add-row">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>Nama Provinsi</th>
                            <th>Ibu Kota</th>
                            <th>Koordinat</th>
                            {{-- <th>Latitude</th>
                            <th>Longtitude</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($provinsi as $prov)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $prov->nama }}</td>
                            <td>{{ $prov->ibukota }}</td>
                            <td>{{ $prov->latitude }}, {{ $prov->longitude }}</td>
                            {{-- <td>{{ $prov->latitude }}</td>
                            <td>{{ $prov->longtitude }}</td> --}}
                            <td class="d-flex justify-content-center">
                                <a href="{{ route('provinsi.edit', $prov->id) }}" class="btn btn-warning btn-sm me-3">Edit</a>
                                <form action="{{ route('provinsi.destroy', $prov->id) }}" method="POST">
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