<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact(){
        return view('create');
    }

    public function confirm(Request $request){
         $contact = $request->only(['last_name', 'first_name','gender','email', 'tel', 'address','building','category_id','detail']);
         return view('confirm', compact('contact'));
    }

    public function store(Request $request){
        $contact = $request->only(['last_name', 'first_name','gender','email', 'tel', 'address','building','category_id','detail']);
        Contact::create($contact);
        return view('thanks');
    }




}
