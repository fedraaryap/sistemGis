@extends('layouts.dashboard')
@section('content')
<div class="content-header">
      <h1>
      Jenis Keamanan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>

    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input/Ubah Jenis Keamanan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('Keamanan.update',$data->id_jenis_keamanan)}}">
              {{ csrf_field() }}
              {{method_field('PUT')}}
             <div class="box-body">
                <div class="form-group">
                    <div class="box-body">
                <div class="form-group">
                  <label for="jenis_keamanan">Jenis Keamanan</label>
                  <input type="text" class="form-control" name="jenis_keamanan" id="jenis_keamanan" placeholder="masukan data" value="{{$data->jenis_keamanan}}">
              
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
              </div>
            </form>
          </div>
        
  <!-- /.content -->
</section>
</div>


@endsection