@extends('layouts.dashboard')

@section('content')
<?php
$Batas = [
1=>'Batas Utara',2=>'Batas Selatan',3=>'Batas Timur',4=>'Batas Barat'];

?>



<div class="content-header">
      <h1>
      Batas Wilayah
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
              <h3 class="box-title">Input/Ubah Batas Wilayah</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('bataswil.simpan')}}">
              {{ csrf_field() }}



              <div class="box-body">
                <div class="form-group">
               <label for="id_batas">Batas</label>
                  <select class="form-control" name="id_batas">
                    <option value="" selected></option>
                  @foreach($Batas AS $Batas =>$bat )
                    <option value="{{ $Batas }}">{{ $bat }}</option>
                  @endforeach
                </select>


                  <label for="batas_desa">Batas Desa</label>
                  <input type="text" class="form-control" name="batas_desa" id="batas_desa" placeholder="masukan data">

                   <label for="batas_kecamatan">Batas Kecamatan</label>
                  <input type="text" class="form-control" name="batas_kecamatan" id="batas_kecamatan" placeholder="masukan data">

                


                 
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