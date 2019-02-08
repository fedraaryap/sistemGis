@extends('layouts.dashboard')
@section('content')
<div class="content-header">
      <h1>
      Sumber Air
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
              <h3 class="box-title">Input/Ubah Sumber Air>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('sumber_air.update',$data->id_sumber_air)}}">
              {{ csrf_field() }}
              {{method_field('PUT')}}
              <div class="form-group">
                  <label for="sum_id_sumber_air">Sumber Air</label>
                  <select class="form-control" name="sum_id_sumber_air">
                    <option value="" selected></option>
                  @foreach($air AS $airs)
                    <option value="{{ $airs->id_sumber_air }}">{{$airs->sumber_air}} </option>
                  @endforeach
                  </select>
                  <label for="sumber_air">Sumber Air</label>
                  <input type="text" class="form-control" name="sumber_air" id="sumber_air" placeholder="masukan data">
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