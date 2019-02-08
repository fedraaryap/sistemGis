@extends('layouts.dashboard')

@section('content')
<?php
$RangeAngkatan = [
];
$JenisKelamin = [
];

?>



<div class="content-header">
      <h1>
      kualitas Angkatan
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
              <h3 class="box-title">Input/Ubah kualitas Angkatan</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('angkatan.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
               <label for="id_range">Usia</label>
                  <select class="form-control" name="id_range">
                    <option value="" selected disabled></option>
                  @foreach($RangeAngkatan AS $RangeAngkatan =>$angkatan )
                    <option value="{{ $RangeAngkatan }}">{{ $angkatan }}</option>
                  @endforeach
                </select>


                  <label for="jenis_angkatan">Jenis Angkatan</label>
                  <input type="text" class="form-control" name="jenis_angkatan" id="jenis_angkatan" placeholder="masukan data">
                   
                    <label for="jk_angkatan">Jenis Kelamin</label>
                  <select class="form-control" name="jk_angkatan">
                    <option value="" selected disabled></option>
                  @foreach($JenisKelamin AS $JenisKelamin =>$jk )
                    <option value="{{ $JenisKelamin }}">{{ $jk }}</option>
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