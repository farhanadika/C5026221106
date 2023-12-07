@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')
    <h3>Keranjang Belanja</h3>

    <a class="btn btn-danger mb-md-3" href="/keranjangbelanja"> Kembali</a>
    <div class="container">
        <form action="/keranjangbelanja/store" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="kodebarang" class="control-label col-sm-1">Kode Barang</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="kodebarang" name="kodebarang">
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-form-label col-sm-1">Jumlah</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="jumlah" name="jumlah">
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-form-label col-sm-1">Harga</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="harga" name="harga">
                </div>
            </div>
    </div>
    <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>

@endsection
