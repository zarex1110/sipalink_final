<?php

namespace App\Http\Controllers;

use App\Models\Sipalink;
use App\Models\Tag;
use Illuminate\Http\Request;

class SipalinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slinks = Sipalink::latest();

        if(request('search')) {
            $slinks->where('title', 'like', '%' . request('search') . '%');
        }

        return view('home.sipalink.index', [
            'slinks' => $slinks->get(),
            'links' => Sipalink::orderBy('title')->get(),
            'toplinks' => Sipalink::all()->take(4),
            'tags' => Tag::all(),
        ]);
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
     * @param  \App\Models\Sipalink  $sipalink
     * @return \Illuminate\Http\Response
     */
    public function show(Sipalink $sipalink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sipalink  $sipalink
     * @return \Illuminate\Http\Response
     */
    public function edit(Sipalink $sipalink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sipalink  $sipalink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sipalink $sipalink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sipalink  $sipalink
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sipalink $sipalink)
    {
        //
    }
}
