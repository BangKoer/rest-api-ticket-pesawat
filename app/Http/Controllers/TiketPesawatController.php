<?php

namespace App\Http\Controllers;

use App\Models\TiketPesawat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TiketPesawatController extends Controller
{
    // Menampilkan semua data
    public function index()
    {
        $datas = TiketPesawat::all();
        return response()->json([
            'status_error' => false,
            'message' => "Data Fetch Success",
            'datas' => $datas,
        ]);
    }

    // Tampil data berdasarkan id
    public function searchId(TiketPesawat $id)
    {
        return response()->json([
            'status_error' => false,
            'messege' => "Data Get Succesfully",
            'datas' => $id,
        ]);
    }

    // Tambah Data
    public function addData(Request $request)
    {
        $datas = TiketPesawat::create([
            'nama_maskapai' => $request->nama_maskapai,
            'jenis_pesawat' => $request->jenis_pesawat,
            'destinasi' => $request->destinasi,
            'estimasi_waktu' => $request->estimasi_waktu,
            'harga' => $request->harga,
            'logo' => $request->logo,
        ]);

        return response()->json([
            'status_error' => false,
            'message' => "Data Fetch Success",
            'datas' => $datas,
        ]);
    }

    // Edit / Update Data
    public function updateData(Request $request, TiketPesawat $id)
    {
        $validate = Validator::make([
            'nama_maskapai' => $request->nama_maskapai,
            'jenis_pesawat' => $request->jenis_pesawat,
            'destinasi' => $request->destinasi,
            'estimasi_waktu' => $request->estimasi_waktu,
            'logo' => $request->logo,
            'harga' => $request->harga,
        ], [
            'nama_maskapai' => 'required',
            'jenis_pesawat' => 'required',
            'destinasi' => 'required',
            'estimasi_waktu' => 'required',
            'harga' => 'required',
            'logo' => 'required',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status_error' => true,
                'messege' => 'Data Update Fail',
                'datas' => $validate->errors()
            ]);
        }

        return response()->json([
            'status_error' => false,
            'messege' => 'Data Update Successfully',
            'datas' => $id->update([
                'nama_maskapai' => $request->nama_maskapai,
                'jenis_pesawat' => $request->jenis_pesawat,
                'destinasi' => $request->destinasi,
                'estimasi_waktu' => $request->estimasi_waktu,
                'harga' => $request->harga,
                'logo' => $request->logo,
            ])
        ]);
    }

    // Delete Data
    public function deleteData(TiketPesawat $id) {
        if ($id->delete()) {
            return response()->json([
                'status_error' => false,
                'messege' => "Data Succesfully Delete",
            ]);
        }
    }
}
