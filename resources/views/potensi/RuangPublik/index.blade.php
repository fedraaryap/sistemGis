@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h2>
      Ruang Publik
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
 <a href="{{route('ruangpublik.simpan')}}" class=" btn btn-primary dropdown-toggle">Menampilkan Data Ruang Publik</a>


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
              <h3 class="box-title">Kualitas Udara</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
                  <th>No</th>
                 <th>Sumber</th>
                <th>Jumlah Lokasi</th>
                <th>Polutan</th>
                <th>Efek</th>
                <th>Kepemilikan</th>
                
               
               
            </tr>
        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->KualitasUdara->SumberKualitas->sumber}}</td>
  <td>{{$dat->KualitasUdara->jumlah_lokasi_pencemaran}}</td>
  <td>{{$dat->KualitasUdara->politan_pencemaran}}</td>
  <td>{{$dat->KualitasUdara->efek}}</td>
  <td>{{$dat->KualitasUdara->kepemilikan_pemda_swasta}}</td>

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
              <h3 class="box-title">Kebisingan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
                <th>No</th>
                <th>Tingkat Kebisingan</th>
                <th>Dampak Kebisingan</th>
                <th>Sumber Kebisingan</th>
                <th>Efek Terhadap Penduduk</th>
            </tr>




        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->Kebisingan->TingkatKebisingan->tingkat_kebisingan}}</td>
  <td>{{$dat->Kebisingan->dampak_kebisingan}}</td>
  <td>{{$dat->Kebisingan->sumber_kebisingan}}</td>
  <td>{{$dat->Kebisingan->efek_terhadap_penduduk}}</td>
 
  
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
              <h3 class="box-title">Status Lahan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
                <th>No</th>
                 <th>Jenis Taman</th>
                <th>Lokasi Wisata </th>
                <th>Keberadaan</th>
                <th>Luas</th>
                <th>Tingkat Pemanfaatan</th>
            </tr>

        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{(!is_null($dat->StatusLahan->id_taman)?$dat->StatusLahan->Taman->jenis_taman:'-')}}</td>
  <td>{{(!is_null($dat->StatusLahan->id_wisata)?$dat->StatusLahan->Wisata->lokasi_wisata:'-')}}</td>
  <td>{{$dat->StatusLahan->keberadaan}}</td>
  <td>{{$dat->StatusLahan->luas}}</td>
  <td>{{$dat->StatusLahan->tingkat_pemanfaatan}}</td>
  
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