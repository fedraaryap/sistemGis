@extends('layouts.dashboard')

@section('content')

<?php
$desa = [1=>'Totoharjo',2=>'Hata',3=>'bakauhani',4=>'kelawi',5=>'semanak'];
?>

<div class="content-header">
      <h1>
      Jumlah Orang
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
              <h3 class="box-title">Input/Ubah Jumlah Orang</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('orang.update',$data->id_jumlah_orang)}}">
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
               <label for="id_lembaga_ekonomi">Nama Lembaga Ekonomi</label>
                  <select class="form-control" name="id_lembaga_ekonomi">
                    <option value="" selected disabled></option>
                  @foreach($LembagaEkonomi AS $lembagaEkonomi =>$lem )
                    <option value="{{ $lem->id_lembaga_ekonomi }}">{{ $lem->nama_lembaga_ekonomi }}</option>
                  @endforeach
                </select>


                  <label for="jumlah_pengurus">Jumlah Pengurus</label>
                  <input type="number" class="form-control" name="jumlah_pengurus" id="jumlah_pengurus" placeholder="masukan data" value="{{$data->jumlah_pengurus}}">

                   <label for="jumlah_anggota">Jumlah Anggota</label>
                  <input type="number" class="form-control" name="jumlah_anggota" id="jumlah_anggota" placeholder="masukan data" value="{{$data->jumlah_anggota}}">

                   <label for="jumlah_kegiatan">Jumlah Kegiatan</label>
                  <input type="number" class="form-control" name="jumlah_kegiatan" id="jumlah_kegiatan" placeholder="masukan data" value="{{$data->jumlah_kegiatan}}">

                  <label for="jumlah_unit_lembaga">Jumlah Unit Lembaga</label>
                  <input type="number" class="form-control" name="jumlah_unit_lembaga" id="jumlah_unit_lembaga" placeholder="masukan data" value="{{$data->jumlah_unit_lembaga}}">
                 
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