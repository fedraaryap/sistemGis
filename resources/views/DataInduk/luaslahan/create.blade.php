@extends('layouts.dashboard')

@section('content')
<?php

$KetLahan=[
];


?>



<div class="content-header">
      <h1>
      Luas Lahan
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
              <h3 class="box-title">Input/Ubah Luas Lahan</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('luaslahan.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">

               <label for="id_ket_lahan">Keterangan Lahan</label>
                  <select class="form-control" name="id_ket_lahan">
                    <option value="" selected disabled></option>
                  @foreach($KetLahan AS $KetLahan =>$lahan )
                    <option value="{{ $KetLahan }}">{{ $lahan }}</option>
                  @endforeach
                </select>

                  <label for="pemilik_lahan">Pemilik Lahan</label>
                  <input type="text" class="form-control" name="pemilik_lahan" id="pemilik_lahan" placeholder="masukan data">
                  <label for="luas_lahan">Luas Lahan</label>
                  <input type="number" class="form-control" name="luas_lahan" id="luas_lahan" placeholder="masukan data">



                 
          </form>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
              </div>
            </form>
       </div>
     </div>
  <!-- /.content -->
  </div>
   </section>
</div>


@endsection