@extends('layouts.dashboard')

@section('content')
<div class="content-header">
      <h1>
      Produksi
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>

    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input/Ubah Produksi</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('produksi.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="pro_id_produksi">Produksi</label>
                  <select class="form-control" name="pro_id_produksi">
                    <option value="" selected></option>
                  @foreach($produk AS $pro)
                    <option value="{{ $pro->id_produksi }}">{{$pro->nama_produksi}} </option>
                  @endforeach
                  </select>
                  <label for="nama_produksi">Nama Produksi</label>
                  <input type="text" class="form-control" name="nama_produksi" id="nama_produksi" placeholder="masukan data">
                </div>

          
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
</div>
</select>
</div>

</section>

@endsection