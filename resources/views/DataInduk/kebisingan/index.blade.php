@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h1>
      Kebisingan
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
           <a href="{{route('bising.simpan')}}" class=" btn btn-sm btn-primary">Tambah Kebisingan</a>
          
            <tr>
                <th>No</th>
                <th>Desa</th>
                <th>Tingkat Kebisingan</th>
                <th>Dampak Kebisingan</th>
                <th>Sumber Kebisingan</th>
                <th>Efek Terhadap Penduduk</th>
                <th>aksi</th>
            </tr>
        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{(!is_null($dat->id_desa)?$dat->Desa->Wilayah->nama_wil:'-')}}</td>
  <td>{{$dat->TingkatKebisingan->tingkat_kebisingan}}</td>
  <td>{{$dat->dampak_kebisingan}}</td>
  <td>{{$dat->sumber_kebisingan}}</td>
  <td>{{$dat->efek_terhadap_penduduk}}</td>
  
  <td>
    <div class="hidden-sm hidden-xs btn-group">
            <a class="btn btn-xs btn-info" href="{{route('bising.edit',$dat->id_kebisingan)}}">
            <i class="ace-icon fa fa-pencil bigger-120"></i>
            </a>
            <a class="btn btn-xs btn-danger" href="{{route('bising.delete',$dat->id_kebisingan)}}">
            <i class="ace-icon fa fa-trash-o bigger-120"></i>
            </a>
            </div>
  </td>
  


  @endforeach
</tbody>
      </table>
</section>

</div>


@endsection