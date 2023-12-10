@extends('master2')
@section('judulhalaman', 'Data Ikan')

@section('konten')
    <br/>
	<h3>Data Ikan</h3>

	<a href="/ikan/tambahikan" class="btn btn-primary"> + Tambah Ikan Baru</a>

	<br/>
    <p>Cari Data Ikan :</p>
	<form action="/ikan/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Merk Ikan .."
        value="{{ old("cari", isset($cari) ? $cari : '') }}">
        <br/>
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped table-hover" style="width: 100%">
		<tr>
			<th style="width: 15%">Kode Ikan</th>
			<th style="width: 30%">Nama Ikan</th>
			<th style="width: 17%">Jumlah Ikan</th>
			<th style="width: 17%">Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($ikan as $l)
		<tr>
			<td>{{ $l->kodeikan }}</td>
			<td>{{ $l->namaikan }}</td>
			<td>{{ $l->jumlahikan }}</td>
			<td>
                @if ($l->tersedia == 0) Tidak Tersedia
                @elseif ($l->tersedia == 1) Tersedia
                @endif
            </td>
			<td>
                <a href="/ikan/view/{{ $l->kodeikan }}" class="btn btn-info">View</a>
                |
				<a href="/ikan/edit/{{ $l->kodeikan }}" class="btn btn-warning">Edit</a>
				|
				<a href="/ikan/hapus/{{ $l->kodeikan }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


@endsection
