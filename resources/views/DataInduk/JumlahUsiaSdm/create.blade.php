@extends('layouts.dashboard')

@section('content')
<?php
$RangeUsia = [
];
$JenisKelamin = [0=>'Perempuan',1=>'Laki-Laki'
];
?>



<div class="content-header">
      <h1>
      Jumlah Kepadatan
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
              <h3 class="box-title">Input/Ubah Jumlah Kepadatan</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('jumstatsdm.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
               <label for="id_range">Usia</label>
                  <select class="form-control" name="id_range">
                    <option value="" selected disabled></option>
                  @foreach($RangeUsia AS $RangeUsia =>$usia )
                    <option value="{{ $RangeUsia }}">{{ $usia }}</option>
                  @endforeach
                </select>

                 <label for="jk_usia">Jenis Kelamin</label>
                  <select class="form-control" name="jk_usia">
                    <option value="" selected disabled></option>
                  @foreach($JenisKelamin AS $JenisKelamin =>$jk )
                    <option value="{{ $JenisKelamin }}">{{ $jk }}</option>
                  @endforeach
                </select>


                  <label for="jumlah_sdm_usia">Jumlah</label>
                  <input type="number" class="form-control" name="jumlah_sdm_usia" id="jumlah_sdm_usia" placeholder="masukan data">

              
                 
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