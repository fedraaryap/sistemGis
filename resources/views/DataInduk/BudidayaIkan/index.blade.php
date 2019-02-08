@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h1>
      Budidaya Ikan
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
          
            <tr>
                <th>No</th>
                <th>Budidaya Ikan</th>
                <th>Jenis Budidaya Ikan</th>
                <th>aksi</th>
            </tr>
        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->bud_id_budidaya_ikan}}</td>
  <td>{{$dat->jenis_budidaya_ikan}}</td>
  <td>
	
	</td>
</tr>
	@endforeach
</tbody>
  		</table>
</section>

</div>


@endsection