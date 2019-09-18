@extends('layouts.dashboard')

@section('content')



<div class="content-header">
      <h1>
      Kelembagaan
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
              <h3 class="box-title">Lihat Data Kelembagaan</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('kelembagaan.simpan')}}">
              {{ csrf_field() }}



              <div class="box-body">
                <div class="form-group">
               <label for="id_jumlah_lembaga">Lembaga Politik</label>
                  <select class="form-control" name="id_jumlah_lembaga">
                    <option value="" selected  ></option>
                  @foreach($JumlahLembaga AS $politik =>$pol )
                    <option value="{{ $pol->id_jumlah_lembaga }}">{{ $pol->id_jumlah_lembaga }}</option>
                  @endforeach
                </select>

           
               <label for="id_keamanan">Lembaga Keamanan</label>
                  <select class="form-control" name="id_keamanan">
                    <option value="" selected disabled></option>
                  @foreach($keamanan AS $keamanan =>$kel )
                    <option value="{{ $kel->id_keamanan }}">{{ $kel->id_keamanan }}</option>
                  @endforeach
                </select>

              
               <label for="id_pendidikan">Lembaga Pendidikan</label>
                  <select class="form-control" name="id_pendidikan">
                    <option value="" selected ></option>
                  @foreach($Lempendidikan AS $pendidikan =>$pen )
                    <option value="{{ $pen->id_pendidikan }}">{{ $pen->id_pendidikan }}</option>
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