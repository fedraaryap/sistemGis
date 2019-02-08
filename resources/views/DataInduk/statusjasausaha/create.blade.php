@extends('layouts.dashboard')

@section('content')
<?php
$JasaUsaha = [
];

?>



<div class="content-header">
      <h1>
      Status Jasa Usaha
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
              <h3 class="box-title">Input/Ubah Status Jasa Usaha</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('statjasausaha.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                 <label for="id_jasa_usaha">Jenis Jasa Usaha</label>
                  <select class="form-control" name="id_jasa_usaha">
                    <option value="" selected disabled></option>
                  @foreach($JasaUsaha AS $JasaUsaha =>$jasa )
                    <option value="{{ $JasaUsaha }}">{{ $jasa }}</option>
                  @endforeach
                </select>
                 
                   <label for="jumlah_unit_usaha">Jumlah Unit Usaha</label>
                  <input type="number" class="form-control" name="jumlah_unit_usaha" id="jumlah_unit_usaha" placeholder="masukan data">
                  <label for="jenis_produksi_kegiatan">Jenis Produksi Kegiatan</label>
                  <input type="text" class="form-control" name="jenis_produksi_kegiatan" id="jenis_produksi_kegiatan" placeholder="masukan data">
                  <label for="tenaga_kerja_usaha">Tenaga Kerja Usaha</label>
                  <input type="text" class="form-control" name="tenaga_kerja_usaha" id="tenaga_kerja_usaha" placeholder="masukan data">
                 

               
                 
          
           
                 
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