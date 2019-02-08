@extends('layouts.dashboard')

@section('content')
<?php
$JenisAngkutan = [
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
          <form role="form" method="post" action="{{route('jumangkut.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
               <label for="id_jenis_angkutan">Jenis Angkutan</label>
                  <select class="form-control" name="id_jenis_angkutan">
                    <option value="" selected disabled></option>
                  @foreach($JenisAngkutan AS $JenisAngkutan =>$jenang )
                    <option value="{{ $JenisAngkutan }}">{{ $jenang }}</option>
                  @endforeach
                </select>


                  <label for="jumlah_pemilik">Jumlah Pemilik</label>
                  <input type="number" class="form-control" name="jumlah_pemilik" id="jumlah_pemilik" placeholder="masukan data">

                   <label for="jumlah_kapasitas">Jumlah Kapasitas</label>
                  <input type="number" class="form-control" name="jumlah_kapasitas" id="jumlah_kapasitas" placeholder="masukan data">

                   <label for="jumlah_unit_angkutan">Jumlah Unit Angkutan</label>
                  <input type="number" class="form-control" name="jumlah_unit_angkutan" id="jumlah_unit_angkutan" placeholder="masukan data">

                  <label for="tenaga_kerja_angkutan">Tenaga Kerja Angkutan</label>
                  <input type="number" class="form-control" name="tenaga_kerja_angkutan" id="tenaga_kerja_angkutan" placeholder="masukan data">


                


                 
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