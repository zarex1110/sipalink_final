<?php

namespace App\Http\Controllers;

use App\Models\Sipalink;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.links.index', [
            'links' => Sipalink::where('created_by', auth()->user()->id)->get(),
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.links.create',[
            'links' => Sipalink::orderBy('title')->get(),
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'title' => 'required|max:255|unique:sipalinks',
            'link' => 'required|max:255|unique:sipalinks',
            'tags_id' => 'required',
            'description' => 'required',
            'image' => 'null'
        ]);

        $validatedData['created_by'] = auth()->user()->id;
        $validatedData['hit_counter'] = 0;

        Sipalink::create($validatedData);

        return redirect('/dashboard/links')->with('success','Data telah diinput!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sipalink $link)
    {
        return view('dashboard.links.show', [
            'links' => $link
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sipalink $link)
    {
        return view('dashboard.links.edit', [
            'links' => $link,
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sipalink $link)
    {
        {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'link' => 'required|max:255',
                'tags_id' => 'required',
                'description' => 'required',
                'image' => 'null'
            ]);

            $validatedData['created_by'] = auth()->user()->id;

            Sipalink::where('id', $link->id)->update($validatedData);

            return redirect('/dashboard/links')->with('success','Data telah diubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sipalink $link)
    {
        if($link->image) {
            Storage::delete($link->image);
        }

        Sipalink::destroy($link->id);

        return redirect('/dashboard/links')->with('success','Data telah dihapus!');
    }
}
