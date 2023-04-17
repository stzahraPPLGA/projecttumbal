@extends('layouts.template')

@section('content')

<div class="container mt-3">
    <h1>Harap Masukan Data Siswa</h1>
    <p>Dimohon lebih teliti saat memasukan data siswa!</p>
    <a class="btn btn-primary mb-3" href="/siswa/create">Add Data Siswa PPLG</a>
    <table class="table table-bordered">
        <tr>
            <td>NO</td>
            <td>NIS</td>
            <td>NAMA</td>
            <td>KELAS</td>
            <td>NAMA IBU</td>
            <td>NAMA AYAH</td>
            <td>NAMA WALI</td>
            <td>NO TELP IBU</td>
            <td>NO TELP AYAH</td>     
            <td>NO TELP WALI</td>     
            <td>FOTO</td>
            <td>AKSI</td>
        </tr>
        @foreach($siswapplg as $pplg)
        <tr>
            <td>{{ $pplg->id }}</td>
            <td>{{ $pplg->nis }}</td>
            <td>{{ $pplg->nama }}</td>
            <td>{{ $pplg->kelas_jurusan }}</td>
            <td>{{ $pplg->nama_ibu }}</td>
            <td>{{ $pplg->nama_ayah }}</td>
            <td>{{ $pplg->nama_wali }}</td>
            <td>{{ $pplg->no_telp_ibu }}</td>
            <td>{{ $pplg->no_telp_ayah }}</td>
            <td>{{ $pplg->no_telp_wali }}</td>
            <td>{{ $pplg->foto_siswa }}</td>
            <td>
                <a class="btn btn-outline-success" href="/siswa/{{$pplg->id}}/edit">Edit</a>
                <form action="/siswa/{{$pplg->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <input class="btn btn-outline-danger" type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>