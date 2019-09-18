@extends('layouts.dashboard')

@section('content')
<?php


$a_kondisi = [0=>'tidak',1=>'iya'];


$a_dampak = [0=>'tidak',1=>'iya'];

$Status = [0=>'Buruk',1=>'Baik'];

$desa = [1=>'Totoharjo',2=>'Hata',3=>'bakauhani',4=>'kelawi',5=>'semanak'];

?>



<div class="content-header">
      <h1>
      Hutan
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
              <h3 class="box-title">Input/Ubah Hutan</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('hutan.simpan')}}">
              {{ csrf_field() }}



              <div class="box-body">
                <div class="form-group">
                   <label for="id_desa">Desa</label>
                  <select class="form-control" name="id_desa">
                    <option value="" selected disabled></option>
                  @foreach($desa AS $desa =>$des )
                    <option value="{{ $desa }}">{{ $des }}</option>
                  @endforeach
                </select>
               <label for="id_Kondisi">Kondisi Hutan</label>
                  <select class="form-control" name="id_kondisi">
                    <option value="" selected  ></option>
                  @foreach($kondisiHutan AS $Kondisi =>$kon )
                    <option value="{{ $kon->id_kondisi }}">{{ $kon->jenis_hutan }}</option>
                  @endforeach
                </select>

           
               <label for="a_kondisi">Kondisi</label>
                  <select class="form-control" name="a_kondisi">
                    <option value="" selected disabled></option>
                  @foreach($a_kondisi AS $a_kondisi =>$akon )
                    <option value="{{ $a_kondisi }}">{{ $akon }}</option>
                  @endforeach
                </select>

              
               <label for="id_dampak">Dampak Pengolahan Hutan</label>
                  <select class="form-control" name="id_dampak">
                    <option value="" selected ></option>
                  @foreach($DampakHutan AS $Dampak =>$dam )
                    <option value="{{ $Dampak }}">{{ $dam }}</option>
                  @endforeach
                </select>

           
               <label for="a_dampak_pengolahan">Dampak</label>
                  <select class="form-control" name="a_dampak_pengolahan">
                    <option value="" selected disabled></option>
                  @foreach($a_dampak AS $a_dampak =>$adam )
                    <option value="{{ $a_dampak }}">{{ $adam }}</option>
                  @endforeach
                </select>

                      <label for="status">Status</label>
                  <select class="form-control" name="status">
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
                 </div>
        </div>
      </div>

       
  <!-- /.content -->
</section>
</div>


@endsection