@extends('layouts.dashboard')

@section('content')



<div class="content-header">
      <h1>
      Potensi Peternakan
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
              <h3 class="box-title">Lihat Data Potensi Peternakan</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('perternakan.simpan')}}">
              {{ csrf_field() }}



              <div class="box-body">
                <div class="form-group">
               <label for="id_pemasaran_sda">Mekanisme Pemasaran</label>
                  <select class="form-control" name="id_pemasaran_sda">
                    <option value="" selected  ></option>
                  @foreach($MekanismePemasaranSda AS $mekanisme =>$mks )
                    <option value="{{ $mks->id_pemasaran_sda }}">{{ $mks->id_pemasaran_sda }}</option>
                  @endforeach
                </select>

           
               <label for="id_jumlah_budidaya">Jumlah Budidaya Ikan</label>
                  <select class="form-control" name="id_jumlah_budidaya">
                    <option value="" selected disabled></option>
                  @foreach($JumlahBudidayaIkan AS $ikan =>$ikn )
                    <option value="{{ $ikn->id_jumlah_budidaya }}">{{ $ikn->id_jumlah_budidaya }}</option>
                  @endforeach
                </select>

                 <label for="id_populasi">Populasi Ternak</label>
                  <select class="form-control" name="id_populasi">
                    <option value="" selected disabled></option>
                  @foreach($PopulasiTernak AS $ternak =>$ter )
                    <option value="{{ $ter->id_populasi }}">{{ $ter->id_populasi }}</option>
                  @endforeach
                </select>
           
                <label for="id_pakan_ternak">Pakan Ternak</label>
                  <select class="form-control" name="id_pakan_ternak">
                    <option value="" selected disabled></option>
                  @foreach($PakanTernak AS $pakan =>$pkn )
                    <option value="{{ $pkn->id_pakan_ternak }}">{{ $pkn->id_pakan_ternak }}</option>
                  @endforeach
                </select>

                  <label for="id_jumlah_produksi">Jumlah Produksi Ternak</label>
                  <select class="form-control" name="id_jumlah_produksi">
                    <option value="" selected disabled></option>
                  @foreach($JumlahProduksi AS $produk =>$pro )
                    <option value="{{ $pro->id_jumlah_produksi }}">{{ $pro->id_jumlah_produksi }}</option>
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