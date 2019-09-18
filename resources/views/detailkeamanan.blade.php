
<!doctype html>
<html lang="en">

    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
    <head>
    <title>
        Lampung
        </title>
    <link rel="stylesheet" href="../../css/style.css">
        
    </head>
<body>
<div class="header">
       
    <img src="../../img/logo1.png" alt="" width="100" height="100">
         <h3> Sistem Informasi Geografis </h3>



<div class="navbar">
  <a href="#home">Home</a>
  <a href="{{route('petakeamanan')}}">Peta Desa</a>
  
    </div>
  </div> 
</div>
</div>
<body>
    <h1>
      





    </h1>

                <div class="row">
                <div class="col-xs-12">
                  <div align="center"> 
        <table  id="example2" class="table table-striped table-bordered table-hover">
        <thead>
        
            
            <tr>
                <th>No</th>
                <th>Desa</th>
                <th>Jenis Keamanan</th>
                <th>Jumlah Anggota</th>
                <th>Jumlah Poskamling</th>
                <th>Jumlah Kegiatan</th>
                <th>Nama Organisasi Induk</th>
                <th>Status</th>
                
          
               
            </tr>
        </thead>
<tbody>  
  @foreach($data as $nomor=> $dat)

  <tr>
  <td>{{$nomor+1}}</td>
  <td>{{$dat->nama_wil}}</td>
  <td>{{$dat->jenis_keamanan}}</td>
  <td>{{$dat->jumlah_anggota}}</td>
  <td>{{$dat->jumlah_poskamling}}</td>
  <td>{{$dat->jumlah_kegiaatan}}</td>
  <td>{{$dat->nama_organisasi_induk}}</td>
  @if($dat->status == 1)
    <td>Terdaftar</td>
  @elseif($dat->status == 0)
    <td>Tidak Terdaftar</td>
  @endif()
  

 
  </td> 
</tr>
  @endforeach
</tbody>
</table>

</section>
</section>

</div>


