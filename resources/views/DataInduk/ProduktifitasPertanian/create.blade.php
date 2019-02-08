@extends('layouts.dashboard')

@section('content')
<?php
$Produktifitas = [
];

?>



<div class="content-header">
      <h1>
      Produktifitas Pertanian
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
              <h3 class="box-title">Input/Ubah Produktifitas Pertanian</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('produkpert.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                 <label for="id_jenis_produktifitas">Jenis Produktifitas</label>
                  <select class="form-control" name="id_jenis_produktifitas">
                    <option value="" selected disabled></option>
                  @foreach($Produktifitas AS $Produktifitas =>$produk )
                    <option value="{{ $Produktifitas }}">{{ $produk }}</option>
                  @endforeach
                </select>
                 
                   <label for="jenis_tanaman">Jenis Tanaman</label>
                  <input type="text" class="form-control" name="jenis_tanaman" id="jenis_tanaman" placeholder="masukan data">
                  <label for="luas">Luas</label>
                  <input type="number" class="form-control" name="luas" id="luas" placeholder="masukan data">
                  <label for="hasil">Hasil</label>
                  <input type="number" class="form-control" name="hasil" id="hasil" placeholder="masukan data">
                  <label for="kepemilika_pertanian">Kepemilikan Pertanian</label>
                  <input type="number" class="form-control" name="kepemilika_pertanian" id="kepemilika_pertanian" placeholder="masukan data">

               
                 
          
           
                 
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