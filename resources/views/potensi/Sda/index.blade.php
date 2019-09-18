@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h2>
      Potensi Sumber Daya Alam
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

      <a href="{{route('sda.simpan')}}" class=" btn btn-primary dropdown-toggle">Tambah data Potensi Sumber Daya Alam</a>


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
              <h3 class="box-title">Status Sumber Air  </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
                  <th>No</th>
                <th>Sumber Air</th>
                <th>Status Sumber</th>
                
               
               
            </tr>
        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->StatusSumberAir->SumberAir->sumber_air}}</td>
  <td>{{$dat->StatusSumberAir->status_sumber}}</td>

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
              <h3 class="box-title">Potensi Air  </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
                <th>No</th>
                <th>Jenis Potensi Air</th>
                <th>Status Potensi Air</th>
            </tr>


        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->PotensiAir->jenis_potensi_air}}</td>
  <td>{{$dat->PotensiAir->status_potensi_air}}</td>
 
  
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
              <h3 class="box-title">Status Air  </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>

            
            <tr>
                <th>No</th>
                <th>Jenis Air Bersih</th>
                <th>Kondisi Air </th>
                <th>Kualitas Air</th>
                <th>Sumber Air Panas</th>
                <th>kepemilikan</th>
                <th>Pemanfaatan</th>
            </tr>

        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{(!is_null($dat->StatusAir->id_air_bersih)?$dat->StatusAir->AirBersih->jenis_air_bersih:'-')}}</td>
  <td>{{(!is_null($dat->StatusAir->id_air_bersih)?$dat->StatusAir->AirBersih->kondisi_air:'-')}}</td>
  <td>{{(!is_null($dat->StatusAir->id_air_bersih)?$dat->StatusAir->AirBersih->kualitas_air:'-')}}</td>
  <td>{{(!is_null($dat->StatusAir->id_air_panas)?$dat->StatusAir->AirPanas->sumber_air_panas:'-')}}</td>
  <td>{{(!is_null($dat->StatusAir->id_air_panas)?$dat->StatusAir->AirPanas->Kepemilikan->kepemilikan:'-')}}</td>
  <td>{{$dat->StatusAir->pemanfaatan}}</td>
  
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
              <h3 class="box-title">Bahan Galian  </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>

            
            <tr>
                <th>No</th>
                <th>Kepemilikan</th>
                <th>Jenis Galian</th>
                <th>Deposit Produksi</th>
            </tr>

        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->BahanGalian->kepemilikan->kepemilikan}}</td>
  <td>{{$dat->BahanGalian->jenis_galian}}</td>
  <td>{{$dat->BahanGalian->deposit_produksi}}</td> 
  
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