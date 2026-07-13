<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Faskes;
use Illuminate\Http\Request;

class FaskesController extends Controller
{
    public function index(){
        $faskes = Faskes::all();
        return response()->json([
            'succes' => true,
            'message' =>'Data Berhasil Diambil',
            'data' => $faskes
        ]);
    }
    public function show(String $id){
        $faskes = Faskes::find($id);
        return response()->json([
            'succes' => true,
            'message' =>'Data Berhasil Diambil',
            'data' => $faskes
        ]);
    }
}
