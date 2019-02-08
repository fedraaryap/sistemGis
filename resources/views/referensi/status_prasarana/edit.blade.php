@extends('layouts.dashboard')
@section('content')
<div class="content-header">
      <h1>
     Status Prasarana
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
              <h3 class="box-title">Input/Ubah Status Prasarana</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('status_prasarana.update',$data->id_jenis_prasarana)}}">
              {{ csrf_field() }}
              {{method_field('PUT')}}
                 <div class="box-body">
                <div class="form-group">
                  <label for="jen_id_jenis_prasarana">Prasarana</label>
                  <select class="form-control" name="jen_id_jenis_prasarana">
                    <option value="" selected></option>
                  @foreach($statusprasarana AS $prass)
                    <option value="{{ $prass->id_jenis_prasarana }}">{{($data->jen_id_jenis_prasarana==$prass->id_jenis_prasarana)? 'selected':null}} >{{$prass->jenis_prasarana}} }}</option>
                  @endforeach
                  </select>
                  <label for="jenis_prasarana">Jenis Prasarana</label>
                  <input type="text" class="form-control" name="jenis_prasarana" id="jenis_prasarana" placeholder="masukan data" value="{{$data->jenis_prasarana}}" >
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
        
  <!-- /.content -->
</section>
</div>


@endsection