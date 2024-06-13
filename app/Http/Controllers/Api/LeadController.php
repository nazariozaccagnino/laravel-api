<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;
use App\Mail\NewContact;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller

{
    public function store(Request $request){
        $data = $request->all();
        $lead = new Lead();
        $lead->fill($data);
        $lead->save();

        Mail::to('info@boolpress.com')->send(new NewContact($lead));
    }
}
