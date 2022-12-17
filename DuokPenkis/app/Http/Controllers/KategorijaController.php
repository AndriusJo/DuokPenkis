<?php

namespace App\Http\Controllers;

use App\Models\Kategorija;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategorijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategorijos = DB::table('kategorija')->get();
        // ->where('pavadinimas', 'eget varius')
        // ->first();

        return view('Kategorija.index', [
            'kategorijos' => $kategorijos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategorijos = DB::table('kategorija')->get();

        return view('kategorija.create', [
            'kategorijos' => $kategorijos
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
        Kategorija::create([
            'pavadinimas' => $request->pavadinimas,
            'fk_Kategorija_pavadinimas' => $request->fk_Kategorija_pavadinimas
        ]);

        return redirect(route('kategorija.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategorijos = DB::table('kategorija')->get();

        return view('kategorija.edit',  [
            'kategorija' => Kategorija::where('pavadinimas', $id)->first(),
            'kategorijos' => $kategorijos
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Kategorija::where('pavadinimas', $id)->update($request->except([
            '_token', '_method'
        ]));

        return redirect(route('kategorija.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategorija = DB::table('kategorija')->where('pavadinimas', $id)->delete();
        return redirect(route('kategorija.index'))->with('message', 'Kategorija sėkmingai ištrinta');
    }
}
