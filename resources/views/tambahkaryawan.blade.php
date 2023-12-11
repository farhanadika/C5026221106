@extends('master2')
@section('judulhalaman', 'Data Karyawan')

@section('konten')
<h3>Data Karyawan</h3>

<a href="/karyawan" class="btn btn-primary"> Kembali</a>

<br />
<br />

<form action="/karyawan/store" method="post" class="form-horizontal">
    {{ csrf_field() }}
    <div class="form-group row">
        <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
        <div class="col-sm-8">
            <input type="number" class="form-control" id="kodepegawai" name="kodepegawai">
        </div>
    </div>
    <div class="form-group row">
        <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="namalengkap" name="namalengkap">
        </div>
    </div>
    <div class="form-group row">
        <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="divisi" name="divisi">
        </div>
    </div>
    <div class="form-group row">
        <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
        <div class="col-sm-8">
            <textarea type="text" class="form-control" id="departemen" name="departemen"></textarea>
        </div>
    </div>
    <input type="submit" value="Simpan Data" class="btn btn-success">
</form>

@endsection
