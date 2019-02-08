@extends('layouts.dashboard')

@section('content')
<?php
$Politik = [
];
?>



<div class="content-header">
      <h1>
      Jumlah Angkutan
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
              <h3 class="box-title">Input/Ubah Jumlah Angkutan</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('jumlempolitik.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
               <label for="id_partai">Nama Partai</label>
                  <select class="form-control" name="id_partai">
                    <option value="" selected disabled></option>
                  @foreach($Politik AS $Politik =>$pol )
                    <option value="{{ $Politik }}">{{ $pol }}</option>
                  @endforeach
                </select>


                  <label for="pengurus">Pengurus</label>
                  <input type="text" class="form-control" name="pengurus" id="pengurus" placeholder="masukan data">

                   <label for="anggota">Anggota</label>
                  <input type="text" class="form-control" name="anggota" id="anggota" placeholder="masukan data">

                   <label for="jumlah_unit_angkutan">Pemilu terakhir</label>
                  <input type="text" class="form-control" name="jumlah_unit_angkutan" id="jumlah_unit_angkutan" placeholder="masukan data">

                 
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