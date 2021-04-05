<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Booking;
use Session;
use Auth;
use Mail;

class BookingsController extends Controller
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
       //Works as expected
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Works as expected
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        try {

            if(Session::has('appointment')){
                $appointment = Session::get('appointment');
                
                $booking = new Booking;
    
                $booking->service_id = $appointment->getService();
                $booking->session_date = $appointment->getDate();
                $booking->session_time = $appointment->getTime();
                $booking->user_id = Auth::user()->id;
                $booking->save();
                /*
                //Send emial to client
                $to_name = Auth::user()->name;
                $to_email = Auth::user()->email;
                $data = array('service' => $appointment->getServiceName() , 'date' => $appointment->getDate() , 'time' => $appointment->getTime() , 'price' => $appointment->getPrice());
                Mail::send('emails.mail', $data , function($message) use ($to_name, $to_email) {
                    $message->to($to_email, $to_name)
                    ->subject('Appointment Appreciation');
                    $message->from('berveyhair@gmail.com','Bervey');
                });
                
                //Send emial to Bervey
                $to_name = 'Bervey';
                $to_email = 'berveyhair@gmail.com';
                $data = array('service' => $appointment->getServiceName() , 'date' => $appointment->getDate() , 'time' => $appointment->getTime() , 'price' => $appointment->getPrice() , 'clientName' => Auth::user()->name);
                Mail::send('emails.appointmentnotify', $data , function($message) use ($to_name, $to_email) {
                    $message->to($to_email, $to_name)
                    ->subject('Appointment Notification');
                    $message->from('berveyhair@gmail.com','Bervey');
                });
                */
                Session::forget('appointment');
                
                return view('pages/bookingAppreciation');
    
            }else{
                return redirect('/dashboard');
            }
            
        } catch (\Throwable $th) {
            
        }
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      

        
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
        //Goes to show
        echo "What the fuck is happening update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Goes to show
        echo "What the fuck is happening destroy";
    }
}
