@extends('layouts.dashboard')
@section('content')
<div class="content-header">
      <h1>
      Ekonomi Jasa Usaha
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
              <h3 class="box-title">Input/Ubah Informasi Ekonomi Jasa Usaha</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('ekojas.update',$data->id_jasa_usaha)}}">
              {{ csrf_field() }}
              {{method_field('PUT')}}
             <div class="box-body">
                <div class="form-group">
                  <label for="eko_id_jasa_usaha">Ekonomi Jasa Usaha</label>
                  <select class="form-control" name="eko_id_jasa_usaha">
                    <option value="" selected></option>
                  @foreach($jasa AS $jasas)
                    <option value="{{ $jasas->id_jasa_usaha }}">{{$jasas->jasa_usaha}} </option>
                  @endforeach
                  </select>
                  <label for="jasa_usaha">Jasa Usaha</label>
                  <input type="text" class="form-control" name="jasa_usaha" id="jasa_usaha" placeholder="masukan data" value="{{$data->jasa_usaha}}" >
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
</section>
</div>


@endsection