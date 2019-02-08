@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h1>
      Daftar Desa
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
           <a href="{{route('daftardesa.simpan')}}" class=" btn btn-sm btn-primary">Tambah Daftar Desa</a>
            <tr>
                <th>No</th>
                <th>Desa</th> 
                <th>Kepala Desa</th>
                <th>Tahun Mulai</th>
                <th>Tahun Akhir</th>
                <th>latitude</th>
                <th>longitude</th>
                <th>Aksi</th>
            </tr>
        </thead>
<tbody>  
	@foreach($data as  $nomor=> $dat)
	<tr>
	<td>{{$nomor+1}}</td>
	<td>{{ (!is_null($dat->id_wilayah)?$dat->wilayah->nama_wil:'-') }}</td>
    <td>{{ (!is_null($dat->id_perangkat_desa)?$dat->perangkatdesa->kepala_desa:'-') }}</td>
    <td>{{ (!is_null($dat->id_perangkat_desa)?$dat->perangkatdesa->tahun_mulai:'-') }}</td>
    <td>{{ (!is_null($dat->id_perangkat_desa)?$dat->perangkatdesa->tahun_akhir:'-') }}</td>
    <td>{{ (!is_null($dat->id_wilayah)?$dat->wilayah->latitude:'-') }}</td>
    <td>{{ (!is_null($dat->id_wilayah)?$dat->wilayah->longitude:'-') }}</td>
	<td>
        <div class="hidden-sm hidden-xs btn-group">
            <a class="btn btn-xs btn-info" href="">
            <i class="ace-icon fa fa-pencil bigger-120"></i>
            </a>
            <a class="btn btn-xs btn-danger" href="">
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