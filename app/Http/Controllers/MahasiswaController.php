<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        $data['message'] = true;
        $data['result'] = $mahasiswa;
        return response()->json($data, Response::HTTP_OK);  
    }
    public function create()
    {
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'npm' => 'required',
            'jurusan' => 'required',
        ]);
        $result = Mahasiswa::create($validate);

        if ($result) {
            $data['succes'] = true;
            $data['message'] = "Data Mahasiswa berhasil disimpan";
            $data['result'] = $result;
            return response()->json($data, Response::HTTP_CREATED);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
