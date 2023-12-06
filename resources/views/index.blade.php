@extends('master2')
@section('judulhalaman','Data Pegawai')


@section('konten')
	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>

	<br/>

	<br/>
	<br/>
    <div class="row">
        <div class="col">
            <p>Cari Data Pegawai :</p>
        </div>
        <div class="col">
            <form action="/pegawai/cari" method="GET" class="float-right">
                <div class="row">
                    <div class="col-auto">
                        <input class="form form-control" type="text" name="cari" placeholder="Cari Nama Pegawai .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
                    </div>
                    <div class="col-auto">
                        <input type="submit" value="CARI" class="btn btn-info">
                    </div>
                </div>
            </form>
        </div>
    </div>
	<table class="table table-striped table-hover">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
                |
                <a href="/pegawai/view/{{ $p->pegawai_id }}" class="btn btn-primary">View</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $pegawai->links() }}
@endsection


