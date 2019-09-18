@extends('layouts.dashboard')

@section('content')




<div class="content-header">


      <h2>
      Potensi Kelembagaan
      </h2>

        <head>
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
        
<!-- <a href="{{route('kelembagaan.simpan')}}" class="btn btn-primary dropdown-toggle">Menampilkan Data Kelembagaan</a> -->
  


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


                <!-- /.box-header -->
          <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lembaga Politik</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
          
            
            <tr>
                <th>No</th>
                <th>Nama Partai</th>
                <th>Alamat Partai</th>
                <th>Jenis Kegiatan</th>
                <th>Organisasi Underbow</th>
                <th>Pengurus</th>
                <th>Anggota</th>
                <th>Pemilu Terakhir</th>
          
                
               
            </tr>
        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->JumlahLembaga->Partai->nama_partai}}</td>
  <td>{{$dat->JumlahLembaga->Partai->alamat_sekret}}</td>
  <td>{{$dat->JumlahLembaga->Partai->jenis_kegiatan}}</td>
  <td>{{$dat->JumlahLembaga->Partai->organisasi_underbow}}</td>
  <td>{{$dat->JumlahLembaga->pengurus}}</td>
  <td>{{$dat->JumlahLembaga->anggota}}</td>
  <td>{{$dat->JumlahLembaga->pemilu_terakhir}}</td>

 

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
              <h3 class="box-title">Lembaga Pendidikan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
                <th>no</th>
                <th>Jenis Sekolah</th>
                <th>Nama tingkat pendidikan</th>
                <th>Status</th>
                <th>Jumlah sekolah</th>
                <th>Jumlah Pengajar</th>
                <th>Jumlah Siswa</th>
                <th>kepemilikan</th>
               
            </tr>

        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->Lempendidikan->Sekolah->jenisPendidikan->jenis_pedidikan}}</td>
  <td>{{$dat->Lempendidikan->Sekolah->nama_sekolah}}</td>
  <td>{{$dat->Lempendidikan->status_sekolah}}</td>
  <td>{{$dat->Lempendidikan->jumlah_sekolah}}</td>
  <td>{{$dat->Lempendidikan->jumlah_pengajar}}</td>
  <td>{{$dat->Lempendidikan->jumlah_siswa}}</td>
  <td>{{$dat->Lempendidikan->kepemilikan}}</td>

  
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
              <h3 class="box-title">Lembaga Keamanan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
                <th>No</th>
                <th>Jenis Keamanan</th>
                <th>Jumlah Anggota</th>
                <th>Jumlah Poskamling</th>
                <th>Jumlah Kegiatan</th>
                <th>Nama Organisasi Induk</th>
                <th>Status</th>     
            </tr>
        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->Keamanan->JenisKeamanan->jenis_keamanan}}</td>
  <td>{{$dat->Keamanan->jumlah_anggota}}</td>
  <td>{{$dat->Keamanan->jumlah_poskamling}}</td>
  <td>{{$dat->Keamanan->jumlah_kegiatan}}</td>
  <td>{{$dat->Keamanan->nama_organisasi_induk}}</td>
  <td>{{$dat->Keamanan->status}}</td>
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