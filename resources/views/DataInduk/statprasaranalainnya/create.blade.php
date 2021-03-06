@extends('layouts.dashboard')

@section('content')
<?php
$ApakahAda = [0=>'tidak',1=>'ada'];
$Status = [1=>'ada',0=>'tidak ada'
];

$desa = [1=>'Totoharjo',2=>'Hata',3=>'bakauhani',4=>'kelawi',5=>'semanak'];

?>



<div class="content-header">
      <h1>
      Status Prasarana Lainnya
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
              <h3 class="box-title">Input/Ubah Status Prasarana Lainnya</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('statpraslainnya.simpan')}}">
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
                  
                 <label for="id_prasarana_sarana">Macam Prasarana</label>
                  <select class="form-control" name="id_prasarana_sarana">
                    <option value="" selected disabled></option>
                  @foreach($Prasarana AS $prasaranaSarana =>$sar )
                    <option value="{{ $sar->id_prasarana_sarana }}">{{ $sar->macam_prasaranan_sarana }}</option>
                  @endforeach
                </select>

                   <label for="id_satuan_prasarana">Satuan Prasarana</label>
                  <select class="form-control" name="id_satuan_prasarana">
                    <option value="" selected disabled></option>
                  @foreach($SatuanPrasarana AS $patuanPrasarana =>$sat )
                    <option value="{{ $sat->id_satuan_prasarana }}">{{ $sat->satuan_prasarana }}</option>
                  @endforeach
                </select>
                 
                   <label for="jumlah">Jumlah</label>
                  <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="masukan data">
                  <label for="luas">Luas</label>
                  <input type="number" class="form-control" name="luas" id="luas" placeholder="masukan data">
                  
                  <label for="a_ada_status">Apakah Ada Status</label>
                  <select class="form-control" name="a_ada_status">
                    <option value="" selected disabled></option>
                  @foreach($ApakahAda AS $ApakahAda =>$ada )
                    <option value="{{ $ApakahAda }}">{{ $ada }}</option>
                  @endforeach
                </select>

                   <label for="status_prasarana_sarana">Status</label>
                  <select class="form-control" name="status_prasarana_sarana">
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