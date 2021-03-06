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
					<h3>Edit Data Foto Pariwisata</h3>
					<br>

					@foreach($foto_pariwisata as $fp)
						<form action="/backend/foto_pariwisata/update" method="post" enctype="multipart/form-data">
							{{csrf_field()}}
							<input type="hidden" name="id" value="{{$fp->id_foto}}">
							<br>
							ID Pariwisata :
							<select class="form-control form-control-sm" name="id_pariwisata">
								<option name="id_pariwisata" value="{{$fp->id_pariwisata}}">{{$fp->nama_tempat}}</option>
								@foreach($pariwisata as $p)
								<option name="id_pariwisata" value="{{$p->id_pariwisata}}">{{$p->nama_tempat}}</option>
								@endforeach
							</select>
							<br>
							Foto :
							<input type="file" name="foto" value="{{$fp->foto_pariwisata}}" required="required">
							<br>
							<br>
							<a href="/backend/foto_pariwisata" class="btn btn-secondary btn-sm">Back</a>
							
							<input type="submit" class="btn btn-primary btn-sm" value="Simpan Data">
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