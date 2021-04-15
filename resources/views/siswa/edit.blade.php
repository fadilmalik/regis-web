@extends('home')
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
    @csrf 
    @method('PUT')

    <div>
        <div>
            <strong>NIS</strong>
            <input type="text" name="nis" value="{{ $siswa->nis }}">
        </div>
        <div>
            <strong>Nama</strong>
            <input type="text" name="nama" value="{{ $siswa->nama }}">
        </div>
        <div>
            <strong>Jenis Kelamin</strong>
            <input type="text" name="jns_kelamin" value="{{ $siswa->jns_kelamin }}">
        </div>
        <div>
            <strong>Tempat Lahir</strong>
            <input type="text" name="temp_lahir" value="{{ $siswa->temp_lahir }}">
        </div>
        <div>
            <strong>Tanggal Lahir</strong>
            <input type="date" name="tgl_lahir" value="{{ $siswa->tgl_lahir }}">
        </div>
        <div>
            <strong>Alamat</strong>
            <input type="text" name="alamat" value="{{ $siswa->alamat }}">
        </div>
        <div>
            <strong>Asal Sekolah</strong>
            <input type="text" name="asal_sekolah" value="{{ $siswa->asal_sekolah }}">
        </div>
        <div>
            <strong>Kelas</strong>
            <input type="text" name="kelas" value="{{ $siswa->kelas }}">
        </div>
        <div>
            <strong>Jurusan</strong>
            <input type="text" name="jurusan" value="{{ $siswa->jurusan }}">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </div>
</form>

@endsection