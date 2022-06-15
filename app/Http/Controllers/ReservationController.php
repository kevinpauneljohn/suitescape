<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Staycation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pending = Reservation::where('status', 'Pending')->whereDate('dateStart', '>=', date("Y-m-d"));
        $upComing = Reservation::where('status', 'Confirm')->whereDate('dateStart', '>', date("Y-m-d"))->count();
        $onGoing = Reservation::where('status', 'Confirm')->whereDate('dateStart', '<=', date("Y-m-d"))->whereDate('dateEnd', '>=', date("Y-m-d"));
        $completed = Reservation::where('status', 'Confirm')->whereDate('dateEnd', '<=', date("Y-m-d"));
        $cancelled = Reservation::where('status', 'Cancelled')->count();
        $overdue = Reservation::where('status', 'Pending')->whereDate('dateStart', '<=', date("Y-m-d"))->count();
        $pendcount = $pending->count();
        $goingCount = $onGoing->count();
        $compCount = $completed->count();
        $reservations = Reservation::all();
        $users = User::all();
        $users = User::all();
        $staycations = Staycation::all();
        return view('reservations.index',compact('reservations','pendcount','users','staycations','goingCount','compCount','cancelled','overdue','upComing'));
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
        $reservation = Reservation::create([
            'staycationId' => $request->input('staycationId'),
            'userId' => $request->input('userId'),
            'dateStart' => $request->input('dateStart'),
            'dateEnd' => $request->input('dateEnd'),
            'totalPrice' => $request->input('totalPrice'),
            'status' => $request->input('status'),

        ]);

        return redirect('/home')
                        ->with('success','Please wait for the confirmation of your reservation. Thank you');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        $users = User::all();
        $staycations = Staycation::all();
        return view('reservations.show',compact('reservation','users','staycations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        request()->validate([
            'status' => 'required',
        ]);
        $reservation->update($request->all());

        return redirect()->route('reservations.index')
                        ->with('success','Reservation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
