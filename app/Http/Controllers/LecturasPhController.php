<?php

namespace App\Http\Controllers;

use App\Models\LecturasPh;
use Illuminate\Http\Request;

class LecturasPhController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Recupera todas las lecturas
        $lecturas = LecturasPh::all();
        return response()->json($lecturas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LecturasPh $lecturasPh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LecturasPh $lecturasPh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LecturasPh $lecturasPh)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LecturasPh $lecturasPh)
    {
        //
    }
}
