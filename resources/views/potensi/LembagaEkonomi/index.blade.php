@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h2>
      Potensi Lembaga Ekonomi
      </h2>
</section>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>

      <body>

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
             <a href="{{route('ekonomi.simpan')}}" class=" btn btn-sm btn-primary">Menampilkan Data Lembaga Ekonomi</a>

             <div class="btn-group">
    <div class="col-auto mr-auto">
  <button class=" btn btn-sm btn-primary" type="button" data-toggle="dropdown">Potensi
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
              <h3 class="box-title">Lembaga Ekonomi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
                <th>No</th>
                  <th>Wilayah</th>
                  <th>Tahun</th>
      	        <th>Nama Lembaga</th>
                <th>Jumlah Pengurus</th>
                <th>Jumlah Anggota</th>
                <th>Jumlah Kegiatan</th>
                <th>Jumlah Unit Lembaga</th>
                
               
            </tr>
        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{(!is_null($dat->ProfilDesa->id_desa)?$dat->ProfilDesa->Wilayah->nama_wil:'-')}}</td>
  <td>{{(!is_null($dat->ProfilDesa->id_desa)?$dat->ProfilDesa->id_tahun:'-')}}</td>
  <td>{{$dat->JumlahOrang->LembagaEkonomi->nama_lembaga_ekonomi}}</td>
  <td>{{$dat->JumlahOrang->jumlah_pengurus}}</td>
  <td>{{$dat->JumlahOrang->jumlah_anggota}}</td>
  <td>{{$dat->JumlahOrang->jumlah_kegiatan}}</td>
  <td>{{$dat->JumlahOrang->jumlah_unit_lembaga}}</td>

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
              <h3 class="box-title">Usaha Jasa Dan Perdagangan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
                <th>No</th>
                <th>Jenis Jasa Usaha</th>
                <th>Jumlah Unit Usaha</th>
                <th>Jenis Produksi Kegiatan</th>
                <th>Tenaga Kerja</th>
                
               
            </tr>




        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
   <td>{{$dat->StatusJasaUsaha->JasaUsaha->jasa_usaha}}</td>
  <td>{{$dat->StatusJasaUsaha->jumlah_unit_usaha}}</td>
  <td>{{$dat->StatusJasaUsaha->jenis_produksi_kegiatan}}</td>
  <td>{{$dat->StatusJasaUsaha->tenaga_kerja_usaha}}</td>
 
  
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
              <h3 class="box-title">Usaha Jasa Pengangkutan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            

            <tr>
                <th>No</th>
                <th>Jenis Angkutan</th>
                <th>Jumlah Pemilik</th>
                <th>Jumlah Kapasitas</th>
                <th>Jumlah Unit Angkutan</th>
                <th>Tenaga Kerja Angkutan</th>
            </tr>

        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->JumlahAngkutan->JenisAngkutan->jenis_angkutan}}</td>
  <td>{{$dat->JumlahAngkutan->jumlah_pemilik}}</td>
  <td>{{$dat->JumlahAngkutan->jumlah_kapasitas}}</td>
  <td>{{$dat->JumlahAngkutan->jumlah_unit_angkutan}}</td>
  <td>{{$dat->JumlahAngkutan->tenaga_kerja_angkutan}}</td>
  
</tr>
  @endforeach
</tbody>
</table>
</div>
</div>
</div>
</section>

 </script>
</body>

</section>

</div>

@endsection