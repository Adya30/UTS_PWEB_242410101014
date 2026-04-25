<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PageController extends Controller
{
    // FORM LOGIN
    public function login(): View
    {
        return view('login');
    }

    public function proses(Request $request): RedirectResponse
    {
        $username = $request->input('username');

        if (!$username) {
            return back()->with('error', 'Username wajib diisi!');
        }

        $request->session()->put('username', $username);

        return redirect('/dashboard');
    }

    public function dashboard(Request $request): View
    {
        $username = $request->session()->get('username', 'Guest');

        $statistik = [
            ['judul' => 'Total tayangan', 'nilai' => 300, 'status' => 'Medium'],
            ['judul' => 'Menyukai', 'nilai' => 840, 'status' => 'High'],
            ['judul' => 'Trafik Populer', 'nilai' => 200, 'status' => 'Medium'],
            ['judul' => 'Total Manga', 'nilai' => 56, 'status' => 'Low'],
            ['judul' => 'Total Unduhan', 'nilai' => 300, 'status' => 'Medium']
        ];

        return view('dashboard', compact('username', 'statistik'));
    }

    public function profile(Request $request): View
    {
        $username = $request->session()->get('username', 'Guest');

        $bio = [
            ['Alamat' => 'Jember', 'Status' => 'Seorang Pengembara', 'Fans' => 'Tenki No Ko']
        ];

        return view('profile', compact('username', 'bio'));
    }

    public function pengelolaan(Request $request): View
    {
        $username = $request->session()->get('username', 'Guest');

        $data = [
            ['judul' => 'Tenki No Ko 1', 'deskripsi' => 'Episode Pertama yang seru'],
            ['judul' => 'Tenki No Ko 2', 'deskripsi' => 'Episode Kedua yang seru'],
            ['judul' => 'Tenki No Ko 3', 'deskripsi' => 'Episode Keempat yang seru'],
        ];

        return view('pengelolaan', compact('data', 'username'));
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->flush();

        return redirect('/');
    }
}
