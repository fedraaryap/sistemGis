@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h2>
      Potensi Peternakan
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
             <a href="{{route('perternakan.simpan')}}" class="btn btn-primary dropdown-toggle">Menampilkan Data Potensi Peternakan</a>

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
              <h3 class="box-title">Mekanisme Pemasaran</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
                  <th>No</th>
                  <th>Jenis Pemasaran</th>
                <th>Kategori</th>
                <th>Status</th>
                
               
               
            </tr>
        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->MekanismePemasaran->jenis_pemasaran_sda}}</td>
  <td>{{$dat->MekanismePemasaran->katagori_pemasaran}}</td>
  <td>{{$dat->MekanismePemasaran->status_pemasaran}}</td>

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
              <h3 class="box-title">Jumlah Budidaya Ikan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
                <th>No</th>
                <th>Jenis Budidaya Ikan</th>
                <th>Jumlah Budidaya Ikan</th>
                <th>Jumlah Produksi Ikan</th>
            </tr>




        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->JumlahBudidayaIkan->BudidayaIkan->jenis_budidaya_ikan}}</td>
  <td>{{$dat->JumlahBudidayaIkan->jumlah_budidaya_ikan}}</td>
  <td>{{$dat->JumlahBudidayaIkan->jumlah_produksi_ikan}}</td>
 
  
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
              <h3 class="box-title">Populasi Ternak</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
                <th>No</th>
                <th>Jenis Ternak</th>
                <th>Jumlah Populasi</th>
                <th>Jumlah Pemilik</th>
            </tr>

        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->PopulasiTernak->JenisTernak->jenis_ternak}}</td>
  <td>{{$dat->PopulasiTernak->jumlah_populasi}}</td>
  <td>{{$dat->PopulasiTernak->jumlah_pemilik}}</td> 
  
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
              <h3 class="box-title">Pakan Ternak</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
                <th>No</th>
                <th>Keterangan Pakan Ternak</th>
                <th>Luas/Jumlah</th>
                <th>Kepemilikan</th>
                <th>Status Pemilikan</th>
            </tr>

        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->PakanTernak->ket_pakan_ternak}}</td>
  <td>{{$dat->PakanTernak->jumlah_luas}}</td>
  <td>{{$dat->PakanTernak->Kepemilikan->kepemilikan}}</td>
  <td>{{$dat->PakanTernak->Kepemilikan->status_kepemilikan}}</td> 
  
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
              <h3 class="box-title">Jumlah Produksi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
                <th>No</th>
               <th>Nama Produksi</th>
                <th>Jumlah Produksi</th>
            </tr>

        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->JumlahProduksi->Produksi->nama_produksi}}</td>
  <td>{{$dat->JumlahProduksi->jumlah_produksi}}</td>
  
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