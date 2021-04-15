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
<form action="{{ route('siswa.store') }}" method="POST">
    @csrf
  
     <div class="row">
            <div>
                <strong>NIS:</strong>
                <input type="text" name="nis">
            </div>
            <div>
                <strong>Nama:</strong>
                <input type="text" name="nama">
            </div>
            <div>
                <strong>Jenis Kelamin:</strong>
                <input type="text" name="jns_kelamin">
            </div>
            <div>
                <strong>Tempat Lahir:</strong>
                <input type="text" name="temp_lahir">
            </div>
            <div>
                <strong>Tanggal Lahir:</strong>
                <input type="date" name="tgl_lahir">
            </div>
            <div>
                <strong>Alamat:</strong>
                <input type="text" name="alamat" style="height:150px">
            </div>
            <div>
                <strong>Asal Sekolah:</strong>
                <input type="text" name="asal_sekolah">
            </div>
            <div>
                <strong>Kelas:</strong>
                <input type="text" name="kelas">
            </div>
            <div>
                <strong>Jurusan:</strong>
                <input type="text" name="jurusan">
            </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </div>
        
</form>
@endsection