@extends('layouts.dashboard')

@section('content')



<div class="content-header">
      <h1>
      Sarana Dan Prasarana Desa
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
              <h3 class="box-title">Lihat Data Sarana Dan Prasarana Desa</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('sarprasdesa.simpan')}}">
              {{ csrf_field() }}



              <div class="box-body">
                <div class="form-group">
               <label for="id_status_sarpras">Status Sarana Dan Prasarana Pemerintahan Desa</label>
                  <select class="form-control" name="id_status_sarpras">
                    <option value="" selected  ></option>
                  @foreach($StatSarprasPemerintahan AS $pemerintah =>$pem )
                    <option value="{{ $pem->id_status_sarpras }}">{{ $pem->id_status_sarpras }}</option>
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