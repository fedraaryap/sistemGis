@extends('layouts.dashboard')

@section('content')

<?php
$Status = [
0=>'tidak Terdaftar',1=>'Terdaftar'];

$desa = [1=>'Totoharjo',2=>'Hata',3=>'bakauhani',4=>'kelawi',5=>'semanak'];

$Kepem = [1=>'Pemerintah',2=>'Swasta'];

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
              <h3 class="box-title">Input/Ubah Lembaga Pendidikan</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('lemp.update',$data->id_pendidikan)}}">
              {{ csrf_field() }}
               {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                   <label for="id_desa">Desa</label>
                  <select class="form-control" name="id_desa">
                    <option value="" selected disabled></option>
                  @foreach($desa AS $desa =>$des )
                    <option value="{{ $desa }}">{{ $des }}</option>
                  @endforeach
                </select>

               <label for="id_sekolah">Nama Jenjang Sekolah</label>
                  <select class="form-control" name="id_sekolah">
                    <option value="" selected disabled></option>
                  @foreach($Sekolah AS $sekolah =>$sek )
                    <option value="{{ $sek->id_sekolah }}">{{ $sek->nama_sekolah }}</option>
                  @endforeach
                </select>

                 <label for="status_sekolah">Status</label>
                  <select class="form-control" name="status_sekolah">
                    <option value="" selected></option>
                  @foreach($Status AS $Status =>$stat)
                    <option value="{{ $Status }}">{{ $stat }}</option>
                  @endforeach
                </select>

                  <label for="jumlah_sekolah">Jumlah Sekolah</label>
                  <input type="number" class="form-control" name="jumlah_sekolah" id="jumlah_sekolah" placeholder="masukan data" value="{{$data->jumlah_sekolah}}">
                  <label for="jumlah_pengajar">Jumlah Pengajar</label>
                  <input type="number" class="form-control" name="jumlah_pengajar" id="jumlah_pengajar" placeholder="masukan data" value="{{$data->jumlah_pengajar}}">
                  <label for="jumlah_siswa">Jumlah Siswa</label>
                  <input type="number" class="form-control" name="jumlah_siswa" id="jumlah_siswa" placeholder="masukan data" value="{{$data->jumlah_siswa}}">

                  <label for="kepemilikan">Kepemilikan</label>
                  <select class="form-control" name="kepemilikan">
                    <option value="" selected></option>
                  @foreach($Kepem AS $Kepem =>$kep)
                    <option value="{{ $Kepem }}">{{ $kep }}</option>
                  @endforeach
                </select>
              

               
          </form>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
              </div>
            </form>
       </div>
     </div>
  <!-- /.content -->
  </div>
   </section>
</div>


@endsection