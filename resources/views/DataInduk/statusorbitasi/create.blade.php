@extends('layouts.dashboard')

@section('content')
<?php
$Orbitasi = [
];
$SatuanOrbitasi = [
];
$Status = [ 
];
?>



<div class="content-header">
      <h1>
      Status Orbitasi
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
              <h3 class="box-title">Input/Ubah Status Orbitasi</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('produkpert.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                 <label for="id_orbitasi">Orbitasi</label>
                  <select class="form-control" name="id_orbitasi">
                    <option value="" selected disabled></option>
                  @foreach($Orbitasi AS $Orbitasi =>$orb )
                    <option value="{{ $Orbitasi }}">{{ $orb }}</option>
                  @endforeach
                </select>

                 <label for="id_satuan_orbitasi">Satuan Orbitasi</label>
                  <select class="form-control" name="id_satuan_orbitasi">
                    <option value="" selected disabled></option>
                  @foreach($SatuanOrbitasi AS $SatuanOrbitasi =>$sat )
                    <option value="{{ $SatuanOrbitasi }}">{{ $sat }}</option>
                  @endforeach
                </select>
                  <label for="status_angka">Status Angka</label>
                  <input type="number" class="form-control" name="status_angka" id="status_angka" placeholder="masukan data">
           
                 
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