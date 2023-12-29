<?php

namespace App\Http\Controllers;

use App\Models\Manajemen;
use Illuminate\Http\Request;

class DashboardManajemenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.manajemen.index',[
            'manajemens' => Manajemen::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dashboard.manajemen.create');
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
            'merek'=>'required',
            'model'=>'required',
            'no_plat'=>'required|unique:manajemens',
            'tarif_perhari'=>'required',
        ]);
        Manajemen::create($validatedData);
        return redirect('/dashboard/manajemen')->with('success','Mobil Baru ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manajemen  $manajemen
     * @return \Illuminate\Http\Response
     */
    public function show(Manajemen $manajemen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manajemen  $manajemen
     * @return \Illuminate\Http\Response
     */
    public function edit(Manajemen $manajemen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manajemen  $manajemen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manajemen $manajemen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manajemen  $manajemen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manajemen $manajemen)
    {
        //
    }
}
