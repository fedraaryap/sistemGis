@extends('layouts.dashboard')
@section('content')

<?php

$desa = [1=>'Totoharjo',2=>'Hata',3=>'bakauhani',4=>'kelawi',5=>'semanak'];
?>

<div class="content-header">
      <h1>
      Lembaga Pendidikan
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
              <h3 class="box-title">Input/Ubah Informasi Lembaga Pendidikan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('lemp.update',$data->id_batas_wilayah)}}">
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
               <label for="id_batas">Batas</label>
                  <select class="form-control" name="id_batas">
                    <option value="" selected></option>
                  @foreach($Batas AS $batas =>$bat )
                    <option value="{{ $bat->id_batas }}">{{ $bat->batas }}</option>
                  @endforeach
                </select>


                  <label for="batas_desa">Batas Desa</label>
                  <input type="text" class="form-control" name="batas_desa" id="batas_desa" placeholder="masukan data">

                   <label for="batas_kecamatan">Batas Kecamatan</label>
                  <input type="text" class="form-control" name="batas_kecamatan" id="batas_kecamatan" placeholder="masukan data">
              </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
              </div>
            </form>
          </div>
        </section>
  <!-- /.content -->
</div>
</div>


@endsection