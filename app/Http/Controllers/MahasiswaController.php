<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
