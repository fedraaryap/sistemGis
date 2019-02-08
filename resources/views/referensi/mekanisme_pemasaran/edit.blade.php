@extends('layouts.dashboard')
@section('content')
<div class="content-header">
      <h1>
      Mekanisme Pemasaran
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input/Ubah Mekanisme Pemasaran</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('mekanisme_pemasaran.update',$data->id_pemasaran)}}">
              {{ csrf_field() }}
              {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <label for="mekanisme_pemasaran">Mekanisme Pemasaran</label>
                  <input type="text" class="form-control" name="mekanisme_pemasaran" id="mekanisme_pemasaran" placeholder="Mekanisme Pemasaran" value="{{$data->mekanisme_pemasaran}}">
                  <label for="status_pemasaran">Status Pemasaran</label>
                  <input type="text" class="form-control" name="status_pemasaran" id="status_pemasaran" placeholder="Status Pemasaran" value="{{$data->status_pemasaran}}">
                </div>
              
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
              </div>
            </form>
          </div>
        </section>
  <!-- /.content -->
</div>
</div>


@endsection