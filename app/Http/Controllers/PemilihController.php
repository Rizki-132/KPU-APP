<?php

namespace App\Http\Controllers;

use App\Models\Pemilih;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PemilihController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->validate(
            [
                'no_kk' => 'required|numeric',
                'nik' => 'required|numeric|unique:pemilihs',
                'nama' => 'required|string',
                'alamat' => 'required|string',
                'gender' => 'required|string',
                'tmp_lahir' => 'required|string',
                'tgl_lahir' => 'required|date',
                'status' => 'required|string',
                'foto' => 'required|image|mimes:jpg,jpeg,png,svg|max:2048',
                'dokumen' => 'nullable|mimes:pdf|max:2048',
                'keterangan' => 'required|string',
            ],
            [
                'no_kk' => 'Masukan Nomor KK Anda',
                'nik' => 'Masukan NIK anda',
                'nama' => 'Masukan Nama Anda',
                'alamat' => 'Masukan Alamat Anda',
                'gender' => 'pilih Jenis Kelamin',
                'tmp_lahir' => 'Masukan tempat lahir anda',
                'tgl_lahir' => 'Masukan Tanggal lahir anda',
                'status' => 'Pilih status',
                'foto' => 'harus di isi file max 2MB',
                'dokumen' => 'harus di isi max 2MB',
                'keterangan' => 'Masukan alasan',
            ]
        );

       

        // untuk upload foto
       
        if ($request->hasFile('foto')) {
            $photo = $request->file('foto');
            $data['foto'] = $photo->store('user/photos', 'public'); // Simpan foto dalam folder 'photos' di disk 'public'
        }
        //untuk upload dokumen
        
        if ($request->hasFile('dokumen')) {
            $document = $request->file('dokumen');
            $data['dokumen'] = $document->store('user/dokumen', 'public'); // Simpan dokumen dalam folder 'documents' di disk 'public'
        }
        // dd($data);
        Pemilih::create($data);
        return redirect()->route('pemilih.index')->with('success','Data berhasil di kirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     //    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
    }

    // public function viewFile($type, $filename)
    // {
    //     $file = '';

    //     if ($type === 'pdf') {
    //         $file = storage_path("app/pdf/{$filename}");
    //     } elseif ($type === 'image') {
    //         $file = storage_path("app/images/{$filename}");
    //     }

    //     // Pastikan file ada di direktori yang benar
    //     if (file_exists($file)) {
    //         return response()->file($file, ['Content-Type' => $type === 'pdf' ? 'application/pdf' : 'image/jpeg']);
    //     } else {
    //         // Tindakan yang sesuai jika file tidak ditemukan
    //         abort(404);
    //     }
    // }
}
