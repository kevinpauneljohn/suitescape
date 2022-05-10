<?php

namespace App\Http\Controllers;

use App\Models\Staycation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaycationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:staycation-list|staycation-create|staycation-edit|staycation-delete', ['only' => ['index','show']]);
         $this->middleware('permission:staycation-create', ['only' => ['create','store']]);
         $this->middleware('permission:staycation-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:staycation-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staycations = Staycation::where('userid', Auth::id())->latest()->paginate(5);

        return view('staycations.index',compact('staycations'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staycations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
            'price' => 'required',
            'userid' => 'required',
        ]);

        Staycation::create($request->all());

        return redirect()->route('staycations.index')
                        ->with('success','Staycation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Staycation $staycation)
    {
        return view('staycations.show',compact('staycation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Staycation $staycation)
    {
        return view('staycations.edit',compact('staycation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staycation $staycation)
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
            'price' => 'required',
        ]);

        $staycation->update($request->all());

        return redirect()->route('staycations.index')
                        ->with('success','Staycation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staycation $staycation)
    {
        $staycation->delete();

        return redirect()->route('staycations.index')
                        ->with('success','Staycation deleted successfully');
    }



    public function calendar()
    {
        

        return view('staycations.calendar');
    }






}
