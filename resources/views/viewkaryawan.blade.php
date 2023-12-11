@extends('master2')
@section('judulhalaman', 'Data Karyawan')

@section('konten')

	<h3>Edit Karyawan</h3>

	<a href="/karyawan" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($karyawan as $k)
    <form action="/karyawan/" method="get" class="form-horizontal">
        {{ csrf_field() }}
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                <input type="hidden" name="id" value="{{ $k->karyawan_id }}">
                <div class="form-group row">
                    <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
                    <div class="col-sm-10">
                        <input type="text" required="required" disabled class="form form-control" name="kodepegawai" value="{{ $k->karyawan_kodepegawai }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" required="required" disabled class="form form-control" name="namalengkap" value="{{ $k->karyawan_namalengkap }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                    <div class="col-sm-10">
                        <input type="number" class="form form-control" disabled required="required" name="divisi" value="{{ $k->karyawan_divisi }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
                    <div class="col-sm-10">
                        <textarea required="required" class="form form-control" disabled name="departemen">{{ $k->karyawan_departemen }}</textarea>
                    </div>
                </div>
                <input type="Submit" value="OK" class="col-sm 2 btn btn-success">
            </div>
        </div>
    </form>
	@endforeach

@endsection
