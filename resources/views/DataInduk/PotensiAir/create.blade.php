@extends('layouts.dashboard')

@section('content')
<?php
$Status = [
];

?>



<div class="content-header">
      <h1>
      Potensi Air
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
              <h3 class="box-title">Input/Ubah Potensi Air</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('potensiair.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                   <label for="jenis_potensi_air">Jenis Potensi Air</label>
                  <input type="number" class="form-control" name="jenis_potensi_air" id="jenis_potensi_air" placeholder="masukan data">

                    <label for="id_jenis_ternak">Status</label>
                  <select class="form-control" name="id_jenis_ternak">
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