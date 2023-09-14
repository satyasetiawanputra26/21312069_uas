@extends('layout.master')

@section ('Judul')
Edit Cast
@endsection

@section('content') 
<form method="post" action="/cast/{{ $cast->id }}">
    @csrf
    @method('PUT')
<div class="form-group">
     <label>Nama</label>
<input type="text" name="nama" value="{{ $cast->nama }}" class="form-control" > 
</div>
@error('nama')
    <div class="alert alret-danger">{{ $message }}</div>
@enderror

<div class="form-group"> 
    <label>Umur</label>
<input type="number" name="umur" value="{{ $cast->umur }}" class="form-control" >
</div>
@error('nama')
    <div class="alert alret-danger">{{ $message }}</div>
@enderror

<div class="form-group">
    <label>Bio</label>
<textarea class="form-control" name="bio"> {{ $cast->bio }}</textarea>
</div>
@error('nama')
    <div class="alert alret-danger">{{ $message }}</div>
@enderror


<button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
