<?php

namespace App\Http\Controllers;

use App\Models\TabelKaryawan;
use Illuminate\Http\Request;

class tabelKaryawanController extends Controller
{
    public function index(){
      $tabelKaryawan = TabelKaryawan::all();
      return view('tabelKaryawan.index', compact(['tabelKaryawan']));
    //   dd($tabelKaryawan);
    }

    public function create(){
      return view('tabelKaryawan.create');
    }

    public function store(Request $request){
      // dd($request->except('_token','submit'));
      TabelKaryawan::create($request->except(['_token','submit']));
      return redirect('/tabelKaryawan');
    }

    public function edit($id){
      // dd($id);
      $tabelKaryawan = TabelKaryawan::find($id);
      // dd($tabelKaryawan);
      return view('tabelKaryawan.edit', compact(['tabelKaryawan']));
    }

    public function update($id, Request $request){
      $tabelKaryawan = TabelKaryawan::find($id);
      $tabelKaryawan->update($request->except(['_token','submit']));
      return redirect('/tabelKaryawan');
    }

    public function destroy($id){
      $tabelKaryawan = TabelKaryawan::find($id);
      $tabelKaryawan->delete();
      return redirect('/tabelKaryawan');
    }
}


