@extends('admin.main')

@section('content')
<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
    <div>
        <h3 class="fw-bold m-0">Edit Faskes</h3>
        <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/admin/dashboard"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item">Admin</li>
              <li class="breadcrumb-item active">Edit Faskes</li>
            </ol>
        </nav>
    </div>
</div>
<section class="section">
    <div class="row">
        <div class="card">
          <div class="card-body py-3">
            <h2 class="p-3">Edit Data Fasilitas Kesehatan</h2>
            <form action="{{ route('faskes.update', $faskes->id) }}" method="POST" class="py-3">
                @csrf
                @method('PUT')
                <div class="form-group row d-flex justify-content-center">
                    <label for="faskes" class="col-form-label col-8">Nama Fasilitas Kesehatan</label> 
                    <div class="col-8">
                        <input id="nama" name="nama" type="text" 
                        class="form-control border border-secondary border-2"
                        value="{{ $faskes->nama ?? '' }}">
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label for="nama_pengelola" class="col-form-label col-8">Nama Pengelola</label> 
                    <div class="col-8">
                    <input id="nama_pengelola" name="nama_pengelola" type="text" 
                    class="form-control border border-secondary border-2"
                    value="{{ $faskes->nama_pengelola ?? '' }}">
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label for="alamat" class="col-form-label col-8">Alamat</label> 
                    <div class="col-8">
                        <input id="alamat" name="alamat" type="text" 
                        class="form-control border border-secondary border-2"
                        value="{{ $faskes->alamat ?? '' }}">
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label for="website" class="col-form-label col-8">Website</label> 
                    <div class="col-8">
                        <input id="website" name="website" type="text" 
                        class="form-control border border-secondary border-2"
                        value="{{ $faskes->website ?? '' }}">
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label for="email" class="col-form-label col-8">Email</label> 
                    <div class="col-8">
                        <input id="email" name="email" type="email" 
                        class="form-control border border-secondary border-2"
                        value="{{ $faskes->email ?? '' }}">
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label for="kabkota_id" class="col-form-label col-8">Kabupaten/Kota</label>
                    <div class="col-8">
                        <select name="kabkota_id" id="kabkota_id" class="form-select border border-secondary border-2">
                              <option value="">Pilih Kabupaten/Kota</option>
                              @foreach ($kabkotas as $kabkota)
                                  <option value="{{ $kabkota->id }}" {{ $faskes->kabkota_id == $kabkota->id ? 'selected' : ''}}>{{ $kabkota->nama }}</option>
                              @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label for="rating" class="col-form-label col-8">Rating</label> 
                    <div class="col-8">
                        <input id="rating" name="rating" type="text" 
                        class="form-control border border-secondary border-2"
                        value="{{ $faskes->rating ?? '' }}">
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label for="latitude" class="col-form-label col-8">Latitude</label> 
                    <div class="col-8">
                    <input id="latitude" name="latitude" type="text" 
                    class="form-control border border-secondary border-2"
                    value="{{ $faskes->latitude ?? '' }}">
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label for="longtitude" class="col-form-label col-8">Longtitude</label> 
                    <div class="col-8">
                    <input id="longitude" name="longitude" type="text" 
                    class="form-control border border-secondary border-2"
                    value="{{ $faskes->longitude ?? '' }}">
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label for="jenis_faskes_id" class="col-form-label col-8">Jenis Faskes</label>
                    <div class="col-8">
                        <select name="jenis_faskes_id" id="jenis_faskes_id" class="form-select border border-secondary border-2">
                              <option value="">Pilih Jenis Faskes</option>
                              @foreach ($jenis_faskes as $jenis_faskes)
                                  <option value="{{ $jenis_faskes->id }}" {{ $faskes->jenis_faskes_id == $jenis_faskes->id ? 'selected' : ''}}>{{ $jenis_faskes->nama }}</option>
                              @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label for="kategori_id" class="col-form-label col-8">Kategori</label>
                    <div class="col-8">
                        <select name="kategori_id" id="kategori_id" class="form-select border border-secondary border-2">
                              <option value="">Pilih Kategori</option>
                              @foreach ($kategori as $kategori)
                                  <option value="{{ $kategori->id }}" {{ $faskes->kategori_id == $kategori->id ? 'selected' : ''}}>{{ $kategori->nama }}</option>
                              @endforeach
                        </select>
                    </div>
                </div>
                <input type="hidden" name="id" id="id" value="{{ $faskes->id }}">
                <div class="form-group row d-flex justify-content-center">
                    <div class="col-8 d-flex justify-content-center">
                        <a href="{{ route('faskes') }}" class="btn btn-danger btn-rounded me-3">Cancel</a>
                        <button name="submit" type="submit" class="btn btn-primary btn-rounded">Ubah</button>
                    </div>
                </div>
            </form>
          </div>
        </div>

    </div>
  </section>
@endsection