@extends('layouts.dashboard')

@section('content')
<?php
$Kondisi = [1=>'Hutan Pelindung',2=>'Hutan Lindung',3=>'Hutan Suaka Margasatwa',4=>'Hutan Suaka Alama',5=>'Hutan Konservasi'];

$a_kondisi = [0=>'tidak',1=>'iya'];

$Dampak = [1=>'Pencemaran',2=>'Pencemaran Air',3=>' Longsor / Erosi',4=>' Bising',5=>'  Kerusakan Biola / plasma Nutfah Hutan',6=>'Kemusnahan Flora, Faunadan Satwa Langka',7=>'Hilangnya Sumber Mata Air',8=>'Kebakaran Hutan',9=>'Terjadinya Kekeringan / Sulit Air',10=>'Berubahnya Fungsi Hutan',11=>'Terjadinya Lahan Kritis',12=>'  Hilangnya Daerah Tangkapan air',13=>'Musnah Habitan Binatang Hutan'];

$a_dampak = [0=>'tidak',1=>'iya'];

$Status = [0=>'Buruk',1=>'Baik'];

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
               <label for="id_kondisi">Kondisi Hutan</label>
                  <select class="form-control" name="id_kondisi">
                    <option value="" selected  ></option>
                  @foreach($Kondisi AS $Kondisi =>$kon )
                    <option value="{{ $Kondisi }}">{{ $kon }}</option>
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
                  @foreach($Dampak AS $Dampak =>$dam )
                    <option value="{{ $Dampak }}">{{ $dam }}</option>
                  @endforeach
                </select>

           
               <label for="a_dampak_pengolah">Dampak</label>
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