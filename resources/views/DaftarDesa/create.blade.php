@extends('layouts.dashboard')

@section('content')




<div class="content-header">
      <h1>
      Daftar Desa
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
              <h3 class="box-title">Tambah Daftar Desa</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('desa.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
           
                  <label for="id_wilayah">Desa</label>
                  <select class="form-control" name="id_wilayah">
                    <option value="" selected disabled></option>
                  @foreach($Wilayah AS $wilayah =>$wil )
                    <option value="{{ $wil->id_wilayah }}">{{ $wil->nama_wil }}</option>
                  @endforeach
                </select>

                 <label for="id_perangkat_desa">Kepala Desa</label>
                  <select class="form-control" name="id_perangkat_desa">
                    <option value="" selected disabled></option>
                  @foreach($PerangkatDesa AS $desa =>$des )
                    <option value="{{ $des->id_perangkat_desa }}">{{ $des->kepala_desa }}</option>
                  @endforeach
                </select>


                


                 
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