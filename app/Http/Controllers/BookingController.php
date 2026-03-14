<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\QuickEnquiry;
use App\Models\TourBooking;
use App\Models\TransportBooking;
use App\Models\ContactMessage;

class BookingController extends Controller
{

    // Home Quick Enquiry Form
    public function quickEnquiry(Request $request)
    {

        $data = $request->only(['name','phone','destination']);

        // DATABASE SAVE
        QuickEnquiry::create($data);

        // EMAIL SEND
        Mail::raw(
            "New Enquiry\n\n".
            "Name: ".$data['name']."\n".
            "Phone: ".$data['phone']."\n".
            "Destination: ".$data['destination'],

            function ($message) {

                $message->to([
                    'ashupanwar5684@gmail.com',
                    'uttaranchaltravels.in@gmail.com'
                ])
                ->subject('New Enquiry - Uttaranchal Travels');

            }
        );

        return back()->with('success','Enquiry Sent Successfully');

    }


    // Tour Booking
    public function tourBooking(Request $request)
    {

        TourBooking::create($request->all());

        return back()->with('success','Tour Booked Successfully');
    }


    // Transport Booking
    public function transportBooking(Request $request)
    {

        TransportBooking::create($request->all());

        return back()->with('success','Transport Booked Successfully');
    }


    // Contact Form
    public function contactMessage(Request $request)
    {

        ContactMessage::create($request->all());

        return back()->with('success','Message Sent Successfully');
    }

}