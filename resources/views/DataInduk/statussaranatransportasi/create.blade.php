@extends('layouts.dashboard')

@section('content')
<?php
$SaranaTransportasi = [
];
$Keberadaan = ['ada','tidak ada'
];
?>



<div class="content-header">
      <h1>
      Status Status Sarana Transportasi
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
              <h3 class="box-title">Input/Ubah Status Sarana Transportasi</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('produkpert.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                 <label for="id_sarana_transportasi">Jenis Sarana Transportasi</label>
                  <select class="form-control" name="id_sarana_transportasi">
                    <option value="" selected disabled></option>
                  @foreach($SaranaTransportasi AS $SaranaTransportasi =>$trans )
                    <option value="{{ $SaranaTransportasi }}">{{ $trans }}</option>
                  @endforeach
                </select>

                 <label for="keberadaan_transportasi">Keberadaan</label>
                  <select class="form-control" name="keberadaan_transportasi">
                    <option value="" selected disabled></option>
                  @foreach($Keberadaan AS $Keberadaan =>$keb )
                    <option value="{{ $Keberadaan }}">{{ $keb }}</option>
                  @endforeach
                </select>
                  <label for="jumlah">Jumlah</label>
                  <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="masukan data">
           
                 
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