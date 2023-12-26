<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // Cek apakah pengguna sudah login
        if (!ion_auth()->loggedIn()) {
            return redirect()->to('login');
        }

        // Ambil informasi pengguna yang sudah login
        $user = ion_auth()->user()->row();

        // Tampilkan halaman dashboard dengan informasi pengguna
        return view('dashboard/index', ['user' => $user]);
    }
}
