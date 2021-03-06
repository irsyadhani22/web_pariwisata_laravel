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
                    <br>
                    <!-- header -->
					<h3>Edit Data Admin</h3>
					<br>

					@foreach($admin as $adm)
						<form action="/backend/admin/update" method="post">
							{{csrf_field()}}
							<input type="hidden" name="id" value="{{$adm->id_admin}}">
							<br>
							Nama :
							<input type="text" class="form-control" name="nama" value="{{$adm->administrator}}" required="required">
							<br>
							Password :
							<input type="text" class="form-control" name="password" value="{{$adm->password}}" required="required">
							<br>
							Foto :
							<input type="text" class="form-control" name="foto" value="{{$adm->foto_admin}}" required="required">
							<br>
							<a href="/backend/admin" class="btn btn-secondary btn-sm">Back</a>
							<input type="submit" class="btn btn-danger btn-sm" value="Simpan Data">
						</form>
					@endforeach
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