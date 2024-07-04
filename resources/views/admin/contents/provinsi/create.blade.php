@extends('admin.main')

@section('content')
<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
    <div>
        <h3 class="fw-bold m-0">+ Provinsi</h3>
        <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/admin/dashboard"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item">Admin</li>
              <li class="breadcrumb-item active">+ Provinsi</li>
            </ol>
        </nav>
    </div>
</div>
<section class="section">
    <div class="row">
        <div class="card">
          <div class="card-body py-3">
            <h2 class="p-3">Tambah Data Provinsi</h2>
            <form action="{{ route('provinsi.store') }}" method="POST" class="py-3">
                @csrf
                <div class="form-group row d-flex justify-content-center">
                    <label for="provinsi" class="col-form-label col-8">Nama Provinsi</label> 
                    <div class="col-8">
                        <input id="nama" name="nama" type="text" class="form-control border border-secondary border-2">
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label for="ibukota" class="col-form-label col-8">Ibu Kota</label> 
                    <div class="col-8">
                    <input id="ibukota" name="ibukota" type="text" class="form-control border border-secondary border-2">
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label for="latitude" class="col-form-label col-8">Latitude</label> 
                    <div class="col-8">
                    <input id="latitude" name="latitude" type="text" class="form-control border border-secondary border-2">
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label for="longtitude" class="col-form-label col-8">Longtitude</label> 
                    <div class="col-8">
                    <input id="longtitude" name="longtitude" type="text" class="form-control border border-secondary border-2">
                    </div>
                </div> 
                <div class="form-group row d-flex justify-content-center">
                    <div class="col-8 d-flex justify-content-center">
                        <a href="{{ route('provinsi') }}" class="btn btn-danger btn-rounded me-3">Cancel</a>
                        <button name="submit" type="submit" class="btn btn-primary btn-rounded">Submit</button>
                    </div>
                </div>
            </form>
          </div>
        </div>

    </div>
  </section>
@endsection