<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class IndexController extends Controller
{
   public function index()
   {
    $contact=Contact::all();
    return view('admin.index',compact('contact'));
   }
}
