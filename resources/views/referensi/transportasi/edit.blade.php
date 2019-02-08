@extends('layouts.dashboard')
@section('content')
<div class="content-header">
      <h1>
      Transportasi
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
              <h3 class="box-title">Input/Ubah Jenis Transportasi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('sartrans.update',$data->id_sarana_transportasi)}}">
              {{ csrf_field() }}
              {{method_field('PUT')}}
            <div class="box-body">
                <div class="form-group">
                  <label for="Sar_id_sarana_transportasi">Sarana Transportasi</label>
                  <select class="form-control" name="Sar_id_sarana_transportasi">
                    <option value="" selected></option>
                  @foreach($transportasi AS $trans)
                    <option value="{{ $trans->Sar_id_sarana_transportasi }}">{{($data->sar_id_sarana_transportasi==$trans->id_transportasi)?'selected':null}}>{{$trans->jenis_sarana_transportasi }}</option>
                  @endforeach
                  </select>
                  <label for="jenis_sarana_transportasi">jenis Sarana Transportasi</label>
                  <input type="text" class="form-control" name="jenis_sarana_transportasi" id="jenis_sarana_transportasi" placeholder="masukan data" value="{{$data->jenis_sarana_transportasi}}" >
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