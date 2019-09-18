@extends('layouts.dashboard')

@section('content')
<?php

$desa = [1=>'Totoharjo',2=>'Hata',3=>'bakauhani',4=>'kelawi',5=>'semanak'];
?>


<div class="content-header">
      <h1>
      Pakan Ternak
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
              <h3 class="box-title">Input/Ubah Pakan Ternak</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('mekpemsda.simpan')}}">
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
                  
                  <label for="ket_pakan_ternak">Keterangan Pakan Ternak</label>
                  <input type="text" class="form-control" name="ket_pakan_ternak" id="ket_pakan_ternak" placeholder="masukan data">
                   <label for="jumlah_luas">Luas/Jumlah</label>
                  <input type="text" class="form-control" name="jumlah_luas" id="jumlah_luas" placeholder="masukan data">

           

                              <label for="id_status_kepemilikan">Kepemilikan</label>
                  <select class="form-control" name="id_status_kepemilikan">
                    <option value="" selected disabled></option>
                  @foreach($Kepemilikan AS $Kepemilikan =>$kep )
                    <option value="{{ $kep->id_status_kepemilikan}}">{{ $kep->kepemilikan }}</option>
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