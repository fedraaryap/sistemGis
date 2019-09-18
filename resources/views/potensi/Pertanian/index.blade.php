@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h2>
      Potensi Pertanian
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

             <a href="{{route('pertanian.simpan')}}" class=" btn btn-primary dropdown-toggle">Menampilkan Data Potensi Pertanian</a>

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
              <h3 class="box-title">Luas Lahan Pertanian</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
               
                  <th>No</th>
                  <th>Level Wilayah</th>
                  <th>Wilayah</th>
                  <th>Tahun</th>
                <th>Keterangan Lahan</th>
                <th>Pemilik Lahan</th>
                <th>Luas Lahan</th>
                
               
               
            </tr>
        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{(!is_null($dat->ProfilDesa->id_desa)?$dat->ProfilDesa->Wilayah->LvWil->nama_lv_wil:'-')}}</td>
  <td>{{(!is_null($dat->ProfilDesa->id_desa)?$dat->ProfilDesa->Wilayah->nama_wil:'-')}}</td>
  <td>{{(!is_null($dat->ProfilDesa->id_desa)?$dat->ProfilDesa->id_tahun:'-')}}</td>
  <td>{{$dat->LuasLahan->KetLahan->ket_lahan}}</td>
  <td>{{$dat->LuasLahan->pemilik_lahan}}</td>
  <td>{{$dat->LuasLahan->luas_lahan}}</td>

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
              <h3 class="box-title">Jumlah Pemilik Lahan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
                <th>No</th>
                 <th>Level Wilayah</th>
                  <th>Wilayah</th>
                  <th>Tahun</th>
                <th>Range Lahan</th>
                <th>Jenis Lahan</th>
                <th>Jumlah Pemilik</th>
            </tr>




        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
   <td>{{(!is_null($dat->ProfilDesa->id_desa)?$dat->ProfilDesa->Wilayah->LvWil->nama_lv_wil:'-')}}</td>
  <td>{{(!is_null($dat->ProfilDesa->id_desa)?$dat->ProfilDesa->Wilayah->nama_wil:'-')}}</td>
  <td>{{(!is_null($dat->ProfilDesa->id_desa)?$dat->ProfilDesa->id_tahun:'-')}}</td>
  <td>{{$dat->JumlahPemilikLahan->RangeLahan->range_lahan}}</td>
  <td>{{$dat->JumlahPemilikLahan->jenis_lahan}}</td>
  <td>{{$dat->JumlahPemilikLahan->jumlah_pemilik}}</td>
 
  
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
              <h3 class="box-title">Produktifitas Pertanian</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
                <th>No</th>
                <th>Mekanisme Pemasaran</th>
                <th>Jenis Produktifitas</th>
                <th>Jenis Tanaman</th>
                <th>Luas</th>
                <th>Hasil</th>
                <th>Kepemilikan Pertanian</th>
            </tr>

        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->ProduktifitasPertanian->Produktifitas->Pemasaran->mekanisme_pemasaran}}</td>
  <td>{{$dat->ProduktifitasPertanian->Produktifitas->jenis_produktifitas}}</td>
  <td>{{$dat->ProduktifitasPertanian->jenis_tanaman}}</td>
  <td>{{$dat->ProduktifitasPertanian->luas}}</td>
  <td>{{$dat->ProduktifitasPertanian->hasil}}</td>
  <td>{{$dat->ProduktifitasPertanian->kepemilikan_pertanian}}</td>
  
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
              <h3 class="box-title">Hutan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
                <th>No</th>
                <th>Kondisi Hutan</th>
                <th>Dampak Kondisi Hutan</th>
                 <th>Status</th>
            </tr>

        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{(!is_null($dat->Hutan->id_kondisi)?$dat->Hutan->Kondisi->jenis_hutan:'-')}}</td>
  <td>{{(!is_null($dat->Hutan->id_dampak)?$dat->Hutan->Dampak->jenis_dampak:'-')}}</td>
  <td>{{$dat->Hutan->status}}</td>
  
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