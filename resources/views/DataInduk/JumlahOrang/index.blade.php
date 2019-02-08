@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h1>
      Jumlah Orang
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
           <a href="{{route('orang.simpan')}}" class=" btn btn-sm btn-primary">Tambah Jumlah Orang</a>
          
            <tr>
                <th>No</th>
                <th>Nama Lembaga Ekonomi</th>
                <th>Jumlah Pengurus</th>
                <th>Jumlah Anggota</th>
                <th>Jumlah Kegiatan</th>
                <th>Jumlah Unit Lembaga</th>
                <th>aksi</th>
            </tr>
        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->LembagaEkonomi->nama_lembaga_ekonomi}}</td>
  <td>{{$dat->jumlah_pengurus}}</td>
  <td>{{$dat->jumlah_anggota}}</td>
  <td>{{$dat->jumlah_kegiatan}}</td>
  <td>{{$dat->jumlah_unit_lembaga}}</td>
  
  <td>
    <div class="hidden-sm hidden-xs btn-group">
            <a class="btn btn-xs btn-info" href="{{route('orang.edit',$dat->id_jumlah_orang)}}">
            <i class="ace-icon fa fa-pencil bigger-120"></i>
            </a>
            <a class="btn btn-xs btn-danger" href="{{route('orang.delete',$dat->id_jumlah_orang)}}">
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