@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
    <form action="/pegawai/" method="get" class="form-horizontal">
        {{ csrf_field() }}
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" required="required" disabled class="form form-control" name="nama" value="{{ $p->pegawai_nama }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" required="required" disabled class="form form-control" name="jabatan" value="{{ $p->pegawai_jabatan }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                    <div class="col-sm-10">
                        <input type="number" class="form form-control" disabled required="required" name="umur" value="{{ $p->pegawai_umur }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea required="required" class="form form-control" disabled name="alamat">{{ $p->pegawai_alamat }}</textarea>
                    </div>
                </div>
                <input type="Submit" value="OK" class="col-sm 2 btn btn-success">
            </div>
        </div>
    </form>
	@endforeach

@endsection
