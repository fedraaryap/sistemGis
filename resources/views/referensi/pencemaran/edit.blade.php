@extends('layouts.dashboard')
@section('content')
<div class="content-header">
      <h1>
      Sumber Pencemaran
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
              <h3 class="box-title">Input/Ubah Sumber Pencemaran</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('pencemaran.update',$data->id_sumber)}}">
              {{ csrf_field() }}
              {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <label for="sumber_pencemaran">Sumber Pencemaran</label>
                  <input type="text" class="form-control" name="sumber_pencemaran" id="sumber_pencemaran" placeholder="Sumber Pencemaran" value="{{$data->sumber}}">
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