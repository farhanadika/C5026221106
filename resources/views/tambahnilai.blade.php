@extends('master2')

@section('konten')
    <h2>Database Sistem informasi</h2>
    <h3>Nilai Mahasiswa SI 2022</h3>

    <a href="/nilaikuliah"> Kembali</a>

    <br />
    <br />

    <form action="/nilaikuliah/storenilai" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class = "form-group row">
            <label for = "NRP" class = "col-sm-2 control-label">NRP</label>
            <div class = "col-sm-8 ">
                <input name="NRP" type = "text" class = "form-control" id = "NRP"
                    placeholder = "Masukkan NRP">
            </div>
        </div>
        <div class = "form-group row">
            <label for = "NilaiAngka" class = "col-sm-2 control-label">NilaiAngka</label>
            <div class = "col-sm-8 ">
                <input name="NilaiAngka" type = "text" class = "form-control" id = "NilaiAngka"
                    placeholder = "Masukkan Nilai Angka">
            </div>
        </div>
        <div class = "form-group row">
            <label for = "SKS" class = "col-sm-2 control-label">SKS</label>
            <div class = "col-sm-8 ">
                <input name="SKS" type = "number" class = "form-control" id = "SKS"
                    placeholder = "Masukkan SKS">
            </div>
        </div>
        {{-- Nama <input type="text" name="nama" required="required"> <br/> --}}
		{{-- Jabatan <input type="text" name="jabatan" required="required"> <br/> --}}
		{{-- Umur <input type="number" name="umur" required="required"> <br/> --}}
		{{-- Alamat <textarea name="alamat" required="required"></textarea> <br/> --}}
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endsection
