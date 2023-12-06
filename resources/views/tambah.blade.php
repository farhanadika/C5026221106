@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
<h3>Data Pegawai</h3>

<a href="/pegawai" class="btn btn-primary"> Kembali</a>

<br />
<br />

<form action="/pegawai/store" method="post" class="form-horizontal">
    {{ csrf_field() }}
    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
    </div>
    <div class="form-group row">
        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="jabatan" name="jabatan">
        </div>
    </div>
    <div class="form-group row">
        <label for="umur" class="col-sm-2 col-form-label">Umur</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="umur" name="umur">
        </div>
    </div>
    <div class="form-group row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-8">
            <textarea type="text" class="form-control" id="alamat" name="alamat"></textarea>
        </div>
    </div>
    <input type="submit" value="Simpan Data" class="btn btn-success">
</form>

@endsection
