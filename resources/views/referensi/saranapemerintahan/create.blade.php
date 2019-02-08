@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h1>
      Sarana Pemerintahan
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
              <h3 class="box-title">Input/Ubah Sarana Pemerintahan</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('SarprasPem.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="sar_id_sarpras_pemerintahan">Sarana Pemerintahan</label>
                  <select class="form-control" name="sar_id_sarpras_pemerintahan">
                    <option value="" selected></option>
                  @foreach($sarpem AS $sar)
                    <option value="{{ $sar->id_sarpas_pemerintahan }}">{{$sar->jenis_sarpras_pemerintahan}} </option>
                  @endforeach
                  </select>
                  <label for="jenis_sarpras_pemerintahan">Jenis Sarana</label>
                  <input type="text" class="form-control" name="jenis_sarpras_pemerintahan" id="jenis_sarpras_pemerintahan" placeholder="masukan data">
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