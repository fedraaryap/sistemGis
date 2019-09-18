@extends('layouts.dashboard')

@section('content')
<?php
$SarprasPemerintahan = [1 =>'PRASARANA DAN SARANA PEMERINTAHAN',
2 =>'PRASARANA DAN SARANA PEMERINTAHAN DESA/KELURAHAN',
3 =>'Gedung Kantor',
4 =>'Kondisi',
5 =>'Jumlah Ruang Kerja',
6 =>'Balai Desa/ Kelurahan/ Sejenisnya',
7 =>'Listrik',
8 =>'Air Bersih',
9 =>'Telepon',
10  =>'Rumah Dinas Kepala Desa/ Lurah',
11  =>'Rumah Dinas Perangkat Desa/ Kelurahan',
12  =>'Inventaris dan Alat Tulis Kantor',
13  =>'Jumlah Mesin Tik',
14  =>'Jumlah Meja',
15  =>'Jumlah Kursi',
16  =>'Jumlah Almari Arsip',
17  =>'Komputer',
18 =>' Mesin Fax',
19  =>'Kendaraan Dinas',
20  =>'Administrasi Pemerintahan Desa/Kelurahan',
21 =>' Buku Data Peraturan Desa',
22 =>' Buku Keputusan Kepala Desa/Lurah',
23 =>' Buku Administrasi Kependudukan',
24 =>' Buku Data Inventaris',
25 =>' Buku Data Aparat',
26 =>' Buku Data Tanah Milik Desa/Tanah Kas Desa/Milik Kelurahan',
27 =>' Buku Administrasi Pajak dan Retribusi',
28 =>' Buku Data Tanah ',
29 =>' Buku Laporan Pengaduan Masyarakat',
30 =>' Buku Agenda Ekspedisi',
31 =>' Buku Profil Desa/Kelurahan',
32 =>' Buku Data Induk Penduduk',
33 =>' Buku Buku Data Mutasi Penduduk',
34 =>' Buku Rehabilitasi Jumlah Penduduk Akhir Bulan',
35 =>' Buku Rekapitulasi Pelayanan Penduduk',
36 =>' Buku Data Penduduk Sementara',
37 =>' Buku Anggaran Penerimaan',
38 =>' Buku Anggaran Pengeluaran Pegawai dan Pembangunan',
39=>'  Buku Kas Umum',
40=>'  Buku Kas Pembantu Pengeluaran dan Pembangunan',
41 =>' Buku data Lembaga Kemasyarakatan',
42 =>' PRASARANA DAN SARANA BADAN PEMASYARAKATAN DESA/BPD',
43=>'  Gedung Kantor',
44 =>' Ruangan Kerja',
45 =>' Balai BPD',
46 =>' Kondisi',
47 =>' Listrik',
48 =>' Air Bersih',
49=>'  Telepon',
50 =>' Inventaris dan Alat Tulis Kantor',
51=>'  Jumlah Mesin Tik',
52=>'  Jumlah Meja',
53 =>' Jumlah Kursi',
54 =>' Jumlah Almari Arsip',
55 =>' Komputer',
56 =>' Mesin Fax',
57 =>' Administrasi BPD',
58=>'  Buku Administrasi Keanggotaan BPD',
59 =>' Buku Administrasi Kegiatan BPD',
60 =>' Buku Kegiatan BPD',
61 =>' Buku Himpunan Panduan Desa Yang Ditetapkan BPD dan Kepala Desa',
62 =>' PRASARANA DAN SARANA DUSUN',
63 =>' Gedung Kantor atau Balai Pengobatan',
64=>'  Alat Tulis Kantor',
65 =>' Barang Inventaris',
66=>'  Buku Administrasi',
67 =>' Jenis Kegiatan ',
68 =>' Jumlah Pengurus',
69 =>' PRASARANA DAN SARANA LEMBAGA KEMASYARAKATAN DESA/KELURAHAN',
70 =>' Gedung Kantor Lembaga Kemsyarakatan Desa dan Kelurahan/LKD/LK',
71 =>' Peralatan Kantor: Komputer, Fax',
72 =>' Mesin Tik',
73 =>' Kardek',
74 =>' Buku Administrasi Lembaga Kemsyarakatan',
75 =>' Jumlah Meja dan Kursi',
76 =>' LKMD/LPN atau Sebutan Lain',
77 =>' Memiliki Kantor Sendiri',
78 =>' Peralatan Kantor: Komputer, Fax',
79 =>' Mesin Tik',
80 =>' Kardek',
81 =>' Buku Administrasi Lembaga Kemsyarakatan',
82 =>' Jumlah Meja dan Kursi',
83 =>' Buku Administrasi',
84 =>' Jumlah Kegiatan',
85 =>' PKK',
86 =>' Gedung/Kantor',
87 =>' Peralatan Kantor/ATK/Invemtaris',
88 =>' Kepengurusan',
89 =>' Buku Administrasi PKK',
90 =>' Kegiatan ',
91 =>' Jumlah Kegiatan',
92 =>' Karang Taruna',
93 =>' Kepengurusan',
94 =>' Buku Administrasi',
95  =>'Jumlah Kegiatan',
96 =>' RT',
97 =>' Kepengurusan ',
98 =>' Buku Administrasi',
99 =>' Jumlah Kegiatan',
100=>' RW',
101 =>'Kepengurusan ',
102 =>'Buku Administrasi',
103 =>'Jumlah Kegiatan',
104 =>'Lembaga Adat',
105 =>'Memiliki Kantor/Gedung/Menumpang',
106 =>'Kepengurusan',
107 =>'Buku Administrasi',
108 =>'Jumlah Kegiatan',
109 =>'Bumdes',
110 =>'Memiliki Kantor/Gedung/Menumpang',
111 =>'Kepengurusan',
112=>' Buku Administrasi',
113 =>'Jumlah Kegiatan',
114=>' Forum Komunikasi Kader Pemberdayaan Masyarakat',
115 =>'Memiliki Kantor/Gedung/Menumpang',
116=>' Kepengurusan',
117 =>'Buku Administrasi',
118 =>'Jumlah Kegiatan',
119 =>'Kantor/Gedung Organisasi Sosial Kemasyarakatan Lainnya',
120=>' Kantor/Gedung Organisasi Profesi yang Ada',
121 =>'PRASARANA DAN SARANA KESEHATAN',
122 =>'Prasarana Kesehatan',
123 =>'Rumah Sakit Umum',
124 =>'Puskesmas',
125 =>'Puskesmas Pembantu',
126=>' Poliklinik/Balai Pengobatan',
127=>' Apotik',
128 =>'Posyandu',
129 =>'Toko Obat',
130=>' Balai Pengobatan Masyarakat Yayasan/Swasta',
131 =>'Gudang Menyimpan Obat',
132 =>'Jumlah Rumah/Kantor Praktek Dokter',
133=>' Rumah bersalin',
134 =>'Balai Kesehatan Ibu dan Anak',
135=>' Rumah Sakit Mata',
136=>' sarana Kesehatan',
137 =>'Jumlah Dokter Umum',
138 =>'Jumlah Dokter Spesialis',
139 =>'Jumlah Dokter Spesialis Lainnya',
140=>' Jumlah Paramedis',
141 =>'Jumlah Dukun Beersalin Terlatih',
142 =>'Bidan',
143 =>'Perawat',
144=>' Dukun Pengobatan Alternatif',
145=>' Jumlah Dokter Praktek',
146 =>'Laboratorium Kesehatan'];

