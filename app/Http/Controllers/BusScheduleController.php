<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operator;
use App\Region;
use App\Sub_Region;
use App\Buses;
use App\BusSchedule;


class BusScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operators= Operator::all();
        $buses= Buses::all();
        $schedules=BusSchedule::all();
        $regions = Region::all();
        return view ('admin.bus_schedule.bus-schedule-list', 
        compact('operators','buses','schedules','regions'));
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

    public function showOperator(Request $request){
        if ($request->ajax()){
            return response(Buses::where('operator_id', $request->operator_id)-> get());
        }


    }
    public function showRegion(Request $request){
        if ($request->ajax()){
            return response(SubRegion::where('operator_id', $request->region_id)-> get());
        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('post')){

            $data =$request ->all();

            if(empty($data['return_date'])){

                $data['return_date']="";

            }
            $busSchedule = New BusSchedule;
            $busSchedule->bus_id=$data['bus_id'];
            $busSchedule->operator_id=$data['operator_id'];
            $busSchedule->region_id=$data['region_id'];
            $busSchedule->sub_region_id=$data['sub_region_id'];
            $busSchedule->depart_date=$data['depart_date'];
            $busSchedule->return_date=$data['return_date'];
            $busSchedule->depart_time=$data['depart_time'];
            $busSchedule->return_time=$data['return_time'];
            $busSchedule->pickup_address=$data['pickup_address'];
            $busSchedule->dropoff_address=$data['dropoff_address'];
            $busSchedule->status=$data['status'];
            //$busSchedule->create_at=$date("Y-m-d H:i:s");
            ///$busSchedule->updated_at=$date("Y-m-d H:i:s");

            $busSchedule->save();
            return redirect('bus-Schedule')->with('success','Schedule Saved Successfully');

        }
        
        

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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
