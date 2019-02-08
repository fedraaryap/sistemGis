@extends('layouts.dashboard')

@section('content')
<?php

$JenisKelamin = ['P','L'
];
?>



<div class="content-header">
      <h1>
      Tenaga Kerja
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
              <h3 class="box-title">Input/Ubah Tenaga Kerja</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('tenagakerja.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="jenis_tenaga_kerja">Jenis Tenaga Kerja</label>
                  <input type="text" class="form-control" name="jenis_tenaga_kerja" id="jenis_tenaga_kerja" placeholder="masukan data">


                 <label for="jk_tenaga_kerja">Jenis Kelamin</label>
                  <select class="form-control" name="jk_tenaga_kerja">
                    <option value="" selected disabled></option>
                  @foreach($JenisKelamin AS $JenisKelamin =>$jk )
                    <option value="{{ $JenisKelamin }}">{{ $jk }}</option>
                  @endforeach
                </select>
         


                  <label for="jumlah_sdm_kerja">Jumlah SDM kerja</label>
                  <input type="number" class="form-control" name="jumlah_sdm_kerja" id="jumlah_sdm_kerja" placeholder="masukan data">


          
           
                 
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