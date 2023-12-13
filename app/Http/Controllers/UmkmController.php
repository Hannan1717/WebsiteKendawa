<?php

namespace App\Http\Controllers;

use App\Http\Requests\umkmRequest;
use App\Models\umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class UmkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $items = umkm::all();

        return view('pages.admin.umkm.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.umkm.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(umkmRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama);
        $data['image'] = $request->file('image')->store(
            'assets/gallery',
            'public'
        );

        umkm::create($data);
        return redirect()->route('umkm.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(umkm $umkm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = umkm::findOrFail($id);
        return view('pages.admin.umkm.edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/gallery',
            'public'
        );


        $item = umkm::findOrFail($id);

        $item->update($data);

        return redirect()->route('umkm.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = umkm::findOrFail($id);
        $item->delete();
        return redirect()->route('umkm.index');
    }
}
