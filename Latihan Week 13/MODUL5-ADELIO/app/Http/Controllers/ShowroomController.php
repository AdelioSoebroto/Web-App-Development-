<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Showroom;
use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function create(){
        return view('showroom.create');
    }

    public function store(Request $request){
        $data = $request->all();

        $data_mobil = [
            'nama_mobil' => $data['name'],
            'brand_mobil' => $data['brand'],
            'warna_mobil' => $data['warna'],
            'tipe_mobil' => $data['tipe'],
            'harga_mobil' => $data['harga'],
        ];

        Showroom::create($data_mobil);

        return redirect(route('showroom.index'));
    }

    public function index(){
        $showroom = Showroom::all();

        return view('showroom.index', compact('showroom'));
    }
}
