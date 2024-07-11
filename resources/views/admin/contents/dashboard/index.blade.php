@extends('admin.main')

@section('content')
  <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-3">
      <div>
        <h3 class="fw-bold m-0">Dashboard</h3>
        <h3 class="op-7 mb-2">Anda berada di halaman admin</h3>
    </div>
  </div>
  <section class="section">
    <div class="row">
      <div class="col-md-4">
       <div class="card card" style="background-color: rgb(75, 205, 179);text-decoration: none; color: rgb(255, 255, 255)">
        <div class="card-body skew-shadow">
            <h5 class="op-8 ">Total Faskes</h5>
            <div class="pull-right">
              <h1 class="fw-bold op-10" style="font-size: 6rem">{{ $totalfaskes }}</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card card" style="background-color: rgb(75, 205, 179);text-decoration: none; color: rgb(255, 255, 255)">
         <div class="card-body skew-shadow">
             <h5 class="op-8 ">Total Provinsi</h5>
             <div class="pull-right">
               <h1 class="fw-bold op-10" style="font-size: 6rem">{{ $totalprovinsi }}</h1>
             </div>
           </div>
         </div>
       </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="card card" style="background-color: rgb(75, 205, 179);text-decoration: none; color: rgb(255, 255, 255)">
         <div class="card-body skew-shadow">
             <h5 class="op-8 ">Total Kabupaten/Kota</h5>
             <div class="pull-right">
               <h1 class="fw-bold op-10" style="font-size: 6rem">{{ $totalkabkota }}</h1>
             </div>
           </div>
         </div>
       </div>

       <div class="col-md-4">
        <div class="card card" style="background-color: rgb(75, 205, 179);text-decoration: none; color: rgb(255, 255, 255)">
         <div class="card-body skew-shadow">
             <h5 class="op-8">Total Nakes</h5>
             <div class="pull-right">
               <h1 class="fw-bold op-10" style="font-size: 6rem">2456</h1>
             </div>
           </div>
         </div>
       </div>
    </div>
    {{-- <div class="col-md-4">
      <div class="card card" style="background-color: rgb(84, 222, 195);text-decoration: none; color: rgb(255, 255, 255)">
       <div class="card-body skew-shadow">
         <h1 style="font-size: 6rem">{{ $totalprovinsi }}</h1>
           <h5 class="op-8">Provinsi</h5>
           <div class="pull-right">
             <h3 class="fw-bold op-8">88%</h3>
           </div>
         </div>
       </div>
     </div> --}}
  </section>
@endsection


    