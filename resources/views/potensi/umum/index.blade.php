@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h2>
      Potensi Potensi Umum
      </h2>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
        </section>
         <!-- Main Section -->
        <section class="main-section">
        <!-- Add Your Content Inside -->
            <div class="content">
            <!-- Remove This Before You Start -->
            <h1></h1>

            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            </div>
            @endif
      <a href="{{route('umum.simpan')}}" class=" btn btn-primary dropdown-toggle">Tambah data Potensi Umum</a>

      <div class="btn-group">
    <div class="ml-5">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Potensi
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="{{route('umum')}}">Potensi Umum</a></li>
      <li><a href="{{route('ekonomi')}}">Potensi Lembaga Ekonomi</a></li>
      <li><a href="{{route('kelembagaan')}}">Potensi Kelembagaan</a></li>
      <li><a href="{{route('pertanian')}}">Potensi Pertanian</a></li>
      <li><a href="{{route('perternakan')}}">Potensi Peternakan</a></li>
      <li><a href="{{route('sarprasdesa')}}">Potensi Prasarana Desa</a></li>
       <li><a href="{{route('sda')}}">Potensi SDA</a></li>
      <li><a href="{{route('sdm')}}">Potensi SDM</a></li>
      <li><a href="{{route('sarpraspemerintah')}}">Sarana Prasarana Pemerintahan</a></li>
      <li><a href="{{route('ruangpublik')}}">Ruang Publik</a></li>
    </ul>
  </div>
</div>

       <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Status Orbitasi </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
                <th>No</th>
                <th>Orbitasi</th>
                <th>Satuan Orbitasi</th>
                <th>Status Angka</th>
                
               
               
            </tr>
        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
   <td>{{(!is_null($dat->StatusOrbitasi->id_orbitasi)?$dat->StatusOrbitasi->Orbitasi->orbitasi:'-')}}</td>
  <td>{{(!is_null($dat->StatusOrbitasi->id_satuan_orbitasi)?$dat->StatusOrbitasi->SatuanOrbitasi->orbitasi:'-')}}</td>
  <td>{{(!is_null($dat->StatusOrbitasi->status_angka)?$dat->StatusOrbitasi->status_angka:'-')}}</td>

    @endforeach
</tbody>
</table>
</div>
</div>
</div>
</section>

 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Luas Wilayah </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
                <th>No</th>
                <th>Jenis Wilayah</th>
                <th>Luas Wilayah</th>
                <th>Satuan</th>
                <th>Status</th>
            </tr>




        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>

  <td>{{(!is_null($dat->LuasWilayah->id_wilayah_lahan)?$dat->LuasWilayah->LuasWil->jenis_wilayah:'-')}}</td>
  <td>{{(!is_null($dat->LuasWilayah->luas_wilayah)?$dat->LuasWilayah->luas_wilayah:'-')}}</td>
  <td>{{(!is_null($dat->LuasWilayah->id_satuan)?$dat->LuasWilayah->SatuanWil->satuan:'-')}}</td>
  <td>{{(!is_null($dat->LuasWilayah->satus)?$dat->LuasWilayah->satus:'-')}}</td>
 
  
</tr>
	@endforeach
</tbody>
</table>
</div>
</div>
</div>
</section>


<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Batas Wilayah </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
              <th>No</th>
                <th>Batas</th>
                <th>Batas Desa</th>
                <th>Batas Kecamatan</th>
            </tr>

        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->BatasWilayah->Batas->batas}}</td>
  <td>{{$dat->BatasWilayah->batas_desa}}</td>
  <td>{{$dat->BatasWilayah->batas_kecamatan}}</td>
  
</tr>
  @endforeach
</tbody>
</table>
</div>
</div>
</div>
</section>

 
</section>

</div>


@endsection