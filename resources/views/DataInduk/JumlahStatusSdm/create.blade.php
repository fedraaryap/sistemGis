@extends('layouts.dashboard')

@section('content')
<?php

$desa = [1=>'Totoharjo',2=>'Hata',3=>'bakauhani',4=>'kelawi',5=>'semanak'];
?>


<div class="content-header">
      <h1>
      Jumlah Kepadatan
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
              <h3 class="box-title">Input/Ubah Jumlah Kepadatan</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('jumstatsdm.simpan')}}">
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
                

               <label for="id_status">Kepadatan</label>
                  <select class="form-control" name="id_status">
                    <option value="" selected disabled></option>
                  @foreach($JumlahStatus AS $jumlahStatus =>$pen )
                    <option value="{{ $pen->id_status }}">{{ $pen->status_jumlah }}</option>
                  @endforeach
                </select>


                  <label for="jumlah_sdm">Jumlah</label>
                  <input type="number" class="form-control" name="jumlah_sdm" id="jumlah_sdm" placeholder="masukan data">

              
                 
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