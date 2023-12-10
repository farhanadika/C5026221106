@extends('master2')
@section('judulhalaman', 'Edit Data Ikan')

@section('konten')

    <br/>
	<h3>Edit Data Ikan</h3>

	<a href="/ikan" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($ikan as $l)
	<form action="/ikan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $l->kodeikan }}"> <br/>
        <div class="form-group row">
            <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="inputnama" value="{{ $l->namaikan }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputjumlah" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-10">
                <input type="number" name="jumlah" class="form-control" id="inputjumlah" value="{{ $l->jumlahikan }}">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-info">
	</form>
	@endforeach

@endsection
