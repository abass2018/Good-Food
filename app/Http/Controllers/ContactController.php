<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(  )
    {
        $contact=Contact::all();
        return view('admin.contact.index',compact('contact'));
    }
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

    public function destroy($id)
    {
     $contact=Contact::find($id);  
      
     $contact->delete();
         return redirect('/admin-index')->with('status','Contact Deleted Successfully');
    }
}
