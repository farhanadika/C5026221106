@extends('master2')
@section('judulhalaman', 'Tambah Ikan')

@section('konten')

    <br/>
	<h3>Tambah Ikan</h3>

	<a href="/ikan" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/ikan/store" method="post">
		{{ csrf_field() }}
		<div class="form-group row">
            <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="inputnama">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputjumlah" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-10">
                <input type="number" name="jumlah" class="form-control" id="inputjumlah">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-info">
	</form>

@endsection
