@extends('layouts.dashboard')

@section('content')
<?php
$TingkatKebisingan = [
];

?>



<div class="content-header">
      <h1>
      Kebisingan
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
              <h3 class="box-title">Input/Ubah Kebisingan</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('bising.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
               <label for="id_tingkat_kebisingan">Tingkat Kebisingan</label>
                  <select class="form-control" name="id_tingkat_kebisingan">
                    <option value="" selected disabled></option>
                  @foreach($TingkatKebisingan AS $TingkatKebisingan =>$bising )
                    <option value="{{ $TingkatKebisingan }}">{{ $bising }}</option>
                  @endforeach
                </select>


                  <label for="dampak_kebisingan">Dampak Kebisingan</label>
                  <input type="text" class="form-control" name="dampak_kebisingan" id="dampak_kebisingan" placeholder="masukan data">
                   <label for="sumber_kebisingan">Sumber Kebisingan</label>
                  <input type="text" class="form-control" name="sumber_kebisingan" id="sumber_kebisingan" placeholder="masukan data">
                          <label for="efek_terhadap_penduduk">Efek Terhadap Penduduk</label>
                  <input type="text" class="form-control" name="efek_terhadap_penduduk" id="efek_terhadap_penduduk" placeholder="masukan data">
              
                 
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