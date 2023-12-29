<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use App\Models\Manajemen;
use Illuminate\Http\Request;

class DashboardPinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            //  return view('dashboard.pinjam.index',[
            // 'pinjams' => Pinjam::all()
        //ini adalah cara relationship dengan igger loading
        //lebih menghemat memory dan sangat rekomended
        $pinjam = Pinjam::all(); 
        //mengirim data dari kontroller ke view
        return view ('dashboard.pinjam.index', ['pinjamList' => $pinjam]);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
              return view ('dashboard.pinjam.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $validatedData = $request->validate([
            'tanggal_pinjam'=>'required',
            'tanggal_kembali'=>'required',
            'manajemens_id'=>'required',
            
        ]);
        Pinjam::create($validatedData);
        return redirect('/dashboard/pinjam')->with('success','Mobil Berhasil di pinjam !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function show(Pinjam $pinjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function edit(Pinjam $pinjam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pinjam $pinjam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pinjam $pinjam)
    {
        $pinjam->delete();

        return redirect('/dashboard/pinjam')->with('success','Mobil telah dikembalikan !');
    }
}
