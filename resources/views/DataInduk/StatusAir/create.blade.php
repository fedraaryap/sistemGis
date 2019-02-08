@extends('layouts.dashboard')

@section('content')
<?php
$AirBersih = [
];
$AirPanas = [
];
$ApakahBersih = [0=>'tidak',1=>'ada'];
$ApakahPanas = [0=>'tidak',1=>'ada'];

?>



<div class="content-header">
      <h1>
      Status Air
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
              <h3 class="box-title">Input/Ubah Status Air</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('produkpert.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                 <label for="a_air-panas">Apakah Air Bersih</label>
                  <select class="form-control" name="a_air-panas">
                    <option value="" selected disabled></option>
                  @foreach($ApakahBersih AS $ApakahBersih =>$abersih )
                    <option value="{{ $ApakahBersih }}">{{ $abersih }}</option>
                  @endforeach
                </select>

                <label for="id_air_bersih">Jenis Air Bersih</label>
                  <select class="form-control" name="id_air_bersih">
                    <option value="" selected disabled></option>
                  @foreach($AirBersih AS $AirBersih =>$bersih )
                    <option value="{{ $AirBersih }}">{{ $bersih }}</option>
                  @endforeach
                </select>

                   <label for="a_air_panas">Apakah Sumber Air Panas</label>
                  <select class="form-control" name="a_air_panas">
                    <option value="" selected disabled></option>
                  @foreach($ApakahPanas AS $ApakahPanas =>$apanas )
                    <option value="{{ $ApakahPanas }}">{{ $apanas }}</option>
                  @endforeach
                </select>

                  <label for="id_air_panas">Sumber Air Panas</label>
                  <select class="form-control" name="id_air_panas">
                    <option value="" selected disabled></option>
                  @foreach($AirPanas AS $AirPanas =>$panas )
                    <option value="{{ $AirPanas }}">{{ $panas }}</option>
                  @endforeach
                </select>
                 
                 
                   <label for="pemanfaatan">Pemanfaatan</label>
                  <input type="text" class="form-control" name="pemanfaatan" id="pemanfaatan" placeholder="masukan data">
              

               
                 
          
           
                 
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