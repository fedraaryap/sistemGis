@extends('layouts.dashboard')

@section('content')
<?php

$desa = [1=>'Totoharjo',2=>'Hata',3=>'bakauhani',4=>'kelawi',5=>'semanak'];

$JenisKelamin = ['P','L'];
?>



<div class="content-header">
      <h1>
      Jumlah SDM Desa
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
              <h3 class="box-title">Input/Ubah Jumlah SDM Desa</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('jumsdmdesa.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                         <label for="id_desa">Desa</label>
                  <select class="form-control" name="id_desa">
                    <option value="" selected disabled></option>
                  @foreach($desa AS $desa =>$des )
                    <option value="{{ $desa }}">{{ $des }}</option>
                  @endforeach
                </select>
                
               <label for="id_sdm_desa">SDM Desa</label>
                  <select class="form-control" name="id_sdm_desa">
                    <option value="" selected disabled></option>
                  @foreach($SdmDesa AS $sdmdesa =>$sdm )
                    <option value="{{ $sdm->id_sdm_desa }}">{{ $sdm->sdm_desa }}</option>
                  @endforeach
                </select>


                  <label for="jumlah_sdm">Jumlah SDM</label>
                  <input type="number" class="form-control" name="jumlah_sdm" id="jumlah_sdm" placeholder="masukan data">

                   <label for="jk_sdm">Jenis Kelamin</label>
                  <select class="form-control" name="jk_sdm">
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