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
    </section>
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
          <form role="form" method="post" action="{{route('kepemilikan.simpan')}}">
               {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                   <label for="kepemilikan">Kepemilikan</label>
                  <input type="text" class="form-control" name="kepemilikan" id="kepemilikan" placeholder="masukan data">



                  <label for="status_kepemilikan">Status Kepemilikan</label>
                  <select class="form-control" name="status_kepemilikan">
                    <option value="" selected></option>
                  @foreach($status AS $status => $stat)
                    <option value="{{ $status }}">{{ $stat }}</option>
                  @endforeach
                  </select>
                  

          </form>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
              </div>
            </form>
        </section>
  <!-- /.content -->
  </div>
</div>


@endsection