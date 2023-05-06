<?php

namespace App\Http\Controllers;

use App\Models\Filter;
use Dflydev\DotAccessData\Data;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;
use Illuminate\Support\Facades\DB;

class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $agents = Filter::select('id','agentName')->get();
        $total_call = Filter::get()->count();
        $open_call = Filter::where('call_status',1)->get()->count();
        $close_call = Filter::where('call_status',2)->get()->count();
        $potential = Filter::where('potential',1)->get()->count();

        $data = [
            'agents'=>$agents,
            'total_call'=>$total_call,
            'open_call'=>$open_call,
            'close_call'=>$close_call,
            'potential'=>$potential
        ];

        return view('index',$data);
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

        Filter::create([
            'agentName' => $request->agentName,
            'call_status' => $request->call_status,
            'potential' =>$request->potential
        ]);

        return back()->with('success','save successful');

    }

    public function filterGetData(Request $request)
    {

        $data = Filter::where('agentName', '=' , $request->name)->get();

        if ($data) {
            $open_call = Filter::where('agentName', $data)->where('call_status',1)->get()->count();



        }



        // SELECT sum(social + math + science ) as total FROM student_sum

        return view('index',$open_call);

        return back();
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
