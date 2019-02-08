@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h1>
      Jumlah Lembaga Politik
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
           <a href="{{route('jumlempolitik.simpan')}}" class=" btn btn-sm btn-primary">Tambah Jumlah Lembaga Politik</a>
          
            <tr>
                <th>No</th>
                <th>Nama Partai</th>
                <th>Alamat Partai</th>
                <th>Jenis Kegiatan</th>
                <th>Organisasi Underbow</th>
                <th>Pengurus</th>
                <th>Anggota</th>
                <th>Pemilu Terakhir</th>
                <th>aksi</th>
            </tr>
        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->Partai->nama_partai}}</td>
  <td>{{$dat->Partai->alamat_sekret}}</td>
  <td>{{$dat->Partai->jenis_kegiatan}}</td>
  <td>{{$dat->Partai->organisasi_underbow}}</td>
  <td>{{$dat->pengurus}}</td>
  <td>{{$dat->anggota}}</td>
  <td>{{$dat->pemilu_terakhir}}</td>
  
  <td>
    <div class="hidden-sm hidden-xs btn-group">
            <a class="btn btn-xs btn-info" href="{{route('jumlempolitik.edit',$dat->id_jumlah_lembaga)}}">
            <i class="ace-icon fa fa-pencil bigger-120"></i>
            </a>
            <a class="btn btn-xs btn-danger" href="{{route('jumlempolitik.delete',$dat->id_jumlah_lembaga)}}">
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