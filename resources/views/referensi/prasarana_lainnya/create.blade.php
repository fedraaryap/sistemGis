@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h1>
      Prasarana Lainnya
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
              <h3 class="box-title">Input/Ubah Prasarana Lainnya</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('praslainya.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="pra_id_prasarana_sarana">Prasarana</label>
                  <select class="form-control" name="pra_id_prasarana_sarana">
                    <option value="" selected></option>
                  @foreach($pralainnya AS $sarana)
                    <option value="{{ $sarana->id_prasarana_sarana }}">{{$sarana->macam_prasarana_sarana}} </option>
                  @endforeach
                  </select>
                  <label for="macam_prasarana_sarana">Macam Prasarana</label>
                  <input type="text" class="form-control" name="macam_prasarana_sarana" id="macam_prasarana_sarana" placeholder="masukan data">
                </div>

          
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
              </div>
            </form>
          </div>
        </div>
      </div>

       
  <!-- /.content -->
</section>
</div>


@endsection