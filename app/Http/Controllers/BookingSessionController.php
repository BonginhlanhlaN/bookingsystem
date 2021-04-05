<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use Session;
use Auth;

class BookingSessionController extends Controller{

    public function getDaySessions(Request $request){

        try {

            $bookedDay = $request->bookedday;//From Ajax

            //Sesion insertion day of appointment
            $appointment = Session::get('appointment');
            $appointment->setDate($bookedDay);
            Session::put('appointment' , $appointment);

            $bookedDaySchedule = Booking::where('bookings.session_date' , '=' , $bookedDay)->get();

            if(count($bookedDaySchedule) > 0){
                
                $isAlreadyBooked = false;
                foreach ($bookedDaySchedule as $value) {
                    if($value->user_id == Auth::user()->id){
                        $isAlreadyBooked = true;
                        break ;
                    }
                }

                if($isAlreadyBooked == true){
                    return response()->json(['bookingstatus' => 'already booked on day']); 
                }
                
            }

            return response()->json($bookedDaySchedule);

        } catch (\Throwable $th) {
            
        }

    } 

    public function saveTimeSession(Request $request){
        
        try {

            $bookedTime = $request->bookedtime;//From Ajax

            //Sesion insertion time of appointment
            $appointment = Session::get('appointment');
            $appointment->setTime($bookedTime);
            Session::put('appointment' , $appointment);
            $appoint = Session::get('appointment');

            return response()->json(['Status'=> $appoint->getTime()]);
            
        } catch (\Throwable $th) {
            
        }

    }

}
