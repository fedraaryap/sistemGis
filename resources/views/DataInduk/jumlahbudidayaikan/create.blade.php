@extends('layouts.dashboard')

@section('content')
<?php
$BudidayaIkan = [
];
?>



<div class="content-header">
      <h1>
      Jumlah Budidaya Ikan
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
              <h3 class="box-title">Input/Ubah Jumlah Budidaya Ikan</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('jumbudikan.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
               <label for="id_jenis_budidaya_ikan">Jenis Budidaya Ikan</label>
                  <select class="form-control" name="id_jenis_budidaya_ikan">
                    <option value="" selected disabled></option>
                  @foreach($BudidayaIkan AS $BudidayaIkan =>$ikan )
                    <option value="{{ $BudidayaIkan }}">{{ $ikan }}</option>
                  @endforeach
                </select>


                  <label for="jumlah_budidaya_ikan">jumlah Budidaya Ikan</label>
                  <input type="number" class="form-control" name="jumlah_budidaya_ikan" id="jumlah_budidaya_ikan" placeholder="masukan data">

                   <label for="jumlah_produksi_ikan">Jumlah Produksi Ikan</label>
                  <input type="number" class="form-control" name="jumlah_produksi_ikan" id="jumlah_produksi_ikan" placeholder="masukan data">



                 
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