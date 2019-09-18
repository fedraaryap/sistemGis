@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h2>
      Potensi Sumber Daya Manusia
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

      <a href="{{route('sdm.simpan')}}" class="btn btn-primary dropdown-toggle">Tambah data Potensi Sumber Daya Manusia</a>

      <div class="btn-group">
    <div class="col-auto mr-auto">
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
              <h3 class="box-title">Tenaga Kerja  </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
                <th>No</th>
                <th>Jenis Tenaga Kerja</th>
                <th>Jenis Kelamin</th>
                <th>Jumlah</th>
                
               
               
            </tr>
        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->TenagaKerja->jenis_tenaga_kerja}}</td>
  <td>{{$dat->TenagaKerja->jk_tenaga_kerja}}</td>
  <td>{{$dat->TenagaKerja->jumlah_sdm_kerja}}</td>

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
              <h3 class="box-title">Jumlah Sdm Desa  </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
                <th>No</th>
                <th>SDM Desa</th>
                <th>Jumlah SDM</th>
                <th>Jenis Kelamin</th>
            </tr>




        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->JumlahSdmDesa->SdmDesa->sdm_desa}}</td>
  <td>{{$dat->JumlahSdmDesa->jumlah_sdm}}</td>
  <td>{{$dat->JumlahSdmDesa->jk_sdm}}</td>
 
  
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
              <h3 class="box-title">Jumlah Sdm Pendidikan  </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
               <th>No</th>
                <th>Tingkat Pendidikan</th>
                <th>Usia Mulai</th>
                <th>Usia Akhir</th>
                <th>Jenis Kelamin</th>
                <th>Jumlah SDM Pendidikan</th>
            </tr>

        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->JumlahSdmPendidikan->StatusPendidikan->tingkat_pendidikan}}</td>
  <td>{{$dat->JumlahSdmPendidikan->StatusPendidikan->RangeUsia->usia_mulai}}</td>
  <td>{{$dat->JumlahSdmPendidikan->StatusPendidikan->RangeUsia->usia_akhir}}</td>
  <td>{{$dat->JumlahSdmPendidikan->jk_pendidikan}}</td>
  <td>{{$dat->JumlahSdmPendidikan->jumlah_sdm_pendidikan}}</td>
  
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
              <h3 class="box-title">Jumlah Status Sdm  </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
               <th>No</th>
                <th>Kepadatan</th>
                <th>Status Jumlah</th>
            </tr>

        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
 <td>{{$nomor+1}}</td>
  <td>{{$dat->JumlahStatusSdm->JumlahStatus->status_jumlah}}</td>
  <td>{{$dat->JumlahStatusSdm->jumlah_sdm}}</td>
  
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
              <h3 class="box-title">Jumlah Usia Sdm  </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
                <th>No</th>
                <th>Usia Mulai</th>
                <th>Usia Akhir</th>
                <th>Jenis Kelamin</th>
                <th>Jumlah</th>
            </tr>

        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->JumlahUsiaSdm->RangeUsia->usia_mulai}}</td>
  <td>{{$dat->JumlahUsiaSdm->RangeUsia->usia_akhir}}</td>
  <td>{{$dat->JumlahUsiaSdm->jk_usia}}</td>
  <td>{{$dat->JumlahUsiaSdm->jumlah_sdm_usia}}</td>
  
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
              <h3 class="box-title">Kualitas Angkatan  </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>

            
            <tr>
               <th>No</th>
                <th>Usia Mulai</th>
                <th>Usia Akhir</th>
                <th>Jenis Angkatan</th>
                <th>Jenis Kelamin</th>
            </tr>

        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->KualitasAngkatan->RangeAngkatan->usia_mulai}}</td>
  <td>{{$dat->KualitasAngkatan->RangeAngkatan->usia_akhir}}</td>
  <td>{{$dat->KualitasAngkatan->jenis_angkatan}}</td>
  <td>{{$dat->KualitasAngkatan->jk_angkatan}}</td>
  
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