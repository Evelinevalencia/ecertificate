<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peserta;

use Spatie\SimpleExcel\SimpleExcelReader;

class pesertacontroller extends Controller
{
    //
    public function import (Request $request) {

    	$this->validate($request, [
    		'peserta' => 'bail|required|file|mimes:xlsx'
    	]);

    	$peserta = $request->peserta->move('./uploads', $request->peserta->hashName());

    	$reader = SimpleExcelReader::create($peserta);

        $rows = $reader->getRows();


        $status = peserta::insert($rows->toArray());

        // Si toutes les lignes sont insérées
    	if ($status) {

            $reader->close();
            return redirect('event/create');
            unlink($peserta);
            

        } else { return back()->withMsg("error","import gagal !"); }
    }
}
