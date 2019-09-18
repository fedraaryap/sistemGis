@extends('layouts.dashboard')

@section('content')
<?php
$Status = [1=>'ada',0=>'tidak ada'
];
$desa = [1=>'Totoharjo',2=>'Hata',3=>'bakauhani',4=>'kelawi',5=>'semanak'];
?>



<div class="content-header">
      <h1>
      Mekanisme Pemasaran
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
              <h3 class="box-title">Input/Ubah Mekanisme Pemasaran</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('mekpemsda.update',$data->id_pemasaran_sda)}}">
              {{ csrf_field() }}
              {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                       <label for="id_desa">Desa</label>
                  <select class="form-control" name="id_desa">
                    <option value="" selected disabled></option>
                  @foreach($desa AS $desa =>$des )
                    <option value="{{ $desa }}">{{ $des }}</option>
                  @endforeach
                </select>

                  
                  <label for="jenis_pemasaran_sda">Jenis Pemasaran</label>
                  <input type="text" class="form-control" name="jenis_pemasaran_sda" id="jenis_pemasaran_sda" placeholder="masukan data" value="{{$data->jenis_pemasaran_sda}}">
                   <label for="katagori_pemasaran">Kategori</label>
                  <input type="text" class="form-control" name="katagori_pemasaran" id="katagori_pemasaran" placeholder="masukan data" value="{{$data->katagori_pemasaran}}">

                       <label for="status_pemasaran">Status</label>
                  <select class="form-control" name="status_pemasaran">
                    <option value="" selected disabled></option>
                  @foreach($Status AS $Status =>$stat )
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
        
  <!-- /.content -->
  </div>
  </section>
</div>


@endsection