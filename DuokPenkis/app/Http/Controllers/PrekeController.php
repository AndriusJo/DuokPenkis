<?php

namespace App\Http\Controllers;

use App\Models\Preke;
use Illuminate\Http\Request;

class PrekeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $preke = DB::table('preke')->find('arcu. Vestibulum');
        $prekes = Preke::get();

        return view('index', [
            'prekes' => $prekes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Preke.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Preke::create([
            'pavadinimas' => $request->pavadinimas,
            'kaina' => $request->kaina,
            'aprasymas' => $request->aprasymas,
            'kiekis' => $request->kiekis,
            'dydis' => $request->dydis,
            'prekiniszenklas' => $request->prekiniszenklas,
            'spalva' => $request->spalva,
            'lytis' => $request->lytis,
            'bukle' => $request->bukle,
            'medziagos_tipas' => $request->medziagos_tipas,
            'nuotauka' => $this->storeImage($request)
        ]);

        return redirect( route('preke.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $preke = Preke::findorfail($id);
        return view('Preke.show', [
            'preke'=> $preke
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view(('preke.edit'), [
            'preke' => Preke::where('id', $id)->first()
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
        Preke::where('id', $id)->update($request->except([
            '_token', '_method'
        ]));

        return redirect(route('preke.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Preke::destroy($id);
        return redirect(route('preke.index'))->with('message', 'Prekė sėkmingai ištrinta');
    }

    private function storeImage($request)
    {
        $newImageName = uniqid() . '-' . $request->pavadinimas . '.' .
        $request->nuotauka->extension();

        return $request->nuotauka->move('images', $newImageName) ;
    }
}
