@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h2>
      Sarana Dan Prasarana Desa
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

           <a href="{{route('sarprasdesa.simpan')}}" class=" btn btn-primary mx-5 dropdown-toggle">Menampilkan Data Sarana Dan Prasarana Desa</a>



  <div class="btn-group mx-5">
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
              <h3 class="box-title">Status Sarana Dan Prasarana Pemerintahan Desa </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            
            <tr>
               <th>No</th>
                <th>Jenis Sarpras Pemerintahan</th>
                <th>Jumlah</th>
                <th>Satuan Prasarana</th>
                <th>Status</th>
                
               
            </tr>
        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->StatusSarpras->SarprasPemerintahan->jenis_sarpras_pemerintahan}}</td>
  <td>{{(!is_null($dat->StatusSarpras->id_satuan_prasarana)?$dat->StatusSarpras->SatuanPrasarana->satuan_prasarana:'-')}}</td>
 <td>{{(!is_null($dat->StatusSarpras->jumlah)?$dat->StatusSarpras->jumlah:'-')}}</td>
 <td>{{(!is_null($dat->StatusSarpras->status_sarpras)?$dat->StatusSarpras->status_sarpras:'-')}}</td>

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