$SatuanPrasarana = [1 =>'KM',
2 =>' Lokasi',
3 =>'Unit',
4 =>'Orang',
5 =>'Buah ',
6 =>'KK'
];

$A_memiliki=[1=>'ya',0=>'tidak'];
$Status =[1=>'ada',0=>'tidak'];

$desa = [1=>'Totoharjo',2=>'Hata',3=>'bakauhani',4=>'kelawi',5=>'semanak'];

?>



<div class="content-header">
      <h1>
      Status Status Sarpras Pemerintahan
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
              <h3 class="box-title">Input/Ubah Status Sarpras Pemerintahan</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('sarpem.simpan')}}">
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
                
                 <label for="id_sarpas_pemeritahan">Jenis Sarana Pemerintah</label>
                  <select class="form-control" name="id_sarpas_pemeritahan">
                    <option value="" selected disabled></option>
                  @foreach($SarprasPemerintahan AS $SarprasPemerintahan =>$trans )
                    <option value="{{ $SarprasPemerintahan }}">{{ $trans }}</option>
                  @endforeach
                </select>

                 <label for="id_satuan_prasarana">Satuan Prasarana</label>
                  <select class="form-control" name="id_satuan_prasarana">
                    <option value="" selected disabled></option>
                  @foreach($SatuanPrasarana AS $SatuanPrasarana =>$keb )
                    <option value="{{ $SatuanPrasarana }}">{{ $keb }}</option>
                  @endforeach
                </select>
                  <label for="jumlah">Jumlah</label>
                  <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="masukan data">
                
                    <label for="a_memiliki_status">Apakah Memiliki Status</label>
                  <select class="form-control" name="a_memiliki_status">
                    <option value="" selected disabled></option>
                  @foreach($A_memiliki AS $A_memiliki =>$keb )
                    <option value="{{ $A_memiliki }}">{{ $keb }}</option>
                  @endforeach
                </select>


                    <label for="status_sarpras">Status Sarpras</label>
                  <select class="form-control" name="status_sarpras">
                    <option value="" selected disabled></option>
                  @foreach($Status AS $Status =>$keb )
                    <option value="{{ $Status }}">{{ $keb }}</option>
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