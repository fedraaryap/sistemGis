@extends('layouts.dashboard')

@section('content')

<?php

$desa = [1=>'Totoharjo',2=>'Hata',3=>'bakauhani',4=>'kelawi',5=>'semanak'];
?>



<div class="content-header">
      <h1>
      Kualitas Udara
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
              <h3 class="box-title">Input/Ubah Kualitas Udara</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('udara.update',$data->id_Kualitas)}}">
              {{ csrf_field() }}
              {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                         <label for="id_desa">Desa</label>
                  <select class="form-control" name="id_desa">
                    <option value="" selected disabled></option>
                  @foreach($desa AS $desa =>$des )
                    <option value="{{ $desa }}">{{ $des }}</option>
                  @endforeach
                </select>


                  
               <label for="id_sumber">Sumber</label>
                  <select class="form-control" name="id_sumber">
                    <option value="" selected disabled></option>
                  @foreach($SumberKualitas AS $sumberKualitas =>$kua )
                    <option value="{{ $kua->id_sumber }}">{{ $kua->sumber }}</option>
                  @endforeach
                </select>


                  <label for="jumlah_lokasi_pencemaran">Jumlah Lokasi</label>
                  <input type="number" class="form-control" name="jumlah_lokasi_pencemaran" id="jumlah_lokasi_pencemaran" placeholder="masukan data">
                    <label for="politan_pencemaran">Polutan</label>
                  <input type="text" class="form-control" name="politan_pencemaran" id="politan_pencemaran" placeholder="masukan data">
                    <label for="efek">Efek</label>
                  <input type="text" class="form-control" name="efek" id="efek" placeholder="masukan data">
                    <label for="kepemilikan_pemda_swasta">Kepemilikan</label>
                  <input type="text" class="form-control" name="kepemilikan_pemda_swasta" id="kepemilikan_pemda_swasta" placeholder="masukan data">

              
                 
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