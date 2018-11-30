<?php

namespace App\Http\Controllers;

use App\igrate;
use Illuminate\Http\Request;

class 14101_Raihan_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$data = 14101_Raihan_model::all();
        return view ('customer', compact('data'));
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
     * @param  \App\igrate  $igrate
     * @return \Illuminate\Http\Response
     */
    public function show(igrate $igrate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\igrate  $igrate
     * @return \Illuminate\Http\Response
     */
    public function edit(igrate $igrate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\igrate  $igrate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, igrate $igrate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\igrate  $igrate
     * @return \Illuminate\Http\Response
     */
    public function destroy(igrate $igrate)
    {
        //
    }
}
