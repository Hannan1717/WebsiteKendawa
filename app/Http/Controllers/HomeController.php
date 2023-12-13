<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\pejabat;
use App\Models\umkm;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $pejabats = pejabat::all();
        $umkms = umkm::all();

        return view('pages.home', ['pejabats' => $pejabats, 'umkms' => $umkms]);
    }

    public function kkn(Request $request)
    {
        $lastUpdatedTime = Carbon::createFromFormat('Ymd', '20230801')->diffForHumans();
        return view('pages.kkn', ['lastupdated' => $lastUpdatedTime]);
    }

    public function umkm(Request $request)
    {
        $umkms = umkm::all();
        return view('pages.umkm', ['umkms' => $umkms]);
    }
}
