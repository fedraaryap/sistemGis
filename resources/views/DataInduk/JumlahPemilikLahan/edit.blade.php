@extends('layouts.dashboard')

@section('content')

<?php
$desa = [1=>'Totoharjo',2=>'Hata',3=>'bakauhani',4=>'kelawi',5=>'semanak'];

?>
<div class="content-header">
      <h1>
      Jumlah Pemilik Lahan
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
              <h3 class="box-title">Input/Ubah Jumlah Pemilik Lahan</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('jumpemlahan.update',$data->id_pemilik)}}">
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
               <label for="id_range_lahan">Range Lahan</label>
                  <select class="form-control" name="id_range_lahan">
                    <option value="" selected disabled></option>
                  @foreach($RangeLahan AS $Range=>$ran )
                    <option value="{{ $ran->id_range_lahan }}">{{ $ran->range_lahan}}</option>
                  @endforeach
                </select>


                  <label for="jenis_lahan">Jenis Lahan</label>
                  <input type="text" class="form-control" name="jenis_lahan" id="jenis_lahan" placeholder="masukan data" value="{{$data->jenis_lahan}}">

                   <label for="jumlah_pemilik">Jumlah Pemilik</label>
                  <input type="number" class="form-control" name="jumlah_pemilik" id="jumlah_pemilik" placeholder="masukan data" value="{{$data->jumlah_pemilik}}">
                 
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