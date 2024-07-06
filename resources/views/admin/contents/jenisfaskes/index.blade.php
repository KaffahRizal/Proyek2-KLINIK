@extends('admin.main')

@section('content')
<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
    <div>
        <h3 class="fw-bold m-0">Jenis Faskes</h3>
        <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/admin/dashboard"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item">Admin</li>
              <li class="breadcrumb-item active">Jenis Faskes</li>
            </ol>
        </nav>
    </div>
</div>
<section class="section">
    <div class="row">
        <div class="card">
          <div class="card-body py-3">
            <div class="d-flex justify-content-end me-5">
                <a href="{{ route('jenis.create') }}" class="btn btn-primary my-3 btn-rounded">+ Jenis Faskes</a>
            </div>
            <div class="table-responsive">
                <table class="table display table-striped table-hover table-bordered table-head-bg-success table-bordered-bd-success" id="add-row">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>Jenis Fasilitas Kesehatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jenis as $j)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $j->nama }}</td>
                            <td class="d-flex justify-content-center">
                                <form action="{{ route('jenis.destroy', $j->id) }}" method="POST">
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