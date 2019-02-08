@extends('layouts.dashboard')

@section('content')
<?php
$RangeLahan = [
];
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
          <form role="form" method="post" action="{{route('jumpemlahan.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
               <label for="id_range_lahan">Range Lahan</label>
                  <select class="form-control" name="id_range_lahan">
                    <option value="" selected disabled></option>
                  @foreach($RangeLahan AS $RangeLahan =>$range )
                    <option value="{{ $RangeLahan }}">{{ $range }}</option>
                  @endforeach
                </select>


                  <label for="jenis_lahan">Jenis Lahan</label>
                  <input type="text" class="form-control" name="jenis_lahan" id="jenis_lahan" placeholder="masukan data">

                   <label for="jumlah_pemilik">Jumlah Pemilik</label>
                  <input type="number" class="form-control" name="jumlah_pemilik" id="jumlah_pemilik" placeholder="masukan data">
                 
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