@extends('layout.master')

@section ('Judul')
Edit Peran
@endsection

@section('content') 
<form method="post" action="/peran/{{ $peran->id }}">
    @csrf
    @method('PUT')
<div class="form-group">
     <label>Film</label>
<input type="text" name="film" value="{{ $peran->nama }}" class="form-control" > 
</div>
@error('nama')
    <div class="alert alret-danger">{{ $message }}</div>
@enderror

<div class="form-group"> 
    <label>Cast</label>
<input type="number" name="cast" value="{{ $peran->umur }}" class="form-control" >
</div>
@error('nama')
    <div class="alert alret-danger">{{ $message }}</div>
@enderror

<div class="form-group">
    <label>Nama</label>
<textarea class="form-control" name="nama"> {{ $peran->nama }}</textarea>
</div>
@error('nama')
    <div class="alert alret-danger">{{ $message }}</div>
@enderror


<button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
