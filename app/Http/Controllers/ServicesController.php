<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CustomPhp\Appointment;
use App\CustomPhp\CalendarHelper;
use App\Service;
use App\Booking;

use Session;
use Auth;

class ServicesController extends Controller
{


      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //Sesion insertion for service booking for
        try {

            $service = Service::find($id);
            $clientPreviousBookings = Booking::where('bookings.user_id' , '=' , Auth::user()->id)->get();

            if(count($clientPreviousBookings) == 0){
                $appointment = new Appointment($id , $service->name , 0.00);
            }else{
                $appointment = new Appointment($id , $service->name , $service->price);
            }
            
            Session::put('appointment' , $appointment);
           
            $calenderHalper = new  CalendarHelper();
            return view('pages/servicebooking')->with('calenderHalper' , $calenderHalper)->with('service', $service);
            
        } catch (\Throwable $th) {
            
        }
        
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
