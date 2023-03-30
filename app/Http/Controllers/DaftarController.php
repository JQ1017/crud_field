<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftar = Daftar::all();

        return view('admin.daftar.index', compact('daftar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.daftar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'phone' => 'required|unique:daftars,phone',
            'address' => 'required'
        ]);

        $daftar = Daftar::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address
        ]);

        return redirect()->route('daftar.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $daftar = Daftar::findOrFail($id);
        return view('admin.daftar.show', compact('daftar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daftar = Daftar::findOrFail($id);

        return view('admin.daftar.edit', compact('daftar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daftar $daftar)
    {
        $this->validate($request,[
        'phone' => 'unique:daftars,phone,' . $daftar->id
    ]);

    $daftar = Daftar::findOrFail($daftar->id);
    $daftar->update([
        'name' => $request->name,
        'phone' => $request->phone,
        'address' => $request->address

    ]);

    return redirect()->route('daftar.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftar = Daftar::findOrFail($id);
        $daftar->delete();

        return redirect()->route('daftar.index');
    }
}
