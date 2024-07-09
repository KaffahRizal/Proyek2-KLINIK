@extends('admin.main')

@section('content')
<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
    <div>
        <h3 class="fw-bold m-0">Edit Kabupaten</h3>
        <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/admin/dashboard"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item">Admin</li>
              <li class="breadcrumb-item active">Edit Kabupaten</li>
            </ol>
        </nav>
    </div>
</div>
<section class="section">
    <div class="row">
        <div class="card">
          <div class="card-body py-3">
            <h2 class="p-3">Edit Data Kabupaten</h2>
            <form action="{{ route('kabkota.update', $kabkota->id) }}" method="POST" class="py-3">
                @csrf
                @method('PUT')
                <div class="form-group row d-flex justify-content-center">
                    <label for="kabkota" class="col-form-label col-8">Nama Kabupaten</label> 
                    <div class="col-8">
                        <input id="nama" name="nama" type="text" 
                            class="form-control border border-secondary border-2"
                            value="{{ $kabkota->nama ?? '' }}"
                        >
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label for="latitude" class="col-form-label col-8">Latitude</label> 
                    <div class="col-8">
                    <input id="latitude" name="latitude" type="text" 
                        class="form-control border border-secondary border-2"
                        value="{{ $kabkota->latitude ?? '' }}"
                    >
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label for="longitude" class="col-form-label col-8">Longitude</label> 
                    <div class="col-8">
                    <input id="longitude" name="longitude" type="text" 
                        class="form-control border border-secondary border-2"
                        value="{{ $kabkota->longitude ?? '' }}"
                    >
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label for="provinsi_id" class="col-form-label col-8">Provinsi</label>
                    <div class="col-8">
                        <select name="provinsi_id" id="provinsi_id" class="form-select border border-secondary border-2">
                            <option value="">Pilih Provinsi</option>
                            @foreach ($provinsi as $prov)
                                <option value="{{ $prov->id }}" {{ $kabkota->provinsi_id == $prov->id ? 'selected': '' }}>{{ $prov->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <input type="hidden" name="id" id="id" value="{{ $kabkota->id }}">
                <div class="form-group row d-flex justify-content-center">
                    <div class="col-8 d-flex justify-content-center">
                        <a href="{{ route('kabkota') }}" class="btn btn-danger btn-rounded me-3">Cancel</a>
                        <button name="submit" type="submit" class="btn btn-primary btn-rounded">Ubah</button>
                    </div>
                </div>
            </form>
          </div>
        </div>

    </div>
  </section>
@endsection