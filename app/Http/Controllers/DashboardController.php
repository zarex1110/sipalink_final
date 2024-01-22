<?php

namespace App\Http\Controllers;

use App\Models\Sipalink;
use App\Models\Tag;
use App\Http\Requests\StoreSipalinkRequest;
use App\Http\Requests\UpdateSipalinkRequest;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index', [
            'links' => Sipalink::where('created_by', auth()->user()->id)->get(),
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create',[
            'links' => Sipalink::orderBy('title')->get(),
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSipalinkRequest $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(Sipalink $sipalink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sipalink $sipalink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSipalinkRequest $request, Sipalink $sipalink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sipalink $sipalink)
    {
        //
    }
}
