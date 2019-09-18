@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h2>
      Prasarana Dan Sarana Pemerintahan
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

            
           <a href="{{route('sarpraspemerintah.simpan')}}" class="btn btn-primary dropdown-toggle"> Lihat Data Prasarana Dan Sarana Pemerintahan</a>



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
              <h3 class="box-title">Status Prasarana </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
                <th>No</th>
                <th>Jenis Prasarana</th>
                <th>Kondisi Prasarana</th>
                <th>Satuan Prasarana</th>
                <th>Angka Kondisi</th>
                
               
               
            </tr>
        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
 <td>{{$nomor+1}}</td>
   <td>{{(!is_null($dat->StatusPrasarana->id_jenis_prasarana)?$dat->StatusPrasarana->JenisPrasarana->jenis_prasarana_sarana:'-')}}</td>
   <td>{{(!is_null($dat->StatusPrasarana->id_satuan_prasarana)?$dat->StatusPrasarana->SatuanPrasarana->satuan_prasarana:'-')}}</td>
   <td>{{(!is_null($dat->StatusPrasarana->kondisi_prasarana_sarana)?$dat->StatusPrasarana->kondisi_prasarana_sarana:'-')}}</td>
  <td>{{(!is_null($dat->StatusPrasarana->angka_kondisi)?$dat->StatusPrasarana->angka_kondisi:'-')}}</td>
 

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
              <h3 class="box-title">Status Prasarana Lainnya </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
                <th>No</th>
                 <th>Macam Prasarana</th>
                <th>Satuan Prasarana</th>
                <th>Jumlah</th>
                <th>Status</th>
            </tr>


        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{(!is_null($dat->StatPrasaranaLainnya->id_prasarana_sarana)?$dat->StatPrasaranaLainnya->Prasarana->macam_prasaranan_sarana:'-')}}</td>
  <td>{{(!is_null($dat->StatPrasaranaLainnya->id_satuan_prasarana)?$dat->StatPrasaranaLainnya->SatuanPrasarana->satuan_prasarana:'-')}}</td>
   <td>{{(!is_null($dat->StatPrasaranaLainnya->jumlah)?$dat->StatPrasaranaLainnya->jumlah:'-')}}</td>
  <td>{{(!is_null($dat->StatPrasaranaLainnya->status_prasarana_sarana)?$dat->StatPrasaranaLainnya->status_prasarana_sarana:'-')}}</td>
 
  
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
              <h3 class="box-title">Status Sarana Transportasi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
                <th>No</th>
                <th>Jenis Sarana Transportasi</th>
                <th>keberadaan</th>
                <th>Jumlah</th>
            </tr>

        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->StatusSaranaTransportasi->Saranatransportasi->jenis_sarana_transportasi}}</td>
    <td>{{(!is_null($dat->StatusSaranaTransportasi->keberadaan_transportasi)?$dat->StatusSaranaTransportasi->keberadaan_transportasi:'-')}}</td>
  <td>{{(!is_null($dat->StatusSaranaTransportasi->jumlah)?$dat->StatusSaranaTransportasi->jumlah:'-')}}</td>
  
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