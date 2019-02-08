@extends('layouts.dashboard')

@section('content')
<?php
$JenisPendidikan = [
1=>'Pendidikan Formal',2=>'Pendidikan Agama',3=>'Pendidikan Komputer'];


?>



<div class="content-header">
      <h1>
      Nama Sekolah
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
              <h3 class="box-title">Input/Ubah Nama Sekolah</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('nama_sekolah.simpan')}}">
              {{ csrf_field() }}



              <div class="box-body">
                <div class="form-group">
               <label for="id_jenis_pendidikan">Jenis Pendidikan</label>
                  <select class="form-control" name="id_jenis_pendidikan">
                    <option value="" selected></option>
                  @foreach($JenisPendidikan AS $JenisPendidikan =>$pen )
                    <option value="{{ $JenisPendidikan }}">{{ $pen }}</option>
                  @endforeach
                </select>


                  <label for="nama_sekolah">Nama Jenjang Pendidikan</label>
                  <input type="text" class="form-control" name="nama_sekolah" id="nama_sekolah" placeholder="masukan data">


                 
          </form>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
              </div>
            </form>
        </section>
  <!-- /.content -->
  </div>
</div>


@endsection