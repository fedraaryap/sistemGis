@extends('layouts.dashboard')

@section('content')



<div class="content-header">
      <h1>
      Potensi Lembaga Ekonomi
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
              <h3 class="box-title">Lihat Data Potensi Lembaga Ekonomi</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('ekonomi.simpan')}}">
              {{ csrf_field() }}



              <div class="box-body">
                <div class="form-group">
               <label for="id_jumlah_orang">Lembaga Ekonomi</label>
                  <select class="form-control" name="id_jumlah_orang">
                    <option value="" selected  ></option>
                  @foreach($JumlahOrang AS $orang =>$org )
                    <option value="{{ $org->id_jumlah_orang }}">{{ $org->id_jumlah_orang }}</option>
                  @endforeach
                </select>

           
               <label for="id_stat_jasa_usaha">Usaha Jasa Dan Perdagangan</label>
                  <select class="form-control" name="id_stat_jasa_usaha">
                    <option value="" selected disabled></option>
                  @foreach($StatusJasaUsaha AS $usaha =>$usa )
                    <option value="{{ $usa->id_stat_jasa_usaha }}">{{ $usa->id_stat_jasa_usaha }}</option>
                  @endforeach
                </select>

                 <label for="id_pengangkutan">Usaha Jasa Pengangkutan</label>
                  <select class="form-control" name="id_pengangkutan">
                    <option value="" selected disabled></option>
                  @foreach($JumlahAngkutan AS $angkutan =>$angkut )
                    <option value="{{ $angkut->id_pengangkutan }}">{{ $angkut->id_pengangkutan }}</option>
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