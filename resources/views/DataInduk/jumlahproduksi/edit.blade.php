@extends('layouts.dashboard')

@section('content')


<?php
$desa = [1=>'Totoharjo',2=>'Hata',3=>'bakauhani',4=>'kelawi',5=>'semanak'];

?>

<div class="content-header">
      <h1>
      Jumlah Produksi
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
              <h3 class="box-title">Input/Ubah Jumlah Produksi</h3>
            </div>

            <!-- /.box-header --> 
            <!-- form start -->
          <form role="form" method="post" action="{{route('jumproduksi.update',$data->id_jumlah_produksi)}}">
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


               <label for="id_produksi">Nama Produksi</label>
                  <select class="form-control" name="id_produksi">
                    <option value="" selected disabled></option>
                  @foreach($Produksi AS $produksi =>$pro )
                    <option value="{{ $pro->id_produksi }}">{{ $pro->nama_produksi }}</option>
                  @endforeach
                </select>


                  <label for="jumlah_produksi">Jumlah Produksi</label>
                  <input type="text" class="form-control" name="jumlah_produksi" id="jumlah_produksi" placeholder="masukan data" value="{{$data->jumlah_produksi}}">

                 
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