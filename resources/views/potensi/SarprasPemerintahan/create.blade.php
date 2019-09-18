@extends('layouts.dashboard')

@section('content')



<div class="content-header">
      <h1>
       Prasarana Dan Sarana Pemerintahan
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
              <h3 class="box-title"> tambah Prasarana Dan Sarana Pemerintahan</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('sarpraspemerintah.simpan')}}">
              {{ csrf_field() }}



              <div class="box-body">
                <div class="form-group">
               <label for="id_status_prasarana">Status Prasarana</label>
                  <select class="form-control" name="id_status_prasarana">
                    <option value="" selected  ></option>
                  @foreach($StatusPrasarana AS $stat =>$sta )
                    <option value="{{ $sta->id_status_prasarana }}">{{ $sta->id_status_prasarana }}</option>
                  @endforeach
                </select>

               <label for="id_stat_prasarana">Status Prasarana Lainnya </label>
                  <select class="form-control" name="id_stat_prasarana">
                    <option value="" selected  ></option>
                  @foreach($StatPrasaranaLainnya AS $pras =>$pra )
                    <option value="{{ $pra->id_stat_prasarana }}">{{ $pra->id_stat_prasarana }}</option>
                  @endforeach
                </select>

             
               <label for="id_status_transportasi">Status Sarana Transportasi</label>
                  <select class="form-control" name="id_status_transportasi">
                    <option value="" selected  ></option>
                  @foreach($StatusSatanaTransportasi AS $trans =>$tra )
                    <option value="{{ $tra->id_status_transportasi }}">{{ $tra->id_status_transportasi }}</option>
                  @endforeach
                </select>  
                 
          </form>
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