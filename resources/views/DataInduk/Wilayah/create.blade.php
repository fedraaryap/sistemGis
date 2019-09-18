@extends('layouts.dashboard')

@section('content')
<?php

$LvWil = [1=>'Desa'
];
?>



<div class="content-header">
      <h1>
      Wilayah
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
              <h3 class="box-title">Input/Ubah Wilayah</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('wilayah.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="id_lv_wil">Nama Level Wilayah</label>
                  <select class="form-control" name="id_lv_wil">
                    <option value="" selected disabled></option>
                  @foreach($LvWil AS $LvWil =>$wil )
                    <option value="{{ $LvWil }}">{{ $wil }}</option>
                  @endforeach
                </select>

                     <label for="wil_id_wilayah">Nama Level Wilayah</label>
                  <select class="form-control" name="wil_id_wilayah">
                    <option value="" selected disabled></option>
                  @foreach($Wilayah AS $wila  )
                    <option value="{{ $wila->wil_id_wilayah }}">{{ $wila->id_lv_wil }}</option>
                  @endforeach
                </select>

                  <label for="nama_wil">Nama Wilayah</label>
                  <input type="text" class="form-control" name="nama_wil" id="nama_wil" placeholder="masukan data">

          
           
                 
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