@extends('layouts.dashboard')

@section('content')
<?php
$TahunAktif = [0=>'tidak',1=>'iya'
];

?>



<div class="content-header">
      <h1>
      Perangkat Desa
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
              <h3 class="box-title">Input/Ubah Perangkat Desa</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('mekpemsda.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="kepala_desa">Kepala Desa</label>
                  <input type="text" class="form-control" name="kepala_desa" id="kepala_desa" placeholder="masukan data">
                   <label for="tahun_dimulai">Tahun Dimulai</label>
                  <input type="text" class="form-control" name="tahun_dimulai" id="tahun_dimulai" placeholder="masukan data">
                 <label for="tahun_berakhir">Tahun Berakhir</label>
                  <input type="number" class="form-control" name="tahun_berakhir" id="tahun_berakhir" placeholder="masukan data">
                    <label for="periode">Periode</label>
                  <input type="text" class="form-control" name="periode" id="periode" placeholder="masukan data">

                  <label for="a_tahun_aktif">Apakah Aktif</label>
                  <select class="form-control" name="a_tahun_aktif">
                    <option value="" selected disabled></option>
                  @foreach($TahunAktif AS $TahunAktif =>$aktif )
                    <option value="{{ $TahunAktif }}">{{ $aktif }}</option>
                  @endforeach
                </select>

                 <label for="tahun_aktif">Tahun Aktif</label>
                  <input type="text" class="form-control" name="tahun_aktif" id="tahun_aktif" placeholder="masukan data">

           

                
    
    
              
                 
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