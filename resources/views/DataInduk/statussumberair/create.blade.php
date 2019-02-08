@extends('layouts.dashboard')

@section('content')
<?php
$SumberAir = [
];
$Status = ['Ya','tidak'
];
?>



<div class="content-header">
      <h1>
      Status Sumber Air
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
              <h3 class="box-title">Input/Ubah Status Sumber Air</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('produkpert.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                 <label for="id_sumber_air">Sumber Air</label>
                  <select class="form-control" name="id_sumber_air">
                    <option value="" selected disabled></option>
                  @foreach($SumberAir AS $SumberAir =>$air )
                    <option value="{{ $SumberAir }}">{{ $air }}</option>
                  @endforeach
                </select>

                      <label for="status_sumber">Status Sumber</label>
                  <select class="form-control" name="status_sumber">
                    <option value="" selected disabled></option>
                  @foreach($Status AS $Status =>$stat )
                    <option value="{{ $Status }}">{{ $stat }}</option>
                  @endforeach
                </select>
                 
          </form>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
              </div>
            </form>
        
  <!-- /.content -->
  </div>
  </section>
</div>


@endsection