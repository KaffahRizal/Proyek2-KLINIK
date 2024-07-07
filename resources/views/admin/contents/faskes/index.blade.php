@extends('admin.main')

@section('content')
  <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
      <div>
        <h3 class="fw-bold m-0">Faskes</h3>
        <nav>
          <ol class="breadcrumb mb-3">
            <li class="breadcrumb-item"><a href="/admin/contents/faskes">Home</a></li>
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active">Faskes</li>
          </ol>
        </nav>
        <h3 class="op-7 mb-2">Anda berada di halaman admin</h3>
    </div>
  </div>
  <section class="section">
    <div class="row">
        <div class="card">
          <div class="card-body py-3">
            <div class="d-flex justify-content-end me-5">
                <a href="{{ route('faskes.create') }}" class="btn btn-primary my-3 btn-rounded">+ Faskes</a>
            </div>
            <div class="table-responsive">
                <table class="table display table-striped table-hover table-bordered table-head-bg-info table-bordered-bd-info" id="add-row">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Nama Pengelola</th>
                            <th>Alamat</th>
                            <th>Website</th>
                            <th>Email</th>
                            <th>Kabupaten</th>
                            <th>Rating</th>
                            <th>Latitude</th>
                            <th>Longtitude</th>
                            <th>Jenis Faskes</th>
                            <th>Kategori</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($faskes as $fas)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $fas->nama }}</td>
                            <td>{{ $fas->nama_pengelola }}</td>
                            <td>{{ $fas->alamat }}</td>
                            <td>{{ $fas->website }}</td>
                            <td>{{ $fas->email }}</td>
                            <td>{{ $fas->kabkota_id }}</td>
                            <td>{{ $fas->rating }}</td>
                            <td>{{ $fas->latitude }}</td>
                            <td>{{ $fas->longtitude }}</td>
                            <td>{{ $fas->jenis_faskes_id }}</td>
                            <td>{{ $fas->kategori_id }}</td>
                            <td class="d-flex">
                                <a href="{{ route('faskes.edit', $fas->id) }}" class="btn btn-warning btn-sm me-3">Edit</a>
                                <form action="{{ route('faskes.destroy', $fas->id) }}" method="POST">
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