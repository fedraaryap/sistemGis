@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h1>
      Tenaga Kerja
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
           <a href="{{route('tenagakerja.simpan')}}" class=" btn btn-sm btn-primary">Tambah Tenaga Kerja</a>
          
            <tr>
                <th>No</th>
                <th>Jenis Tenaga Kerja</th>
                <th>Jenis Kelamin</th>
                <th>Jumlah</th>
                <th>aksi</th>
            </tr>
        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->jenis_tenaga_kerja}}</td>
  <td>{{$dat->jk_tenaga_kerja}}</td>
  <td>{{$dat->jumlah_sdm_kerja}}</td>

  
  <td>
    <div class="hidden-sm hidden-xs btn-group">
            <a class="btn btn-xs btn-info" href="{{route('tenagakerja.edit',$dat->id_tenaga_kerja)}}">
            <i class="ace-icon fa fa-pencil bigger-120"></i>
            </a>
            <a class="btn btn-xs btn-danger" href="{{route('tenagakerja.delete',$dat->id_tenaga_kerja)}}">
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