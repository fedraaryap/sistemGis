@extends('layouts.dashboard')

@section('content')
<?php
$LembagaEkonomi = [
];
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
          <form role="form" method="post" action="{{route('orang.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
               <label for="id_lembaga_ekonomi">Nama Lembaga Ekonomi</label>
                  <select class="form-control" name="id_lembaga_ekonomi">
                    <option value="" selected disabled></option>
                  @foreach($LembagaEkonomi AS $LembagaEkonomi =>$lemko )
                    <option value="{{ $LembagaEkonomi }}">{{ $lemko }}</option>
                  @endforeach
                </select>


                  <label for="jumlah_pengurus">Jumlah Pengurus</label>
                  <input type="number" class="form-control" name="jumlah_pengurus" id="jumlah_pengurus" placeholder="masukan data">

                   <label for="jumlah_anggota">Jumlah Anggota</label>
                  <input type="number" class="form-control" name="jumlah_anggota" id="jumlah_anggota" placeholder="masukan data">

                   <label for="jumlah_kegiatan">Jumlah Kegiatan</label>
                  <input type="number" class="form-control" name="jumlah_kegiatan" id="jumlah_kegiatan" placeholder="masukan data">

                  <label for="jumlah_unit_lembaga">Jumlah Unit Lembaga</label>
                  <input type="number" class="form-control" name="jumlah_unit_lembaga" id="jumlah_unit_lembaga" placeholder="masukan data">


                


                 
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