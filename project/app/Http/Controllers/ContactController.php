<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contacts.contact', ['contacts' => Contact::all()]);
    }
}
