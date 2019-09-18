@extends('layouts.dashboard')

@section('content')
<?php
$JenisKelamin = [0=>'Perempuan',1=>'Laki-Laki'];
$desa = [1=>'Totoharjo',2=>'Hata',3=>'bakauhani',4=>'kelawi',5=>'semanak'];
?>

<div class="content-header">
      <h1>
      Jumlah SDM Pendidikan
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
              <h3 class="box-title">Input/Ubah Jumlah SDM Pendidikan</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('jumsdmpend.update',$data->id_sdm_pendidikan)}}">
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
                
               <label for="id_status_pendidikan">Tingkat Pendidikan</label>
                  <select class="form-control" name="id_status_pendidikan">
                    <option value="" selected disabled></option>
                  @foreach($StatusPendidikan AS $statusPendidikan =>$pen )
                    <option value="{{ $pen->id_status_pendidikan }}">{{ $pen->tingkat_pendidikan }}</option>
                  @endforeach
                </select>

                   <label for="jk_pendidikan">Jenis Kelamin</label>
                  <select class="form-control" name="jk_pendidikan">
                    <option value="" selected disabled></option>
                  @foreach($JenisKelamin AS $JenisKelamin =>$jk )
                    <option value="{{ $JenisKelamin }}">{{ $jk }}</option>
                  @endforeach
                </select>

                  <label for="jumlah_sdm_pendidikan">Jumlah SDM Pendidikan</label>
                  <input type="number" class="form-control" name="jumlah_sdm_pendidikan" id="jumlah_sdm_pendidikan" placeholder="masukan data" value="{{$data->jumlah_sdm_pendidikan}}">

                 
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