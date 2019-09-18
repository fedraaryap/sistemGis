@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h1>
      Jumlah Sdm Pendidikan
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
        <table id='#simple-table4' class="table table-striped table-bordered table-hover">
        <thead>
           <a href="{{route('jumsdmpend.simpan')}}" class=" btn btn-sm btn-primary">Tambah Jumlah Sdm Pendidikan</a>
          
            <tr>
                <th>No</th>
                <th>Desa</th>
                <th>Tingkat Pendidikan</th>
                <th>Usia Mulai</th>
                <th>Usia Akhir</th>
                <th>Jenis Kelamin</th>
                <th>Jumlah SDM Pendidikan</th>
                <th>aksi</th>
            </tr>
        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{(!is_null($dat->id_desa)?$dat->Desa->Wilayah->nama_wil:'-')}}</td>
  <td>{{$dat->StatusPendidikan->tingkat_pendidikan}}</td>
  <td>{{$dat->StatusPendidikan->RangeUsia->usia_mulai}}</td>
  <td>{{$dat->StatusPendidikan->RangeUsia->usia_akhir}}</td>
  <td>{{$dat->jk_pendidikan}}</td>
  <td>{{$dat->jumlah_sdm_pendidikan}}</td>
  
  <td>
    <div class="hidden-sm hidden-xs btn-group">
            <a class="btn btn-xs btn-info" href="{{route('jumsdmpend.edit',$dat->id_sdm_pendidikan)}}">
            <i class="ace-icon fa fa-pencil bigger-120"></i>
            </a>
            <a class="btn btn-xs btn-danger" href="{{route('jumsdmpend.delete',$dat->id_sdm_pendidikan)}}">
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