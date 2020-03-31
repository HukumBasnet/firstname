<?php

namespace App\Http\Controllers;

use App\Chartered;
use Illuminate\Http\Request;

class ChateredController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chatered = Chartered::latest()->paginate(5);
  
        return view('Chatered.index',compact('chatered'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chatered.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'type' => 'required',
        ]);
  
        Chartered::create($request->all());
   
        return redirect()->route('chatered.index')
                        ->with('success','Chatered created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chartered  $chartered
     * @return \Illuminate\Http\Response
     */
    public function show(Chartered $chartered)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chartered  $chartered
     * @return \Illuminate\Http\Response
     */
    public function edit(Chartered $chartered)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chartered  $chartered
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chartered $chartered)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chartered  $chartered
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chartered $chartered)
    {
        
    }
}
