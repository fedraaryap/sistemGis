@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h1>
      Produktifitas Pertanian
      </h1>
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

                <div class="row">
                <div class="col-xs-12">
        <table id="simple-table" class="table table-striped table-bordered table-hover">
        <thead>
          <a href="{{route('produkpert.simpan')}}" class=" btn btn-sm btn-primary">Tambah Produktifitas Pertanian</a>
            
            <tr>
                <th>no</th>
                <th>Desa</th>
                <th>Mekanisme Pemasaran</th>
                <th>Jenis Produktifitas</th>
                <th>Jenis Tanaman</th>
                <th>Luas</th>
                <th>Hasil</th>
                <th>Kepemilikan Pertanian</th>
                <th>Aksi</th>
                
               
            </tr>
        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{(!is_null($dat->id_desa)?$dat->Desa->Wilayah->nama_wil:'-')}}</td>
  <td>{{$dat->Produktifitas->Pemasaran->mekanisme_pemasaran}}</td>
  <td>{{$dat->Produktifitas->jenis_produktifitas}}</td>
  <td>{{$dat->jenis_tanaman}}</td>
  <td>{{$dat->luas}}</td>
  <td>{{$dat->hasil}}</td>
  <td>{{$dat->kepemilikan_pertanian}}</td>
  <td>
      <div class="hidden-sm hidden-xs btn-group">
            <a class="btn btn-xs btn-info" href="{{route('produkpert.edit',$dat->id_produktifitas)}}">
            <i class="ace-icon fa fa-pencil bigger-120"></i>
            </a>
            <a class="btn btn-xs btn-danger" href="{{route('produkpert.delete',$dat->id_produktifitas)}}">
            <i class="ace-icon fa fa-trash-o bigger-120"></i>
            </a>
            </div>
  </td>
</tr>
  @endforeach
</tbody>
</table>

</section>

</div>


@endsection