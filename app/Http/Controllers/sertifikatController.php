<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\template;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;

class sertifikatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $template = template::all();
        return view('template', ['template'=>$template]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('verio.formcreateserti');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $template = new template();
        $template->nama_template = $request->nama_template;
        if ($files = $request->file('image_template')) {
            $name = $files->getClientOriginalName();
            $files->move('images', $name);
            $template->image_template = $name;
        } else {
            return Redirect::to('template/create');
        }
        $template->x_nama = $request->x_nama;
        $template->y_nama = $request->y_nama;
        $template->font_Style = $request->font_style;
        $template->font_color = $request->font_color;
        $template->x_nosertifikat = $request->x_nosertifikat;
        $template->y_nosertifikat = $request->y_nosertifikat;
        $template->save();
        return redirect('template');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_template)
    {
        //
        $template = template::where('id_template', $id_template)->first();
        return view('verio.formeditserti', ['template' => $template]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_template)
    {
        //
        $template = template::find($id_template);
        $template->nama_template = $request->nama_template;
        if ($request->hasfile('image_template')) {
            $destination = './images' . $template->image_template;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            if ($files = $request->file('image_template')) {
                $name = $files->getClientOriginalName();
                $files->move('images', $name);
                $template->image_template = $name;
            } else {
                return Redirect::to('template/create');
            }
        }
        $template->x_nama = $request->x_nama;
        $template->y_nama = $request->y_nama;
        $template->font_Style = $request->font_style;
        $template->font_color = $request->font_color;
        $template->x_nosertifikat = $request->x_nosertifikat;
        $template->y_nosertifikat = $request->y_nosertifikat;
        $template->save();
        return redirect('template');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
