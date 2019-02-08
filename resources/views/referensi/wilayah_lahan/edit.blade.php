@extends('layouts.dashboard')
@section('content')
<div class="content-header">
      <h1>
      wilayah lahan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>

    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input/Ubah wilayah lahan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('wilayah_lahan.update',$data->id_wilayah_lahan)}}">
              {{ csrf_field() }}
              {{method_field('PUT')}}
             <div class="box-body">
                <div class="form-group">
                  <label for="wil_id_wilayah_lahan">Wilayah Lahan</label>
                  <select class="form-control" name="wil_id_wilayah_lahan">
                    <option value="" selected></option>
                  @foreach($wilayah AS $setiap_wil)
                    <option value="{{ $setiap_wil->id_wilayah_lahan }}" {{($data->wil_id_wilayah_lahan==$setiap_wil->id_wilayah_lahan)?'selected':null}}>{{ $setiap_wil->jenis_wilayah }}</option>
                  @endforeach
                  </select>
                  <label for="jenis_wilayah">jenis Wilayah</label>
                  <input type="text" class="form-control" name="jenis_wilayah" id="jenis_wilayah" placeholder="masukan data" value="{{$data->jenis_wilayah}}" >
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
        
  <!-- /.content -->
</section>
</div>


@endsection