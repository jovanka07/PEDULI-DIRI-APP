<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_diri;
use App\Models\Login;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $session = Auth()->user()->id;
        $model = data_diri::with('Login')->where('user_id', $session)->get();
        return view('home/index', compact(
            'model'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home/isi_data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new data_diri;
        $model->user_id = Auth()->user()->id;
        $model->tanggal = $request->tanggal;
        $model->jam = $request->jam;
        $model->lokasi = $request->lokasi;
        $model->suhu = $request->suhu;
        $model->save();
        return redirect('home')->with('pesan', 'Perjalanan Berhasil dicatat');
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
    public function edit($id)
    {
        $model = data_diri::find($id);
        return view('home/edit', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = data_diri::find($id);
        $model->user_id = Auth()->user()->id;
        $model->tanggal = $request->tanggal;
        $model->jam = $request->jam;
        $model->lokasi = $request->lokasi;
        $model->suhu = $request->suhu;
        $model->save();
        return redirect('home')->with('pesan', 'Perjalanan Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = data_diri::find($id);
        $model->delete();
        return redirect('home');
    }
}
