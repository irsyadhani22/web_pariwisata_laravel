@extends('layouts.app')

@section('content')
<!-- header -->
<style type="text/css">
        .pagination li{
            float: left;
            list-style-type: none;
            margin:5px;
        }
    </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <nav>
                        <a href="/home" class="btn btn-dark btn-sm">ADMIN</a>
                        <a href="/backend/daerah" class="btn btn-dark btn-sm">DAERAH</a>
                        <a href="/backend/kategori" class="btn btn-dark btn-sm">KATEGORI</a>
                        <a href="/backend/pengguna" class="btn btn-dark btn-sm">PENGGUNA</a>
                        <a href="/backend/detail_pariwisata" class="btn btn-dark btn-sm">DETAIL PARIWISATA</a>
                        <a href="/backend/foto_pariwisata" class="btn btn-dark btn-sm">FOTO PARIWISATA</a>
                        <a href="/backend/jadwal_buka" class="btn btn-dark btn-sm">JADWAL BUKA</a>
                        <a href="/backend/pariwisata" class="btn btn-dark btn-sm">PARIWISATA</a>
                        <a href="/backend/review" class="btn btn-dark btn-sm">REVIEW</a>
                    </nav>

                    <hr>
<!-- header -->
					<h3>Data Daerah</h3>

                    <div class="form-group">
                        
                    </div>

                    <form action="/backend/daerah/cari" method="GET" class="form-inline">
                        <input type="text" class="form-control" name="cari" placeholder="Cari Daerah .." value="{{ old('cari') }}">
                        <input type="submit" class="btn btn-light ml-3" value="CARI">
                    </form>
                    <br>

					<a href="/backend/daerah/tambah" class="btn btn-success btn-sm">+ Tambah Data</a>

					<br>
                    <br>

					<table class="table table-bordered">
						<tr>
							<th>ID</th>
							<th>Nama daerah</th>
							<th>Opsi</th>
						</tr>
						@foreach($daerah as $d)
						<tr>
							<td>{{$d->id_daerah}}</td>
							<td>{{$d->nama_daerah}}</td>
							<td>
								<a href="/backend/daerah/edit/{{$d->id_daerah}}" class="btn btn-warning btn-sm">Edit</a>
								
								<a href="/backend/daerah/hapus/{{$d->id_daerah}}" class="btn btn-danger btn-sm">Hapus</a>
							</td>
						</tr>
						@endforeach
					</table>
                    Halaman : {{$daerah->currentPage()}} <br>
                    Jumlah Data : {{$daerah->total()}} <br>
                    Data Per Halaman : {{$daerah->perPage()}} <br>

                    {{$daerah->links()}}
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