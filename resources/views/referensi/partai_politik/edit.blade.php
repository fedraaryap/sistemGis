@extends('layouts.dashboard')
@section('content')
<div class="content-header">
      <h1>
      Partai Politik
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
              <h3 class="box-title">Input/Ubah Informasi Partai</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('partai_politik.update',$data->id_partai)}}">
              {{ csrf_field() }}
              {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <label for="nama_partai">Nama Partai</label>
                  <input type="text" class="form-control" name="nama_partai" id="nama_partai" placeholder="masukan data">
                  <label for="alamat_sekret">Alamat Sekretariat</label>
                  <input type="text" class="form-control" name="alamat_sekret" id="alamat_sekret" placeholder="masukan data">
                  <label for="jenis_kegiatan">Jenis Kegiatan</label>
                  <input type="text" class="form-control" name="jenis_kegiatan" id="jenis_kegiatan" placeholder="masukan data">
                  <label for="dasar_hukum_pembentukan">Dasar Hukum Pembentukan</label>
                  <input type="text" class="form-control" name="dasar_hukum_pembentukan" id="dasar_hukum_pembentukan" placeholder="masukan data">
                  <label for="Organisasi_underbow">Organisasi underbow</label>
                  <input type="text" class="form-control" name="Organisasi_underbow" id="Organisasi_underbow" placeholder="masukan data">
                </div>
              
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