@extends('layouts.dashboard')
   
@section('content')

     <section class="content-header">
            <ol class="breadcrumb">
        <li><a href="url{{'dashboard'}}"><i class="fa fa-dashboard"></i> home</a></li>
                <li class="active">Here</li>
            </ol>
        </section>
         <!-- Main Section -->
        <section class="main-section">
        <!-- Add Your Content Inside -->
            <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Profil Desa</h1>

            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            </div>
            @endif

                <div class="row">
                <div class="col-xs-12">
        <table id="simple-table" class="table table-striped table-bordered table-hover">
        <thead>
           <a href="" class=" btn btn-sm btn-primary">Tambah Data Desa</a>
            <tr>
                <th class="center"></th>
                <th>Desa</th>
                <th>Kecamatan</th>
                <th>kabupaten</th>
                <th>Perda no</th>
                <th>Perdes no</th>
                <th>Aksi</th>
            </tr>
        </thead>
<tbody>    
        <tr>
            <td class="center">
            </label>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
            <div class="hidden-sm hidden-xs btn-group">
            <button class="btn btn-xs btn-info" onclick="window.location.href=">
            <i class="ace-icon fa fa-pencil bigger-120"></i>
            </button>
            <button class="btn btn-xs btn-danger" onclick="window.location.href=">
            <i class="ace-icon fa fa-trash-o bigger-120"></i>
            </button>
            </div>
            </td>
        </tr>
    
</tbody>
    </table>

</Selection>
</div>
</div><!-- /.span -->
</div><!-- /.row -->

@endsection


