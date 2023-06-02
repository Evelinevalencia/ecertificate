<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\finalisasi;

use Spatie\SimpleExcel\SimpleExcelReader;

class importfinalisasicontroller extends Controller
{
    //
    public function import (Request $request) {

    	$this->validate($request, [
    		'finalisasi' => 'bail|required|file|mimes:xlsx'
    	]);

    	$finalisasi = $request->finalisasi->move('./uploads', $request->finalisasi->hashName());

    	$reader = SimpleExcelReader::create($finalisasi);

        $rows = $reader->getRows();


        $status = finalisasi::insert($rows->toArray());

        // Si toutes les lignes sont insérées
    	if ($status) {

            $reader->close();
            return redirect('dashboard');
            unlink($finalisasi);
            

        } else { return back()->withMsg("error","import gagal !"); }
    }
}
