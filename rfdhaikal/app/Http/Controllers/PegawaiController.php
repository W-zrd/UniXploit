<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index(){
        $employees = Pegawai::all();
        return view('home', compact('employees'));
    }

    public function showData($id){
        $data = Pegawai::find($id);
        return view('updateuser', compact('data'));
    }

    public function showCreateForm(){
        return view('createuser');
    }

    public function storeNewUser(Request $request){
        $emp = $request->validate([
            'name' => 'required',
            'gaji' => 'required|numeric',
            'posisi' => 'required'
        ]);

        Pegawai::create($emp);
        return redirect()->route('home');
    }
    
    public function updateData(Request $request, $id){
        $data = Pegawai::find($id);
        $data->update($request->all());
        return redirect()->route('home');
    }

    public function deleteData($id){
        $data = Pegawai::find($id);
        $data->delete();
        return redirect()->route('home');
    }
}
