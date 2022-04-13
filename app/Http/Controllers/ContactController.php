<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function insert(Request $request)
    {
        $contact = new Contact();
        $contact->name=$request->input('name');
        $contact->subject=$request->input('subject');
        $contact->email=$request->input('email');
         
         $contact->message=$request->input('message');
         $contact->save();
        return redirect('index');
        
    }
}
