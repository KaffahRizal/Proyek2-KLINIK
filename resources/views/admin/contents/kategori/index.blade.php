@extends('admin.main')

@section('content')
<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
    <div>
        <h3 class="fw-bold m-0">Kategori Fasilitas Kesehatan</h3>
        <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/admin/dashboard"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item">Admin</li>
              <li class="breadcrumb-item active">Kategori Faskes</li>
            </ol>
        </nav>
    </div>
</div>
<section class="section">
    <div class="row">
        <div class="card">
          <div class="card-body py-3">
            @if (Auth::user()->role == 'administrator')
            <div class="d-flex justify-content-end me-5">
                <a href="{{ route('kategori.create') }}" class="btn btn-primary my-3 btn-rounded">+ Kategori Faskes</a>
            </div>
            @endif
            <div class="table-responsive">
                @if (Auth::user()->role == 'faskes')
                <table class="table display table-striped table-hover table-bordered table-head-bg-secondary table-bordered-bd-secondary" id="add-row">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>Kategori Fasilitas Kesehatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>1.</td>
                            <td>Fasilitas Kesehatan Tingkat Pertama</td>
                        </tr>
                        <tr class="text-center">
                            <td>2.</td>
                            <td>Fasilitas Kesehatan Tingkat Kedua</td>
                        </tr>
                        <tr class="text-center">
                            <td>3.</td>
                            <td>Fasilitas Kesehatan Tingkat Lanjutan</td>
                        </tr>
                    </tbody>
                </table>

                @else

                <table class="table display table-striped table-hover table-bordered table-head-bg-secondary table-bordered-bd-secondary" id="add-row">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>Kategori Fasilitas Kesehatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategori as $kat)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $kat->nama }}</td>
                            <td class="d-flex justify-content-center">
                                <form action="{{ route('kategori.destroy', $kat->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
          </div>
        </div>

    </div>
  </section>
@endsection