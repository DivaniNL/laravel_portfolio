<?php

namespace App\Http\Controllers;
use App\Models\Werk;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function ContactRequest(Request $request)
   {
       return view('contact_success', [
           'voornaam' => $request->input('first_name')
       ]);
   }
}
