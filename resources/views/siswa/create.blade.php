@extends('layouts.template')

@section('content')
<div class="container">
<h1>Masukan Data Siswa PPLG</h1>
<form action="/siswa/store" method="POST">
    @csrf
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">NIS</label>
        <input type="text" name="nis" class="form-control" id="TabelInput1" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">NAMA</label>
        <input type="text" name="nama" class="form-control" id="TabelInput1" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">KELAS JURUSAN</label>
        <input type="text" name="kelas_jurusan" class="form-control" id="TabelInput1" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">NAMA ORTU</label>
        <input type="text" name="nama_ibu" placeholder="IBU" class="form-control" id="TabelInput1" aria-describedby="emailHelp">
        <input type="text" name="nama_ayah" placeholder="AYAH" class="form-control" id="TabelInput1" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">NAMA WALI</label>
        <input type="text" name="nama_wali" placeholder="WALI" class="form-control" id="TabelInput1" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">NO TELP ORTU</label>
        <input type="text" name="no_telp_ibu" placeholder="IBU" class="form-control" id="TabelInput1" aria-describedby="emailHelp">
        <input type="text" name="no_telp_ayah" placeholder="AYAH" class="form-control" id="TabelInput1" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">NO TELP WALI</label>
        <input type="text" name="no_telp_wali" placeholder="WALI" class="form-control" id="TabelInput1" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">FOTO SISWA</label>
        <input type="text" name="foto_siswa" class="form-control" id="TabelInput1" aria-describedby="emailHelp">
    </div>
    <input class="btn btn-primary" type="submit" name="submit" value="Save">
    <a href="/siswapplg" class="btn btn-danger">Batal</a>
    {{-- <form action="/siswapplg" method="POST">
        @csrf
        @method('delete')
        <input class="btn btn-danger" type="submit" value="Batal">
    </form> --}}
</form>
</div>