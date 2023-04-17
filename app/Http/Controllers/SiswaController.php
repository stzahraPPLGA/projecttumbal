<?php

namespace App\Http\Controllers;

use App\Models\Siswapplg;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswapplg = Siswapplg::all();
        return view('siswa.index', compact('siswapplg'));
    }

    public function create()
    {
        return view('siswa.create');
    }
    public function store(Request $request)
    {
        //dd($request->except(['_token','submit']));
        Siswapplg::create($request->except(['_token','submit']));
        return redirect('/siswapplg');
    }   
    public function edit($id)
    {
        $siswapplg = Siswapplg::find($id);
        //dd($siswapplg);
        return view('siswa.edit',compact(['siswapplg']));
    }
    public function update($id, Request $request)
    {
        $siswapplg = Siswapplg::find($id);
        $siswapplg->update($request->except(['_token','submit']));
        return redirect('/siswapplg');
    }
    public function destroy($id)
    {
        $siswapplg = Siswapplg::find($id);
        $siswapplg->delete();
        return redirect('/siswapplg');
    }
}
