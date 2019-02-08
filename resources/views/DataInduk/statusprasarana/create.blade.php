@extends('layouts.dashboard')

@section('content')
<?php
$JenisPrasarana = [
];
$SatuanPrasarana = [
];

$Kondisi =['Baik','Buruk'];

?>



<div class="content-header">
      <h1>
      Status Prasarana
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
              <h3 class="box-title">Input/Ubah Status Prasarana</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('statprasarana.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                 <label for="id_jenis_prasarana">Jenis Prasarana</label>
                  <select class="form-control" name="id_jenis_prasarana">
                    <option value="" selected disabled></option>
                  @foreach($JenisPrasarana AS $JenisPrasarana =>$pra )
                    <option value="{{ $JenisPrasarana }}">{{ $pra }}</option>
                  @endforeach
                </select>

                         <label for="id_satuan_prasarana">Satuan Prasarana</label>
                  <select class="form-control" name="id_satuan_prasarana">
                    <option value="" selected disabled></option>
                  @foreach($SatuanPrasarana AS $SatuanPrasarana =>$sat )
                    <option value="{{ $SatuanPrasarana }}">{{ $sat }}</option>
                  @endforeach
                </select>
                         <label for="kondisi_prasarana_sarana">Kondisi Prasarana</label>
                  <select class="form-control" name="kondisi_prasarana_sarana">
                    <option value="" selected disabled></option>
                  @foreach($Kondisi AS $Kondisi =>$kon )
                    <option value="{{ $Kondisi }}">{{ $kon }}</option>
                  @endforeach
                </select>
                 
                 
                   <label for="angka_kondisi">Angka Kondisi</label>
                  <input type="number" class="form-control" name="angka_kondisi" id="angka_kondisi" placeholder="masukan data">
           
                 
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