@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h1>
      Lembaga Pendidikan
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
        <table id="simple-table4" class="table table-striped table-bordered table-hover">
        <thead>
          <a href="{{route('lemp.simpan')}}" class=" btn btn-sm btn-primary">Tambah Lembaga Pendidikan</a>
            
            <tr>
                <th>no</th>
                <th>Desa</th>
                <th>Jenis Sekolah</th>
                <th>tingkat pendidikan</th>
                <th>Status</th>
                <th>Jumlah sekolah</th>
                <th>Jumlah Pengajar</th>
                <th>Siswa</th>
                <th>kepemilikan</th>
                <th>Aksi</th>
               
            </tr>
        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)
  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{(!is_null($dat->id_desa)?$dat->Desa->Wilayah->nama_wil:'-')}}</td>
  <td>{{$dat->Sekolah->jenisPendidikan->jenis_pedidikan}}</td>
  <td>{{$dat->Sekolah->nama_sekolah}}</td>
  @if($dat->status_sekolah == 1)
    <td>Terdaftar</td>
  @elseif($dat->status_sekolah == 0)
    <td>Tidak Terdaftar</td>
  @endif()
  <td>{{$dat->jumlah_sekolah}}</td>
  <td>{{$dat->jumlah_pengajar}}</td>
  <td>{{$dat->jumlah_siswa}}</td>
   @if($dat->kepemilikan == 1)
    <td>Pemerintah</td>
  @elseif($dat->kepemilikan == 2)
    <td>Swasta</td>
  @endif()
  

 <td>
    <div class="hidden-sm hidden-xs btn-group">
            <a class="btn btn-xs btn-info" href="{{route('lemp.edit',$dat->id_pendidikan)}}">
            <i class="ace-icon fa fa-pencil bigger-120"></i>
            </a>
            <a class="btn btn-xs btn-danger" href="{{route('lemp.delete',$dat->id_pendidikan)}}">
            <i class="ace-icon fa fa-trash-o bigger-120"></i>
            </a>
            </div>
  </td>
  </td 
</tr>
  @endforeach
</tbody>
</table>

</section>

</div>


@endsection