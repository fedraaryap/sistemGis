@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h1>
      Lembaga Keamanan
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
          <a href="{{route('lemkeamanan.simpan')}}" class=" btn btn-sm btn-primary">Tambah Lembaga Keamanan</a>
          
          
            <tr>
                <th>No</th>
                <th>Jenis Keamanan</th>
                <th>Jumlah Anggota</th>
                <th>Jumlah Poskamling</th>
                <th>Jumlah Kegiatan</th>
                <th>Nama Organisasi Induk</th>
                <th>Status</th>
                <th>aksi</th>
            </tr>
        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->JenisKeamanan->jenis_keamanan}}</td>
  <td>{{$dat->jumlah_anggota}}</td>
  <td>{{$dat->jumlah_poskamling}}</td>
  <td>{{$dat->jumlah_kegiatan}}</td>
  <td>{{$dat->nama_organisasi_induk}}</td>
  <td>{{$dat->status}}</td>
  <td>
	 <div class="hidden-sm hidden-xs btn-group">
            <a class="btn btn-xs btn-info" href="{{route('lemkeamanan.edit',$dat->id_keamanan)}}">
            <i class="ace-icon fa fa-pencil bigger-120"></i>
            </a>
            <a class="btn btn-xs btn-danger" href="{{route('lemkeamanan.delete',$dat->id_keamanan)}}">
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