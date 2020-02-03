
@extends('layouts.app')

@section('content')
<!-- header -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <nav>
                        <a href="/home">ADMIN</a>
                        |
                        <a href="/backend/daerah">DAERAH</a>
                        |
                        <a href="/backend/kategori">KATEGORI</a>
                        |
                        <a href="/backend/pengguna">PENGGUNA</a>
                        |
                        <a href="/backend/detail_pariwisata">DETAIL PARIWISATA</a>
                        |
                        <a href="/backend/foto_pariwisata">FOTO PARIWISATA</a>
                        |
                        <a href="/backend/jadwal_buka">JADWAL BUKA</a>
                        |
                        <a href="/backend/pariwisata">PARIWISATA</a>
                        |
                        <a href="/backend/review">REVIEW</a>
                    </nav>

                    <hr>
                    <br>
<!-- header -->
					<h3>Data Pariwisata</h3>

					<a href="/backend/pariwisata/tambah">+ Tambah Data</a>

					<br>

					<table border="1">
						<tr>
							<th>ID Pariwisata</th>
							<th>ID Daerah</th>
							<th>Nama Tempat</th>
							<th>Alamat</th>
							<th>Biaya Masuk</th>
							<th>Deskripsi</th>
							<th>Average Rating</th>
							<th>Opsi</th>
						</tr>
						@foreach($pariwisata as $pws)
						<tr>
							<td>{{$pws->id_pariwisata}}</td>
							<td>{{$pws->id_daerah}}</td>
							<td>{{$pws->nama_tempat}}</td>
							<td>{{$pws->alamat_pariwisata}}</td>
							<td>{{$pws->biaya_masuk}}</td>
							<td>{{$pws->deskripsi_pariwisata}}</td>
							<td>{{$pws->avg_rating}}</td>
							<td>
								<a href="/backend/pariwisata/edit/{{$pws->id_pariwisata}}">Edit</a>
								|
								<a href="/backend/pariwisata/hapus/{{$pws->id_pariwisata}}">Hapus</a>
							</td>
						</tr>
						@endforeach
					</table>
<!-- footer -->
					<br>
                    <hr>
                    <footer><p>&copy; WISATA PELESIR 2020</p></footer>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
@endsection