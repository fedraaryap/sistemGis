@extends('layouts.dashboard')
@section('content')
<?php

$Sekolah=[1=>'playgroup',2=>'SD/Sederajat'];

$Status = [
0=>'tidak Terdaftar',1=>'Terdaftar'];

?>


<div class="content-header">
      <h1>
      Lembaga Pendidikan
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
              <h3 class="box-title">Input/Ubah Informasi Lembaga Pendidikan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('lemp.update',$data->id_pendidikan)}}">
              {{ csrf_field() }}
              {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">

               <label for="id_sekolah">Nama Jenjang Sekolah</label>
                  <select class="form-control" name="id_sekolah">
                    <option value="" selected disabled></option>
                  @foreach($Sekolah AS $Sekolah =>$sekolah )
                    <option value="{{ $Sekolah }}">{{ $sekolah }}</option>
                  @endforeach
                </select>

                 <label for="status_sekolah">Status</label>
                  <select class="form-control" name="status_sekolah">
                    <option value="" selected></option>
                  @foreach($Status AS $Status =>$stat)
                    <option value="{{ $Status }}">{{ $stat }}</option>
                  @endforeach
                </select>

                  <label for="jumlah_pengajar">Jumlah Sekolah</label>
                  <input type="number" class="form-control" name="jumlah_sekolah" id="jumlah_sekolah" placeholder="masukan data">
                  <label for="jumlah_pengajar">Jumlah Pengajar</label>
                  <input type="number" class="form-control" name="jumlah_pengajar" id="jumlah_pengajar" placeholder="masukan data">
                  <label for="jumlah_siswa">Jumlah Siswa</label>
                  <input type="number" class="form-control" name="jumlah_siswa" id="jumlah_siswa" placeholder="masukan data">
                  <label for="kepemilikan">Kepemilikan</label>
                  <input type="text" class="form-control" name="kepemilikan" id="kepemilikan" placeholder="masukan data">
                  


                  
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
              </div>
            </form>
          </div>
        </section>
  <!-- /.content -->
</div>
</div>


@endsection