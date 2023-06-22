<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class InfoController extends Controller
{
    public function info() {
        return view('information');
    }

    public function contact(Request $request)
    {
        $tuaemail = $request->input('tuaemail');
        $tuonome = $request->input('tuonome');
        $tuocognome = $request->input('tuocognome');
        
        // istanziamo un oggetto della classe ContactMail con i valori che abbiamo preso dalla request
        $informazioni = new ContactMail($tuaemail, $tuonome, $tuocognome);

        // comando per inviare la mail con Laravel
        Mail::to('staff@hack77.it')->send($informazioni);

        //  return redirect()->route('thankyou');
        // ? nella nuova versione di Laravel possiamo abbreviare la riga precedente con
        // return to_route('thankyou');

    }
}
