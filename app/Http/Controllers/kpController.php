<?php

namespace App\Http\Controllers;

use App\kp;
use App\Prodi;
use DataTables;
use Illuminate\Http\Request;

class kpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view ('kp.index');
    }
    public function kp_list()
    {
        $kp = kp::all();
        return Datatables::of($kp)
            ->addIndexColumn()
            ->addColumn('action', function ($kp) {
                $action = '<a class="text-primary"href="/kp/edit/' . $kp->id . '">Edit</a>';
                $action .= ' | <a class="text-danger"href="/kp/delete/' . $kp->id . '">Hapus</a>';
                return $action;
            })
            ->make();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodi = Prodi::all();
        return view('kp.create', compact('prodi'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        kp::create([

            'id' => request('id'),
            'nim' => request('nim'),
            'nama_mahasiswa' => request('nama_mahasiswa'),
            'judul_kp' => request('judul_kp'),
            'tempat_penelitian' => request('tempat_penelitian'),
            'alamat' => request('alamat'),
        ]);
        return redirect()->route('kp.index') ->with('success', 'Data berhasil ditambahkan');
    }
    /**
     * Display the specified resource.
     *
     * @param \App\kp $kp
     * @return \Illuminate\Http\Response
     */
    public function show(kp $kp)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\kp $kp
     * @return \Illuminate\Http\Response
     */
    public function edit(kp $kp, $id)
    {
        $prodi = Prodi::all();
        $kp = kp::find($id);
        return view('kp.edit', compact('prodi', 'kp'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\kp $kp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kp $kp)
    {
        $kp->update([
            'id' => request('id'),
            'nim' => request('nim'),
            'nama_mahasiswa' => request('nama_mahasiswa'),
            'judul_kp' => request('judul_kp'),
            'tempat_penelitian' => request('tempat_penelitian'),
            'alamat' => request('alamat'),
        ]);
        return redirect()->route('kp.index')->with('success', 'Data berhasil diupdate');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param \App\kp $kp
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kp = kp::find($id);
        $kp->delete();

        return redirect()->route('kp.index')
        ->with('success', 'Data Berhasil Dihapus');
    }
}
