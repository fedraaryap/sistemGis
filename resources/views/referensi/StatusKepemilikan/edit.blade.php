@extends('layouts.dashboard')
@section('content')
<?php
$status = [0=>'tidak',1=>'iya'];

?>
<div class="content-header">
      <h1>
     Status Kepemilikan
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
              <h3 class="box-title">Input/Ubah Status Kepemilikan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('kepemilikan.update',$data->id_status_kepemilikan)}}">
              {{ csrf_field() }}
              {{method_field('PUT')}}
                  <div class="box-body">
                <div class="form-group">
                   <label for="kepemilikan">Kepemilikan</label>
                  <input type="text" class="form-control" name="kepemilikan" id="kepemilikan" placeholder="masukan data" value="{{$data->kepemilikan}}">



                  <label for="status_kepemilikan">Status Kepemilikan</label>
                  <select class="form-control" name="status_kepemilikan">
                    <option value="" selected></option>
                  @foreach($status AS $status => $stat)
                    <option value="{{ $status }}">{{ $stat }}</option>
                  @endforeach
                  </select>
              
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