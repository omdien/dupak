<?php

namespace App\Http\Controllers;

use App\Models\butir;
use App\Models\Kategori02;
use App\Models\Jenjang;
use Illuminate\Http\Request;

class DashboardButirsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.butirs.index', [
            'butirs' => Butir::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.butirs.create', [
            'kategories' => Kategori02::all(),
            'jenjangs' => Jenjang::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'but_id' => 'required',
            'kategori02_id' => 'required',
            'but_kegiatan' => 'required|max:255',
            'but_slug' => 'required|unique:butirs',
            'but_key' => 'required',
            'but_gambar' => 'image|file|max:1024',
            'but_desc' => 'required',
            'but_satuan' => 'required',
            'but_kredit' => 'required',
            'but_batasan' => 'required',
            'but_fisik' => 'required',
            'jenjang_id' => 'required',
            'but_contoh' => 'required'
        ]);

        if ($request->file('but_gambar')) {
            $validateData['but_gambar'] = $request->file('but_gambar')->store('butir-images');
        };

        $validateData['but_excerpt'] = Str::limit($request->but_desc, 200);

        Butir::create($validateData);

        return redirect('dashboard/butirs')->with('success', 'Butir baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\butir  $butir
     * @return \Illuminate\Http\Response
     */
    public function show(butir $butir)
    {
        return view('dashboard.butirs.show', [
            'butir' => $butir
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\butir  $butir
     * @return \Illuminate\Http\Response
     */
    public function edit(butir $butir)
    {
        return view('dashboard.butirs.edit', [
            'butir' => $butir,
            'kategories' => Kategori02::all(),
            'jenjangs' => Jenjang::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\butir  $butir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, butir $butir)
    {
        $rules = [
            'but_id' => 'required',
            'kategori02_id' => 'required',
            'but_kegiatan' => 'required|max:255',
            'but_key' => 'required',
            'but_desc' => 'required',
            'but_satuan' => 'required',
            'but_kredit' => 'required',
            'but_batasan' => 'required',
            'but_fisik' => 'required',
            'jenjang_id' => 'required',
            'but_contoh' => 'required'
        ];

        if ($request->but_slug != $butir->but_slug) {
            $rules['but_slug'] = 'required|unique:butirs';
        };

        $validateData = $request->validate($rules);

        Butir::where('id', $butir->id)
            ->update($validateData);

        return redirect('dashboard/butirs')->with('success', 'Butir telah di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\butir  $butir
     * @return \Illuminate\Http\Response
     */
    public function destroy(butir $butir)
    {
        Butir::destroy($butir->id);

        return redirect('dashboard/butirs')->with('success', 'Butir telah dihapus');
    }

    public function checkSlug(Request $request)
    {
        dd($request);
        $but_slug = SlugService::createSlug(Butir::class, 'but_slug', $request->but_kegiatan);
        return response()->json(['but_slug => $but_slug']);
    }
}
