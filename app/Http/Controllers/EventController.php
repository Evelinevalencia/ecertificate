<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;


class EventController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $event = event::all();
        return view('dashboard', ['event' => $event]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('verio.formcreateevent');
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
        $event = new event();
        $event->nama_event = $request->nama_event;
        $event->jenis_event = $request->jenis_event;
        $event->deskripsi_event = $request->deskripsi_event;
        $event->tanggal_event = $request->tanggal_event;
        if ($files = $request->file('image_event')) {
            $name = $files->getClientOriginalName();
            $files->move('images', $name);
            $event->image_event = $name;
        } else {
            return Redirect::to('event/create');
        }
        $event->penyelenggara_event = $request->penyelenggara_event;
        $event->kapasitas_peserta = $request->kapasitas_peserta;
        $event->save();
        return redirect('finalisasi');
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
    public function edit($id_event)
    {
        //
        $event = event::where('id_event', $id_event)->first();
        return view('verio.formeditevent', ['event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_event)
    {
        //
        $event = event::find($id_event);
        $event->nama_event = $request->nama_event;
        $event->jenis_event = $request->jenis_event;
        $event->deskripsi_event = $request->deskripsi_event;
        $event->tanggal_event = $request->tanggal_event;
        if ($request->hasfile('image_event')) {
            $destination = './images' . $event->image_event;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            if ($files = $request->file('image_event')) {
                $name = $files->getClientOriginalName();
                $files->move('images', $name);
                $event->image_event = $name;
            } else {
                return Redirect()->back();
            }
        }
        $event->penyelenggara_event = $request->penyelenggara_event;
        $event->kapasitas_peserta = $request->kapasitas_peserta;
        $event->save();
        return redirect('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_event)
    {
        //
        $model = event::find($id_event);
        $model->delete();
        return Redirect::to('dashboard');
    }
}
