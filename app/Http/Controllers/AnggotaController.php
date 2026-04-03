<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AnggotaController extends Controller
{
    // Menampilkan daftar anggota (siswa)
    public function index()
    {
        // Ambil data user yang role-nya 'siswa' saja
        $anggotas = User::where('role', 'siswa')->orderBy('id', 'desc')->get();
        return view('anggota.index', compact('anggotas'));
    }

    // Menghapus akun anggota
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return back()->with('success', 'Akun anggota berhasil dihapus dari sistem.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:4',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'siswa'
        ]);


        return back()->with('success', 'Pengguna baru berhasil ditambahkan!');
    }
}