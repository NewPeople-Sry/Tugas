<?php
namespace App\Http\Controllers;
class GuruController extends Controller
{
    public function index()
    {
        return view('guru.dugam', ['title' => 'Daftar Guru', 'name' => 'SMK Negeri 2']);
    }
}
