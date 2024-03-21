<?php

namespace App\Http\Controllers;

use App\Models\cicles;
use Illuminate\Http\Request;

class CiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $actiu = $request->input('actiuBuscar');

         if ($actiu == 'actiu')
          {
            $cicles = Cicles::where('actiu','=', true)
                             ->get();
         }
         else {
            $cicles = Cicles::all();

         }
        
        $request->session()->flashInput($request->input());


        return view("cicles.index", compact("cicles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(cicles $cicles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cicles $cicles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cicles $cicles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cicles $cicles)
    {
        //
    }
}
