@extends('layouts.dashboard')

@section('content')

<div class="content-header">

      <h1>
      Tingkat Kebisingan
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
              <h3 class="box-title">Input/Ubah tingkat Kebisingan</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('kebisingan.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="tingkat_kebisingan">Tingkat Kebisingan</label>
                  <input type="text" class="form-control" name="tingkat_kebisingan" id="tingkat_kebisingan" placeholder="masukan data">
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
cretae

@endsection