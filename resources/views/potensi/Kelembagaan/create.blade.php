@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h1>
      Kelembagaan
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
              <h3 class="box-title">Input/Ubah kelembagaan</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('lem.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                   <label for="nama_sekolah">Nama Tingkat Pendidikan</label>
                  <select class="form-control" name="nama_sekolah">
                    <option value="" selected></option>
                  @foreach($data AS $dat)
                    <option value="{{ $dat->lempendidikan->sekolah->nama_sekolah }}">{{$dat->lempendidikan->sekolah->nama_sekolah}} </option>
                  @endforeach
                </select>
                  <label for="jumlah_sekolah">jumlah_sekolah</label>
                  <input type="number" class="form-control" name="jumlah_sekolah" id="jumlah_sekolah" placeholder="masukan data">
                  <label for="jumlah_pengajar">jumlah_pengajar</label>
                  <input type="number" class="form-control" name="jumlah_pengajar" id="jumlah_pengajar" placeholder="masukan data">
                  <label for="jumlah_siswa">jumlah_siswa</label>
                  <input type="number" class="form-control" name="jumlah_siswa" id="jumlah_siswa" placeholder="masukan data">
                  <label for="kepemilikan">kepemilikan</label>
                  <input type="text" class="form-control" name="kepemilikan" id="kepemilikan" placeholder="masukan data">
                  
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