@extends('master2')
@section('judulhalaman', 'Informasi Ikan')

@section('konten')

    <br/>
	<h3>Informasi Ikan</h3>

	<br/>
	<br/>

	@foreach($ikan as $l)
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-5">

        </div>
        <div class="col-sm-7">
            <br/>
                <div class="row">
                    <div class="col-sm-2">Nama</div>
                    <div class="col-sm-10">: {{ $l->namaikan }}</div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-sm-2">Jumlah</div>
                    <div class="col-sm-10">: {{ $l->jumlahikan }}</div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-sm-2">Status</div>
                    <div class="col-sm-10">:
                        @if ($l->tersedia == 0) Tidak Tersedia
                        @elseif ($l->tersedia == 1) Tersedia
                        @endif
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-sm-5"></div>
                    <div class="col-sm-2 text-center">
                    <a href="/ikan" class="btn btn-block btn-primary">Done</a>
                    </div>
                </div>
        </div>
    </div>
    </div>

	@endforeach

@endsection
