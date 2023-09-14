@extends('layout.master')

@section ('Judul')
Tambah Mahasiswa
@endsection

@section('content') 
<form method="post" action="/mahasiswa">
    @csrf
<div class="form-group">
     <label>NPM</label>
<input type="text" name="npm" value="" class="form-control" > 
</div>
@error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group"> 
    <label>Nama</label>
<input type="text" name="nama" value="" class="form-control" >
</div>
@error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
    <label>alamat</label>
<textarea class="form-control" name="alamat"> </textarea>
</div>
@error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror


<button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
