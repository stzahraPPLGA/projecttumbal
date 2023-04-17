@extends('layouts.template')

@section('content')

<div class="container">
<h1>Edit Data Siswa PPLG</h1>

<form action="/siswa/{{ $siswapplg->id }}" method="POST">
    @method('put')
    @csrf
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">NIS</label>
        <input type="text" name="nis" class="form-control" id="TabelInput1" value="{{ $siswapplg->nis }}" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">NAMA</label>
        <input type="text" name="nama" class="form-control" id="TabelInput1" value="{{ $siswapplg->nama }}" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">KELAS JURUSAN</label>
        <input type="text" name="kelas_jurusan" class="form-control" id="TabelInput1" value="{{ $siswapplg->kelas_jurusan }}" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">NAMA ORTU</label>
        <input type="text" name="nama_ibu" placeholder="IBU" class="form-control" id="TabelInput1" value="{{ $siswapplg->nama_ibu }}" aria-describedby="emailHelp">
        <input type="text" name="nama_ayah" placeholder="AYAH" class="form-control" id="TabelInput1" value="{{ $siswapplg->nama_ayah }}" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">NAMA WALI</label>
        <input type="text" name="nama_wali" placeholder="WALI" class="form-control" id="TabelInput1" value="{{ $siswapplg->nama_wali }}" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">NO TELP ORTU</label>
        <input type="text" name="no_telp_ibu" placeholder="IBU" class="form-control" id="TabelInput1" value="{{ $siswapplg->no_telp_ibu }}" aria-describedby="emailHelp">
        <input type="text" name="no_telp_ayah" placeholder="AYAH" class="form-control" id="TabelInput1" value="{{ $siswapplg->no_telp_ayah }}" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">NO TELP WALI</label>
        <input type="text" name="no_telp_wali" class="form-control" id="TabelInput1" value="{{ $siswapplg->no_telp_wali }}" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">FOTO SISWA</label>
        <input type="text" name="foto_siswa" class="form-control" id="TabelInput1" value="{{ $siswapplg->foto_siswa }}" aria-describedby="emailHelp">
    </div>
    <input class="btn btn-success" type="submit" name="submit" value="Save">
    <a href="/siswapplg" class="btn btn-danger">Batal</a>
</form>
</div>