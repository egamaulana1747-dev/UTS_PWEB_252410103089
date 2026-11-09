<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        $username = trim($request->input('username'));

        if (empty($username)) {
            return redirect()->route('login')
                ->with('error', 'Username tidak boleh kosong!');
        }

        session(['username' => $username]);
        return redirect()->route('dashboard');
    }

    public function showDashboard()
    {
        $username        = session('username', 'Pengamat');
        $totalObjek      = 5;
        $objekTerbaru    = 'Gugus Pleiades';
        $tanggalTerakhir = '5 November 2026';

        return view('dashboard', compact(
            'username',
            'totalObjek',
            'objekTerbaru',
            'tanggalTerakhir'
        ));
    }

    public function showPengelolaan()
    {
        $pengamatan = [
            [
                'objek'     => 'Saturnus',
                'jenis'     => 'Planet',
                'magnitudo' => 0.9,
                'tanggal'   => '2026-10-12',
                'status'    => 'Jelas',
            ],
            [
                'objek'     => 'Nebula Orion',
                'jenis'     => 'Nebula',
                'magnitudo' => 4.0,
                'tanggal'   => '2026-10-20',
                'status'    => 'Berawan',
            ],
            [
                'objek'     => 'Galaksi Andromeda',
                'jenis'     => 'Galaksi',
                'magnitudo' => 3.4,
                'tanggal'   => '2026-10-27',
                'status'    => 'Jelas',
            ],
            [
                'objek'     => 'Jupiter',
                'jenis'     => 'Planet',
                'magnitudo' => -2.5,
                'tanggal'   => '2026-11-02',
                'status'    => 'Jelas',
            ],
            [
                'objek'     => 'Gugus Pleiades',
                'jenis'     => 'Gugus Bintang',
                'magnitudo' => 1.6,
                'tanggal'   => '2026-11-05',
                'status'    => 'Cerah',
            ],
        ];

        return view('pengelolaan', compact('pengamatan'));
    }

    public function showProfile()
    {
        $username        = session('username', 'Pengamat');
        $lokasi          = 'Jember, Jawa Timur';
        $bergabungSejak  = '2026';
        $totalPengamatan = 5;

        return view('profile', compact(
            'username',
            'lokasi',
            'bergabungSejak',
            'totalPengamatan'
        ));
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }
}