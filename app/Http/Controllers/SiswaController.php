<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function index()
    {
        $data = Siswa::latest()->get();
        return view('siswa.index', compact('data'));
    }

    public function create()
    {
        return view('siswa.tambah');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
        ]);

        Siswa::create($data);
        sweetalert()->success('Data berhasil ditambahkan.');
        return redirect('/siswa');
    }

    public function edit($id)
    {
        // ❗ FIX TYPO (HARUS HURUF BESAR)
        $data = Siswa::findOrFail($id);
        return view('siswa.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
        ]);

        Siswa::findOrFail($id)->update($data);
        sweetalert()->success('Data berhasil diupdate.');
        return redirect('/siswa');
    }

    public function delete($id)
    {
        $data = Siswa::findOrFail($id);
        return view('siswa.hapus', compact('data'));
    }

    public function destroy($id)
    {
        $data = Siswa::findOrFail($id);
        $data->delete();
        sweetalert()->success('Data berhasil dihapus.');
        return redirect('/siswa');
    }

    public function dashboard()
    {
        $total = Siswa::count();
        $laki = Siswa::where('jenis_kelamin', 'Laki-laki')->count();
        $perempuan = Siswa::where('jenis_kelamin', 'Perempuan')->count();

        return view('siswa.dashboard', compact('total', 'laki', 'perempuan'));
    }
    public function login()
    {
        $total = Siswa::count();
        $laki = Siswa::where('jenis_kelamin', 'Laki-laki')->count();
        $perempuan = Siswa::where('jenis_kelamin', 'Perempuan')->count();

    }



}
