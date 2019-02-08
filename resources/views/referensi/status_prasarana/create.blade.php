@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h1>
     status Prasarana
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
              <h3 class="box-title">Input/Ubah status prasarana</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('status_prasarana.simpan')}}">
               {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="jen_id_jenis_prasarana">Prasarana</label>
                  <select class="form-control" name="jen_id_jenis_prasarana">
                    <option value="" selected></option>
                  @foreach($statusprasarana AS $prass)
                    <option value="{{ $prass->id_jenis_prasarana }}">{{ $prass->jenis_wilayah }}</option>
                  @endforeach
                  </select>
                  <label for="jenis_prasarana">Jenis Prasarana</label>
                  <input type="text" class="form-control" name="jenis_prasarana" id="jenis_prasarana" placeholder="masukan data">

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