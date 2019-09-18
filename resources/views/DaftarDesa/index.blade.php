@extends('layouts.dashboard')

@section('content')




<div class="content-header">


      <h2>
      Daftar Desa
      </h2>

        </head>
</section>
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
        <a href="{{route('desa.simpan')}}" class=" btn btn-sm btn-primary">Tambah Daftar Desa</a>
                <!-- /.box-header -->
          <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Desa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="table table-bordered table-hover">
                <thead>
          
            
     
                <th>No</th>
                <th>Level Wilayah</th>
                <th>Desa</th>
                <th>Kepala Desa</th>
                <th>Periode</th>
                <th>Tahun Aktif</th>
               
           
               
           
        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{(!is_null($dat->Wilayah->id_wilayah)?$dat->Wilayah->LvWil->nama_lv_wil:'-')}}</td>
  <td>{{(!is_null($dat->Wilayah->id_wilayah)?$dat->Wilayah->nama_wil:'-')}}</td>
  <td>{{(!is_null($dat->PerangkatDesa->id_perangkat_desa)?$dat->PerangkatDesa->kepala_desa:'-')}}</td>
  <td>{{(!is_null($dat->PerangkatDesa->id_perangkat_desa)?$dat->PerangkatDesa->periode:'-')}}</td>
  <td>{{(!is_null($dat->PerangkatDesa->id_perangkat_desa)?$dat->PerangkatDesa->tahun_aktif:'-')}}</td>



 
 
  
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</section>

</section>

</div>

@endsection