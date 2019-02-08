@extends('layouts.dashboard')
@section('content')
<?php
$Kepemilikan = [
1=>'Pemerintah',2=>'Swasta',3=>'Perorangan'];
?>

<div class="content-header">
      <h1>
      Bahan Galian
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
              <h3 class="box-title">Input/Ubah Informasi Bahan Galian</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('galian.update',$data->id_galian)}}">
              {{ csrf_field() }}
              {{method_field('PUT')}}
                 <div class="box-body">
                <div class="form-group">
               <label for="id_status_kepemilikan">Status Kepemilikan</label>
                  <select class="form-control" name="id_status_kepemilikan" value="">
                     <option value="" selected disabled></option>
                  @foreach($Kepemilikan AS $Kepemilikan =>$kep )
                    <option value="{{ $Kepemilikan }}">{{ $kep }}</option>
                  @endforeach
                </select>


                  <label for="jenis_galian">jenis galian</label>
                  <input type="text" class="form-control" name="jenis_galian" id="jenis_galian" placeholder="masukan data" value="{{$data->jenis_galian}}">

                   <label for="deposit_produksi">Deposit Produksi</label>
                  <input type="text" class="form-control" name="deposit_produksi" id="deposit_produksi" placeholder="masukan data" value="{{$data->deposit_produksi}}">

                

                  
                </div>
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
</div>


@endsection