@extends('layout.master')

@section ('Judul')
Edit Film
@endsection

@section('content') 
<form method="post" action="/film/{{ $film->id }}">
    @csrf
    @method('PUT')
<div class="form-group">
     <label>Nama</label>
<input type="text" name="nama" value="{{ $film->nama }}" class="form-control" > 
</div>
@error('nama')
    <div class="alert alret-danger">{{ $message }}</div>
@enderror

<div class="form-group"> 
    <label>Umur</label>
<input type="number" name="umur" value="{{ $film->umur }}" class="form-control" >
</div>
@error('nama')
    <div class="alert alret-danger">{{ $message }}</div>
@enderror

<div class="form-group">
    <label>Bio</label>
<textarea class="form-control" name="bio"> {{ $film->bio }}</textarea>
</div>
@error('nama')
    <div class="alert alret-danger">{{ $message }}</div>
@enderror


<button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
