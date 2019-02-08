@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h1>
      Jenis cacat
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
              <h3 class="box-title">Input/Ubah Jenis cacat</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('daftardesa.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="nama_wil">Desa</label>
                  <input type="text" class="form-control" name="nama_wil" id="nama_wil" placeholder="masukan data">
                  <label for="kepala_desa">Kepala Desa</label>
                  <input type="text" class="form-control" name="kepala_desa" id="kepala_desa" placeholder="masukan data">
                  <label for="tahun_mulai">Tahun Mulai</label>
                  <input type="date" class="form-control" name="tahun_mulai" id="tahun_mulai" placeholder="masukan data">
                  <label for="tahun_berakhir">Tahun Berakhir</label>
                  <input type="date" class="form-control" name="tahun_berakhir" id="tahun_berakhir" placeholder="masukan data">
                  <label for="latitude">latitude</label>
                  <input type="float" class="form-control" name="latitude" id="latitude" placeholder="masukan data">
                  <label for="longitude">longitude</label>
                  <input type="float" class="form-control" name="longitude" id="longitude" placeholder="masukan data">
            
              
          </form>
          </form>
          </form>
          </form>
          </form>
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