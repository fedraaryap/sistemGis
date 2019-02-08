@extends('layouts.dashboard')

@section('content')
<?php
$JenisTernak = [
];

?>



<div class="content-header">
      <h1>
      Populasi Ternak
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
              <h3 class="box-title">Input/Ubah Populasi Ternak</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('populasi.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                    <label for="id_jenis_ternak">Jenis Ternak</label>
                  <select class="form-control" name="id_jenis_ternak">
                    <option value="" selected disabled></option>
                  @foreach($JenisTernak AS $JenisTernak =>$ternak )
                    <option value="{{ $JenisTernak }}">{{ $ternak }}</option>
                  @endforeach
                </select>



                  <label for="jumlah_pemilik">Jumlah Pemilik</label>
                  <input type="number" class="form-control" name="jumlah_pemilik" id="jumlah_pemilik" placeholder="masukan data">
                   <label for="jumlah_populasi">Jumlah Populasi</label>
                  <input type="number" class="form-control" name="jumlah_populasi" id="jumlah_populasi" placeholder="masukan data">
          
           
                 
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