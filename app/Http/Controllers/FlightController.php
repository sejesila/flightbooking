<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\City;
use App\Models\Flight;
use App\Models\Route;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $cities = City::all();
        $airlines= Airline::all();


       $flights = Flight::with('from_cities','to_cities','routes')->get();


//        if ($request->from){
//            $flights = Flight::where('from','like','%'.$request->from.'%')->get();
//            //dd($flights);
//
//        }
//        if ($request->to){
//            //dd($request->to);
//            $flights = Flight::where('to','like','%'.$request->to.'%')->get();
//           // dd($flights);
//
//        }
//        if ($request->depart_date){
//
//            $flights = Flight::select("*")
//                                ->whereBetween('departure_date',[
//                                $request->depart_date,
//                                $request->returning_date])
//                                ->get();
//
//
//        }
//        if ($request->returning_date){
//            $flights = Flight::select("*")
//                                 ->whereBetween('arrival_date',[
//                                 $request->depart_date,
//                                 $request->returning_date])
//                                 ->get();
//
//        }
        if ($request->from && $request->to && $request->returning_date && $request->depart_date){
            $flights = Flight::where('from','like','%'.$request->from.'%')
                               ->where('to','like','%'.$request->to.'%')
                                ->whereBetween('arrival_date',[$request->depart_date,$request->returning_date])

                                ->whereBetween('departure_date',[
                                $request->depart_date,
                                $request->returning_date])
                               ->get();
            dd($flights);

        }





        return view('flights.index',compact('cities','airlines','flights'));
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
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function show(Flight $flight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function edit(Flight $flight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flight $flight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flight $flight)
    {
        //
    }
}
