@extends('layout.master')

@section ('Judul')
Edit Mahasiswa
@endsection

@section('content') 
<form method="post" action="/mahasiswa/{{ $mahasiswa->id }}">
    @csrf
    @method('PUT')
<div class="form-group">
     <label>NPM</label>
<input type="text" name="npm" value="{{ $mahasiswa->npm }}" class="form-control" > 
</div>
@error('nama')
    <div class="alert alret-danger">{{ $message }}</div>
@enderror

<div class="form-group"> 
    <label>Nama</label>
<input type="number" name="nama" value="{{ $mahasiswa->nama }}" class="form-control" >
</div>
@error('nama')
    <div class="alert alret-danger">{{ $message }}</div>
@enderror

<div class="form-group">
    <label>Alamat</label>
<textarea class="form-control" name="alamat"> {{ $mahasiswa->alamat }}</textarea>
</div>
@error('nama')
    <div class="alert alret-danger">{{ $message }}</div>
@enderror


<button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
