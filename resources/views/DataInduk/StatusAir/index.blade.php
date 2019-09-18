@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h1>
      Status Air
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
          <a href="{{route('statair.simpan')}}" class=" btn btn-sm btn-primary">Tambah Status Air</a>
            
            <tr>
                <th>no</th>
                <th>Desa</th>
                <th>Jenis Air Bersih</th>
                <th>Kondisi Air </th>
                <th>Kualitas Air</th>
                <th>Sumber Air Panas</th>
                <th>kepemilikan</th>
                <th>Pemanfaatan</th>
                <th>Aksi</th>
                
               
            </tr>
        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{(!is_null($dat->id_desa)?$dat->Desa->Wilayah->nama_wil:'-')}}</td>
  <td>{{(!is_null($dat->id_air_bersih)?$dat->AirBersih->jenis_air_bersih:'-')}}</td>
  <td>{{(!is_null($dat->id_air_bersih)?$dat->AirBersih->kondisi_air:'-')}}</td>
  <td>{{(!is_null($dat->id_air_bersih)?$dat->AirBersih->kualitas_air:'-')}}</td>
  <td>{{(!is_null($dat->id_air_panas)?$dat->AirPanas->sumber_air_panas:'-')}}</td>
  <td>{{(!is_null($dat->id_air_panas)?$dat->AirPanas->Kepemilikan->kepemilikan:'-')}}</td>
  <td>{{$dat->pemanfaatan}}</td>
  <td>
     <div class="hidden-sm hidden-xs btn-group">
            <a class="btn btn-xs btn-info" href="{{route('statair.edit',$dat->id_status_air)}}">
            <i class="ace-icon fa fa-pencil bigger-120"></i>
            </a>
            <a class="btn btn-xs btn-danger" href="{{route('statair.delete',$dat->id_status_air)}}">
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