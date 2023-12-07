@extends('master2')
@section('title', 'Database Pegawai')

@section('judul_halaman')
    <h2>Database Sistem Informasi</h2>
    <h3>Nilai Mahasiswa SI 2022</h3>


    <div>
        <a href="/nilaikuliah/tambahnilai" class="btn btn-secondary">Tambah Nilai Baru</a>
    </div>

    <br />
    <br />
@endsection

@section('konten')
<table class="table table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>NRP</th>
        <th>Nilai Angka</th>
        <th>SKS</th>
        <th>Nilai Huruf</th>
        <th>Bobot</th>
    </tr>
    @foreach ($nilaikuliah as $nk)
        <tr>
            <td>{{$nk->ID}}</td>
            <td>{{ $nk->NRP}}</td>
            <td>{{ $nk->NilaiAngka}}</td>
            <td>{{ $nk->SKS}}</td>
            <td>
            @if ($nk->NilaiAngka >=81)
            A
            @elseif ($nk->NilaiAngka >=61 && $nk->NilaiAngka <= 81)
            B
            @elseif ($nk->NilaiAngka >=41 && $nk->NilaiAngka <= 60)
            C
            @elseif ($nk->NilaiAngka >=40)
            D
            @endif
            <td>{{ $nk->NilaiAngka*$nk->SKS}}</td>
        </td>
        </tr>
    @endforeach
    <div>
        <a href="/nilaikuliah/tambahnilai" class="btn btn-secondary">Tambah Data</a>
    </div>
</table>
@endsection
</html>
