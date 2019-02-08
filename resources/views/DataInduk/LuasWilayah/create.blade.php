@extends('layouts.dashboard')

@section('content')
<?php

$LuasWil=[];

$A_memiliki = [0=>'tidak',1=>'iya'];

$SatuanWil = [
];

$Status = [
0=>'tidak ada',1=>'ada'];

?>



<div class="content-header">
      <h1>
      Luas Wilayah
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
              <h3 class="box-title">Input/Ubah Luas Wilayah</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('luas.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">

               <label for="id_wilayah_lahan">Jenis Wilayah</label>
                  <select class="form-control" name="id_wilayah_lahan">
                    <option value="" selected disabled></option>
                  @foreach($LuasWil AS $LuasWil =>$wil )
                    <option value="{{ $LuasWil }}">{{ $wil }}</option>
                  @endforeach
                </select>

                <label for="luas_wilayah">Luas Wilayah</label>
                  <input type="number" class="form-control" name="luas_wilayah" id="luas_wilayah" placeholder="masukan data">

                 <label for="a_memiliki_nilai">Nilai</label>
                  <select class="form-control" name="a_memiliki_nilai">
                    <option value="" selected></option>
                  @foreach($A_memiliki AS $A_memiliki =>$apakah)
                    <option value="{{ $A_memiliki }}">{{ $apakah }}</option>
                  @endforeach
                </select>


                <label for="id_satuan">satuan</label>
                  <select class="form-control" name="id_satuan">
                    <option value="" selected></option>
                  @foreach($SatuanWil AS $SatuanWil =>$satuan)
                    <option value="{{ $SatuanWil }}">{{ $satuan }}</option>
                  @endforeach
                </select>

                <label for="status">Status</label>
                  <select class="form-control" name="status">
                    <option value="" selected></option>
                  @foreach($Status AS $Status =>$stat)
                    <option value="{{ $Status }}">{{ $stat }}</option>
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
  <!-- /.content -->
  </div>
   </section>
</div>


@endsection