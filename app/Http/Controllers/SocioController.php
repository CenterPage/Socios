<?php

namespace App\Http\Controllers;

use App\Socio;
use Illuminate\Http\Request;
use App\Http\Requests\SocioRquest;

class SocioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    public function index()
    {
        $socios = Socio::latest()->paginate();
        return view('socios.index', compact('socios'));
    }

    public function create()
    {
        return view('socios.create');
    }

    public function store(SocioRquest $request)
    {
        // dd($request->all());
        $socio = Socio::create( $request->all() );

        return redirect()->route('socios.index')->with('status', $socio->nombre_socio . ' fue registrado!');
    }

    public function show(Socio $socio)
    {
        return view('socios.show', compact('socio'));
    }

    public function edit(Socio $socio)
    {
        //
    }

    public function update(Request $request, Socio $socio)
    {
        //
    }

    public function destroy(Socio $socio)
    {
        //
    }
}
