@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h1>
      Orbitasi
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
              <h3 class="box-title">Input/Ubah Orbitasi</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('orbitasi.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="orb_id_orbitasi">Orbitasi</label>
                  <select class="form-control" name="orb_id_orbitasi">
                    <option value="" selected></option>
                  @foreach($Orbitas AS $orbitasi)
                    <option value="{{ $orbitasi->id_orbitasi }}">{{$orbitasi->orbitasi}} </option>
                  @endforeach
                  </select>
                  <label for="orbitasi">Jenis Orbitasi</label>
                  <input type="text" class="form-control" name="orbitasi" id="orbitasi" placeholder="masukan data">
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