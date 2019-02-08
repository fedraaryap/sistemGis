@extends('layouts.dashboard')
@section('content')
<div class="content-header">
      <h1>
      Air Bersih
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
              <h3 class="box-title">Input/Ubah Informasi Air Bersih</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('air_bersih.update',$data->id_air_bersih)}}">
              {{ csrf_field() }}
              {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <label for="jenis_air_bersih">Jenis Air Bersih</label>
                  <input type="text" class="form-control" name="jenis_air_bersih" id="jenis_air_bersih" placeholder="masukan data">
                  <label for="kondisi_air">kondisi Air</label>
                  <input type="number" class="form-control" name="kondisi_air" id="kondisi_air" placeholder="masukan data">
                  <label for="kualitas_air">Kualitas Air</label>
                  <input type="number" class="form-control" name="kualitas_air" id="kualitas_air" placeholder="masukan data">
              
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