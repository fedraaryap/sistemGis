@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h1>
      Luas Wilayah
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
          <a href="{{route('luas.simpan')}}" class=" btn btn-sm btn-primary">Tambah Luas Wilayah</a>
            
            <tr>
                <th>no</th>
                <th>Desa</th>
                <th>Jenis Wilayah</th>
                <th>Luas Wilayah</th>
                <th>Satuan</th>
                <th>Status</th>
                <th>Aksi</th>
                
               
            </tr>
        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{(!is_null($dat->id_desa)?$dat->Desa->Wilayah->nama_wil:'-')}}</td>
  <td>{{(!is_null($dat->id_wilayah_lahan)?$dat->LuasWil->jenis_wilayah:'-')}}</td>
  <td>{{(!is_null($dat->luas_wilayah)?$dat->luas_wilayah:'-')}}</td>
  <td>{{(!is_null($dat->id_satuan)?$dat->SatuanWil->satuan:'-')}}</td>
  @if($dat->status == 1)
    <td>Ada</td>
  @elseif($dat->status == 0)
    <td>Tidak Ada</td>
  @endif()
  <td>
     <div class="hidden-sm hidden-xs btn-group">
            <a class="btn btn-xs btn-info" href="{{route('luas.edit',$dat->id_luas_wilayah)}}">
            <i class="ace-icon fa fa-pencil bigger-120"></i>
            </a>
            <a class="btn btn-xs btn-danger" href="{{route('luas.delete',$dat->id_luas_wilayah)}}">
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