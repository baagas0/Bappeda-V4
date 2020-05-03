<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function pemuda()
    {
		toastr()->success('Selamat Datang Di Dashboard Admin Bappeda V4');
		toastr()->info('© By Bagas Aditya Mahendra');
		return view('admin.index');
    }
}
