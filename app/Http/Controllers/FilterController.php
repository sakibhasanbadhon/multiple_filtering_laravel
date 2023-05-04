<?php

namespace App\Http\Controllers;

use App\Models\Filter;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;

class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filter = Filter::orderBy('id','DESC')->get();
        return view('index',['filter'=>$filter]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'agentName' => 'required',
            'openCall'  => 'required',
            'closeCall' => 'required',
            'potential' => 'required'
        ]);


        Filter::create([
            'agentName' => $request->agentName,
            'openCall' => $request->openCall,
            'closeCall' =>$request->closeCall,
            'potential' =>$request->potential
        ]);

        return back()->with('success','save successful');

    }

    public function filterGetData(Request $request)
    {
        dd($request->all());


        // if ($request->ajax()) {

        //     // Console.log($request->all());
        //     console.log("Hello world!");
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
