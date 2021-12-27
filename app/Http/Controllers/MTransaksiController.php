<?php

namespace App\Http\Controllers;

use App\Models\MTransaksi;
use App\Models\MDTransaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master.transaksi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MTransaksi  $mTransaksi
     * @return \Illuminate\Http\Response
     */
    public function show(MTransaksi $mTransaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MTransaksi  $mTransaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(MTransaksi $mTransaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MTransaksi  $mTransaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MTransaksi $mTransaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MTransaksi  $mTransaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(MTransaksi $mTransaksi)
    {
        //
    }
}
