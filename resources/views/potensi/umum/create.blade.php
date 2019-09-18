@extends('layouts.dashboard')

@section('content')



<div class="content-header">
      <h1>
      Potensi Umum
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
              <h3 class="box-title">Potensi Umum</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('umum.simpan')}}">
              {{ csrf_field() }}



              <div class="box-body">
                <div class="form-group">
               <label for="id_status_orbitasi">Status Orbitasi </label>
                  <select class="form-control" name="id_status_orbitasi">
                    <option value="" selected  ></option>
                  @foreach($StatusOrbitasi AS $orbitasi =>$orb )
                    <option value="{{ $orb->id_status_orbitasi }}">{{ $orb->id_status_orbitasi }}</option>
                  @endforeach
                </select>

               <label for="id_luas_wilayah">Luas Wilayah </label>
                  <select class="form-control" name="id_luas_wilayah">
                    <option value="" selected  ></option>
                  @foreach($LuasWilayah AS $Luas =>$lua )
                    <option value="{{ $lua->id_luas_wilayah }}">{{ $lua->id_luas_wilayah }}</option>
                  @endforeach
                </select>

             
               <label for="id_batas_wilayah">Batas Wilayah  </label>
                  <select class="form-control" name="id_batas_wilayah">
                    <option value="" selected  ></option>
                  @foreach($BatasWilayah AS $wilayah =>$wil )
                    <option value="{{ $wil->id_batas_wilayah }}">{{ $wil->id_batas_wilayah }}</option>
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