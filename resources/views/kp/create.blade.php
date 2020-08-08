@extends('layouts.app')
@section('title','Kerja Praktek Page')
@section('bread1','Kerja Praktek')
@section('bread2','Data')
@section('content')
    <h3>Form Kerja Praktek</h3><hr>
    
   @include('layouts.alert')
    <form action="/kp/store" method="POST">
   @csrf
    <div class="form-group row">
      <label for="id" class="col-sm-12">ID</label>
      <div class="col-sm-3">
        <input type="text" name="id" class="form-control" id="id"placeholder="ID">
       @error('id')<small id="id" class="form-text text-danger">{{ $message}}</small>@enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="id" class="col-sm-12">NIM</label>
      <div class="col-sm-5">
        <input type="text" name="nim" class="form-control"id="nim" placeholder="Nomor Induk Mahasiswa">
       @error('nim')<small id="nim" class="form-text text-danger">{{ $message }}</small>@enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="id" class="col-sm-12">Nama Mahasiswa</label>
      <div class="col-sm-5">
        <input type="text" name="nama_mahasiswa" class="form-control"id="nama_mahasiswa" placeholder="Nama Mahasiswa">
       @error('nama_mahasiswa')<small id="nama_mahasiswa" class="form-text text-danger">{{ $message }}</small>@enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="id" class="col-sm-12">Juduk Kerja Praktek</label>
      <div class="col-sm-5">
        <input type="text" name="judul_kp" class="form-control"id="judul_kp" placeholder="Judul Kerja Praktek">
       @error('judul_kp')<small id="judul_kp" class="form-text textdanger">{{ $message }}</small>@enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="id" class="col-sm-12">Tempat Penelitian</label>
      <div class="col-sm-5">
        <input type="text" name="tempat_penelitian" class="form-control"id="tempat_penelitian" placeholder="Tempat Penelitian" >
       @error('tempat_penelitian')<small id="tempat_penelitian" class="form-text textdanger">{{ $message }}</small>@enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="id" class="col-sm-12">Alamat</label>
      <div class="col-sm-8">
        <textarea name="alamat" class="form-control" id="alamat"></textarea>
        <small id="nama" class="form-text text-muted"></small>
      </div>
    </div>
    <button class="btn btn-primary" type="submit">Simpan</button>
    <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
    </form>
@endsection