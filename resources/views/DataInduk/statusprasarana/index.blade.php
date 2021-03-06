@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h1>
      Status Prasarana
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
           <a href="{{route('statprasarana.simpan')}}" class=" btn btn-sm btn-primary">Tambah Status Prasarana</a>
          
            <tr>
                <th>No</th>
                <th>Desa</th>
                <th>Jenis Prasarana</th>
                <th>Satuan Prasarana</th>
                <th>Kondisi Prasarana</th>
                <th>Angka Kondisi</th>
                <th>aksi</th>
            </tr>
        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{(!is_null($dat->id_desa)?$dat->Desa->Wilayah->nama_wil:'-')}}</td>
   <td>{{(!is_null($dat->id_jenis_prasarana)?$dat->JenisPrasarana->jenis_prasarana_sarana:'-')}}</td>
   <td>{{(!is_null($dat->id_satuan_prasarana)?$dat->SatuanPrasarana->satuan_prasarana:'-')}}</td>
   <td>{{(!is_null($dat->kondisi_prasarana_sarana)?$dat->kondisi_prasarana_sarana:'-')}}</td>
  <td>{{(!is_null($dat->angka_kondisi)?$dat->angka_kondisi:'-')}}</td>
 
  
  <td>
    <div class="hidden-sm hidden-xs btn-group">
            <a class="btn btn-xs btn-info" href="{{route('statprasarana.edit',$dat->id_status_prasarana)}}">
            <i class="ace-icon fa fa-pencil bigger-120"></i>
            </a>
            <a class="btn btn-xs btn-danger" href="{{route('statprasarana.delete',$dat->id_status_prasarana)}}">
            <i class="ace-icon fa fa-trash bigger-120"></i>
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