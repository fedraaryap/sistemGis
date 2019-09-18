@extends('layouts.dashboard')

@section('content')
<?php
$Status = [ 0=>'tidak ada',1=>'ada'
];
$desa = [1=>'Totoharjo',2=>'Hata',3=>'bakauhani',4=>'kelawi',5=>'semanak'];
?>



<div class="content-header">
      <h1>
      Lembaga Keamanan
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
              <h3 class="box-title">Input/Ubah Lembaga Keamanan</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('lemkeamanan.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                      <label for="id_desa">Desa</label>
                  <select class="form-control" name="id_desa">
                    <option value="" selected disabled></option>
                  @foreach($desa AS $desa =>$des )
                    <option value="{{ $desa }}">{{ $des }}</option>
                  @endforeach
                </select>
               <label for="id_jenis_keamanan">Jenis Keamanan</label>
                  <select class="form-control" name="id_jenis_keamanan">
                    <option value="" selected disabled></option>
                  @foreach($JenisKeamanan AS $jenis =>$kua )
                    <option value="{{ $kua->id_jenis_keamanan }}">{{ $kua->jenis_keamanan }}</option>
                  @endforeach
                </select>


                  <label for="jumlah_anggota">Jumlah Anggota</label>
                  <input type="number" class="form-control" name="jumlah_anggota" id="jumlah_anggota" placeholder="masukan data">
                    <label for="jumlah_poskamling">Jumlah Poskamling</label>
                  <input type="number" class="form-control" name="jumlah_poskamling" id="jumlah_poskamling" placeholder="masukan data">
                    <label for="jumlah_kegiaatan">Jumlah Kegiatan</label>
                  <input type="number" class="form-control" name="jumlah_kegiaatan" id="jumlah_kegiaatan" placeholder="masukan data">
                    <label for="nama_organisasi_induk">Nama organisasi Induk</label>
                  <input type="text" class="form-control" name="nama_organisasi_induk" id="nama_organisasi_induk" placeholder="masukan data">

                    <label for="status">Status</label>
                  <select class="form-control" name="status">
                    <option value="" selected disabled></option>
                  @foreach($Status AS $Status =>$stat )
                    <option value="{{ $Status }}">{{ $stat }}</option>
                  @endforeach
                </select>

              
                 
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