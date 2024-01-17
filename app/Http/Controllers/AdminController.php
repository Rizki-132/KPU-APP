<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemilih;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pemilih::all();
        return view('admin.Pemilih.datapemilih',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('admin.Pemilih.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            //menginput data
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
                return redirect()->route('admin.index')->with('success','Data berhasil di kirim');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('admin.create')->with('error','Data Harus Disi');
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
        $data = Pemilih::find($id);
        return view('admin.Pemilih.detail',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pemilih::find($id);
        return view('admin.Pemilih.edit',compact('data'));
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
       try {
        //untuk meng ubah data
            $data = $request->validate([

                'no_kk' => 'required|numeric',
                // 'nik' => 'required|numeric|unique:pemilihs',
                'nama' => 'required|string',
                'alamat' => 'required|string',
                'gender' => 'required|string',
                'tmp_lahir' => 'required|string',
                'tgl_lahir' => 'required|date',
                'status' => 'required|string',
                'foto' => 'nullable|mimes:jpg,jpeg,png,svg|max:2048',
                'dokumen' => 'nullable|mimes:pdf|max:2048',
                'keterangan' => 'required|string',
            ]);

            //  untuk upload foto
            if ($request->hasFile('foto')) {
                //menghapus foto lama
                if($request->foto){
                    Storage::delete($request->foto);
                }
                $photo = $request->file('foto');
                $data['foto'] = $photo->store('user/photos', 'public'); // Simpan foto dalam folder 'photos' di disk 'public'


                // $data->foto = $photos;
            }
            //untuk upload dokumen        

            if ($request->hasFile('dokumen')) {
                //menghapus dokumen lama
                if($request->dokumen){
                    Storage::delete($request->dokumen);
                }
                $dokumen = $request->file('dokumen');
                $data['dokumen'] = $dokumen->store('user/dokumen', 'public'); // Simpan foto dalam folder 'photos' di disk 'public'


                // $data->foto = $photos;
            }
            Pemilih::where('id',$id)->update($data);
                    
            return redirect()->route('admin.index')->with('success','Berhasil di ubah');
       } catch (\Throwable $th) {
        //throw $th; jika tidak di isi
            return redirect()->route('admin.edit')->with('error','Harus Ada yang di Ubah');
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
        $data = Pemilih::findOrFail($id);
        if ($data->foto && $data->dokumen) {
            Storage::delete($data->foto);
            Storage::delete($data->dokumen);
        }
        $data->delete();
        
        return redirect()->route('admin.index')->with('success','Data berhasil di hapus');
    }

  

    // public function downloadPDF($dokumen)
    // {
    //     $file = storage_path('user/dokumen/' . $dokumen);

    //     if (file_exists($file)) {
    //         return response()->download($file);
    //     } else {
    //         abort(404, 'File not found');
    //     }
    // }
}
