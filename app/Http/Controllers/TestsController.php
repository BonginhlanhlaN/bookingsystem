<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use Nexmo;

class TestsController extends Controller
{
    public function testEmail(){
        
        $to_name = 'Nhlanhla';
        $to_email = 'bsngema7@gmail.com';
        $data = array('service' => "Glueless Lace-Frontal" , 'date' => "2020-05-17" , 'time' => "14:00" , 'price' => "500");
        Mail::send('emails.mail', $data , function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject('Appointment Appreciation');
            $message->from('berveyhair@gmail.com','Test Mail');
        });

        return view('pages/bookingAppreciation');

    }

    public function testNexmo(){

        Nexmo::message()->send([
            'to'   => '+27604902679',
            'from' => '+27718744484',
            'text' => 'Bervey sms test.'
        ]);

    }
}
