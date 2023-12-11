@extends('master2')
@section('judulhalaman','Data Karyawan')


@section('konten')
	<h3>Data Karyawan</h3>

	<a href="/karyawan/tambah" class="btn btn-primary"> + Tambah Karyawan Baru</a>

	<br/>

	<br/>
	<br/>
    <div class="row">
        <div class="col">
            <p>Cari Data Karyawan :</p>
        </div>
        <div class="col">
            <form action="/karyawan/cari" method="GET" class="float-right">
                <div class="row">
                    <div class="col-auto">
                        <input class="form form-control" type="text" name="cari" placeholder="Cari Nama Karyawan .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
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
			<th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
			<th>Opsi</th>
		</tr>
		@foreach($karyawan as $k)
		<tr>
			<td>{{ $k->karyawan_nama }}</td>
			<td>{{ $k->karyawan_jabatan }}</td>
			<td>{{ $k->karyawan_umur }}</td>
			<td>{{ $k->karyawan_alamat }}</td>
			<td>
				<a href="/karyawan/view/{{ $k->karyawan_id }}" class="btn btn-primary">View</a>
				|
				<a href="/karyawan/hapus/{{ $k->karyawan_id }}" class="btn btn-danger">Hapus</a>
                |
                <a href="/karyawan/edit/{{ $k->karyawan_id }}" class="btn btn-warning">Edit</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $karyawan->links() }}
@endsection


