<?php

namespace App\Http\Controllers;

use App\Models\Universidad;
use Illuminate\Http\Request;

class UniversidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('universidad.create');
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
    public function show(Universidad $universidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Universidad $universidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Universidad $universidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Universidad $universidad)
    {
        //
    }
}
