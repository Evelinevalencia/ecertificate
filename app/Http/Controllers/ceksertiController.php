<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;
use App\Models\peserta;
use App\Models\finalisasi;

class ceksertiController extends Controller
{
    //
    public function index($id_event){
        $event = event::find($id_event);
        return view('yoyo.cekserti', ['event'=>$event]);
    }

    public function ceksertif(Request $request)
    {
        $id_event = $request->id_event;
        $cekserti = $request->nama_lengkap;
        $peserta = peserta::where('nama_lengkap', '=', $cekserti)->first();
        $tes = finalisasi::where('id_peserta', '=', $peserta->id_peserta)->where('id_event', '=', $id_event)->where('peran', '=', "peserta")->first();


        if ( $peserta != null && $tes == true) 
        {
            return redirect()->back()->with("success", "Data $cekserti tersedia");
        }
        else
        {
            return redirect()->back()->with("error", "Data $cekserti tidak tersedia");
        }
    }
}
