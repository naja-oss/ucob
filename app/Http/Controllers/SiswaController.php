<?php

namespace App\Http\Controllers;

use Exception;
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
            'foto' => 'required|image|max:2048',
        ], [
            'nama.required' => 'Nama wajib diisi.',
            'kelas.required' => 'Kelas wajib diisi.',
            'jurusan.required' => 'Jurusan wajib diisi.',
            'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi.',
            'tempat_lahir.required' => 'Tempat Lahir wajib diisi.',
            'tanggal_lahir.required' => 'Tanggal Lahir wajib diisi.',
            'alamat.required' => 'Alamat wajib diisi.',
            'foto.required' => 'Foto wajib diisi.',
            'foto.image' => 'File yang diunggah harus berupa gambar.',
            'foto.max' => 'Ukuran file foto maksimal 2MB.',
        ]);

        $data['foto'] = $this->prosessFoto($request->file('foto'));

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
        $siswa = Siswa::findOrFail($id);

        $data = $request->validate([
            'nama' => 'required|string',
            'kelas' => 'required|string',
            'jurusan' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'foto' => 'nullable|image|max:2048',
        ], [
            'nama.required' => 'Nama wajib diisi.',
            'kelas.required' => 'Kelas wajib diisi.',
            'jurusan.required' => 'Jurusan wajib diisi.',
            'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi.',
            'tempat_lahir.required' => 'Tempat Lahir wajib diisi.',
            'tanggal_lahir.required' => 'Tanggal Lahir wajib diisi.',
            'alamat.required' => 'Alamat wajib diisi.',
            'foto.image' => 'File yang diunggah harus berupa gambar.',
            'foto.max' => 'Ukuran file foto maksimal 2MB.',
        ]);

        // Hanya update foto jika ada file baru di-upload
        if ($request->hasFile('foto')) {
            $data['foto'] = $this->prosessFoto($request->file('foto'), $siswa->foto);
        } else {
            unset($data['foto']); // Jangan ubah field foto jika tidak ada file baru
        }

        $siswa->update($data);
        sweetalert()->success('Data berhasil diupdate!');

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
        // Hapus file foto jika ada
        if ($data->foto && file_exists(public_path('foto_siswa/' . $data->foto))) {
            unlink(public_path('foto_siswa/' . $data->foto));
        }
        $data->delete();
        sweetalert()->success('Data berhasil dihapus.');
        return redirect('/siswa');
    }
    private function prosessFoto($file, $oldFile = null)
    {
        if (!$file) {
            return $oldFile;
        }

        try {
            // Hapus file lama jika ada
            if ($oldFile && file_exists(public_path('foto_siswa/' . $oldFile))) {
                unlink(public_path('foto_siswa/' . $oldFile));
            }

            // Buat nama file unik
            $filename = time() . '_' . $file->getClientOriginalName();

            // Pindah file ke folder tujuan
            $file->move(public_path('foto_siswa'), $filename);

            return $filename;
        } catch (Exception $e) {
            // kembalikan file lama jika ada error saat upload
            return $oldFile;
        }
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
