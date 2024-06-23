<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kematian;
use Illuminate\Support\Facades\Storage;

class KematianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kematian::all();
        return view('kematian.info',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kematian.inputkematian');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            //Menginput Data
            $data = $request->validate(
            [
                'name' => 'required|string',
                'alamat' => 'required|string',
                'gender' => 'required|string',
                'tgl_kematian' => 'required|date',
                'dokumen' => 'nullable|mimes:pdf|max:2048',
            ],
            [
                'name' => 'Masukan Nama',
                'alamat' => 'Masukan Alamat',
                'gender' => 'Masukan Jenis Kelamin',
                'tgl_kematian' => 'Masukan Tanggal Kematian',
                'dokumen' => 'harus di isi max 2MB',

            ]);

            //upload dokumen
            if ($request->hasFile('dokumen')) {
                $document = $request->file('dokumen');
                $data['dokumen'] = $document->store('kematian/dokumen', 'public'); // Simpan dokumen dalam folder 'documents' di disk 'public'
            }
            // dd($data);
            Kematian::create($data);
            return redirect()->route('kematian.index')->with('success','Data Berhasil Di Kirim');
        }catch (\Throwable $th){
            return redirect()->route('kematian.create')->with('error','Gagal Mengirim Data');

        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Kematian::find($id);
        return view('kematian.detail',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Kematian::find($id);
        return view('kematian.edit',compact('data'));
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
        try{
            //Menginput Data Untuk Di ubah
            $data = $request->validate(
            [
                'name' => 'required|string',
                'alamat' => 'required|string',
                'gender' => 'required|string',
                'tgl_kematian' => 'required|date',
                'dokumen' => 'nullable|mimes:pdf|max:2048',
            ],
            [
                'name' => 'Masukan Nama',
                'alamat' => 'Masukan Alamat',
                'gender' => 'Masukan Jenis Kelamin',
                'tgl_kematian' => 'Masukan Tanggal Kematian',
                'dokumen' => 'harus di isi max 2MB',

            ]);

            //upload dokumen baru yang mau di ubah
            if ($request->hasFile('dokumen')) {
                //menghapus dokumen lama
                if($request->dokumen){
                    Storage::delete($request->dokumen);
                }
                $dokumen = $request->file('dokumen');
                $data['dokumen'] = $dokumen->store('user/dokumen', 'public'); // Simpan foto dalam folder 'photos' di disk 'public'

                // $data->foto = $photos;
            }
            // dd($data);
            Kematian::create($data);
            return redirect()->route('kematian.index')->with('success','Data Berhasil Di Kirim');
        }catch (\Throwable $th){
            return redirect()->route('kematian.create')->with('error','Gagal Mengirim Data');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kematian::findOrFail($id);
        if ($data->foto && $data->dokumen) {
            Storage::delete($data->dokumen);
        }
        $data->delete();

        return redirect()->route('.index')->with('success','Data berhasil di hapus');
    }
}
