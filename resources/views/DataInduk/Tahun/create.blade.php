@extends('layouts.dashboard')

@section('content')
<?php

$Aktif = [1=>'aktif',0=>'tidak aktif'
];
?>



<div class="content-header">
      <h1>
      Status Tahun
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
              <h3 class="box-title">Input/Ubah Tahun</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('tahun.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="id_tahun">Tahun</label>
                  <input type="number" class="form-control" name="id_tahun" id="id_tahun" placeholder="masukan data">


                  <label for="waktu_mulai">Waktu Mulai</label>
                  <input type="date" class="form-control" name="waktu_mulai" id="waktu_mulai" placeholder="masukan data">

                   <label for="waktu_akhir">Waktu Akhir</label>
                  <input type="date" class="form-control" name="waktu_akhir" id="waktu_akhir" placeholder="masukan data">
          
                 <label for="aktif">Aktif</label>
                  <select class="form-control" name="aktif">
                    <option value="" selected disabled></option>
                  @foreach($Aktif AS $Aktif =>$aktf )
                    <option value="{{ $Aktif }}">{{ $aktf }}</option>
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