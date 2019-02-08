@extends('layouts.dashboard')

@section('content')
<?php
$Pemasaran = [1=>'Dijual Langsung Konsumen',2=>'Dijual Ke Pasar',3=>'Dijual Melalui Kud',4=>'Dijual Melalui Tengkulak',5=>'Dijual Melalui Pengecer',6=>'Dijual ke Lumbung Desa',7=>'tidak dijual'
];

?>

<div class="content-header">
      <h1>
      Jenis Pekerjaan
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
              <h3 class="box-title">Input/Ubah Jenis Pekerjaan</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('jenis_produktifitas.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                   <label for="id_pemasaran">Mekanisme Pemasaran</label>
                  <select class="form-control" name="id_pemasaran">
                    <option value="" selected disabled></option>
                  @foreach($Pemasaran AS $Pemasaran =>$pem )
                    <option value="{{ $Pemasaran }}">{{ $pem }}</option>
                  @endforeach
                </select>

                  <label for="jenis_produktifitas">Jenis Produktifitas</label>
                  <input type="text" class="form-control" name="jenis_produktifitas" id="jenis_produktifitas" placeholder="masukan data">

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