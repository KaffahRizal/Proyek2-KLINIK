@extends('admin.main')

@section('content')
<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
    <div>
        <h3 class="fw-bold m-0">Info Faskes</h3>
        <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/admin/dashboard"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item">Admin</li>
              <li class="breadcrumb-item active">Info Faskes</li>
            </ol>
        </nav>
    </div>
</div>
<section class="section">
    <div class="row">
        <div class="card " style="background-color: #55AD9B">
            <div class="container" >
                <h1 class="my-4">Detail Faskes</h1>
                <div class="card mb-4" style="background-color:#90e7d5">
                    <div class="card-header">
                        <h2>{{ $faskes->nama }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Nama Pengelola:</strong> {{ $faskes->nama_pengelola }}</p>
                                <p><strong>Alamat:</strong> {{ $faskes->alamat }}</p>
                                <p><strong>Website:</strong> <a href="{{ $faskes->website }}" target="_blank">{{ $faskes->website }}</a></p>
                                <p><strong>Email:</strong> {{ $faskes->email }}</p>
                                <p><strong>Kabupaten/Kota:</strong> {{ $faskes->kabkota->nama }}</p>
                                <p><strong>Rating:</strong> {{ $faskes->rating }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Latitude:</strong> {{ $faskes->latitude }}</p>
                                <p><strong>Longitude:</strong> {{ $faskes->longitude }}</p>
                                <p><strong>Jenis Faskes:</strong> {{ $faskes->jenis_faskes->nama }}</p>
                                <p><strong>Kategori:</strong> {{ $faskes->kategori->nama }}</p>
                            </div>
                        </div>
                        {{-- <a href="{{ route('faskes.info') }}" class="btn btn-primary mt-3">Kembali</a> --}}
                    </div>
                </div>
                </div>
            </div>
        </div>

    </div>
  </section>
@endsection


