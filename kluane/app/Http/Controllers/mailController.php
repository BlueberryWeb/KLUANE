<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactMail;


class mailController extends Controller
{
    public function store(Request $request)
    {
        $message = request()->validate([
            'name' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'city' => 'required',
            'position' => 'required',
            'message' => 'required'
        ]);

        if ($request->country == 'CANADA') {     
            Mail::to('info@kluanedrilling.ca')->queue(new contactMail($message));
            return redirect()->back();
        } elseif($request->country == 'AFRICA') {
            Mail::to('info@kluanedrilling.ca')->queue(new contactMail($message));
            return redirect()->back();
        }
        elseif($request->country == 'MEXICO') {
            Mail::to('victoria@kluanedrilling.ca')->queue(new contactMail($message));
            return redirect()->back();
        }elseif($request->country == 'GUATEMALA') {
            Mail::to('info@kluanedrilling.ca')->queue(new contactMail($message));
            return redirect()->back();
        }elseif($request->country == 'PANAMA') {
            Mail::to('info@kluanedrilling.ca')->queue(new contactMail($message));
            return redirect()->back();
        }elseif($request->country == 'DOMINICAN REPUBLIC') {
            Mail::to('info@kluanedrilling.ca')->queue(new contactMail($message));
            return redirect()->back();
        }elseif($request->country == 'COLOMBIA') {
            Mail::to('jhon.puerta@kluanecolombia.com')->queue(new contactMail($message));
            return redirect()->back();
        }elseif($request->country == 'ECUADOR') {
            Mail::to('carlos.vaca@kluane-ecuador.ec')->queue(new contactMail($message));
            return redirect()->back();
        }elseif($request->country == 'CHILE') {
            Mail::to('victoria@kluanedrilling.ca')->queue(new contactMail($message));
            return redirect()->back();
        }elseif($request->country == 'PERU') {
            Mail::to('carlos.vaca@kluane-ecuador.ec')->queue(new contactMail($message));
            return redirect()->back();
        }elseif($request->country == 'NICARAGUA') {
            Mail::to('juan.zapata@kluanedrilling.ca')->queue(new contactMail($message));
            return redirect()->back();
        }else{

        }
        
        
        
    }
}
