@extends('admin.main')

@section('content')
<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
    <div>
        <h3 class="fw-bold m-0">Jenis Fasilitas Kesehatan</h3>
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
                <table class="table display table-striped table-hover table-bordered table-head-bg-danger table-bordered-bd-danger" id="add-row">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>Jenis Fasilitas Kesehatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>1.</td>
                            <td>Puskesmas</td>
                        </tr>
                        <tr class="text-center">
                            <td>2.</td>
                            <td>Klinik</td>
                        </tr>
                        <tr class="text-center">
                            <td>3.</td>
                            <td>Dokter Umum</td>
                        </tr>
                        <tr class="text-center">
                            <td>4.</td>
                            <td>Dokter Spesialis</td>
                        </tr>
                        <tr class="text-center">
                            <td>5.</td>
                            <td>Dokter Gigi</td>
                        </tr>
                        <tr class="text-center">
                            <td>6.</td>
                            <td>Rumah Sakit Umum</td>
                        </tr>
                        <tr class="text-center">
                            <td>7.</td>
                            <td>Rumah Sakit Khusus</td>
                        </tr>
                        <tr class="text-center">
                            <td>8.</td>
                            <td>Klinik Utama</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table display table-striped table-hover table-bordered table-head-bg-danger table-bordered-bd-danger" id="add-row">
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