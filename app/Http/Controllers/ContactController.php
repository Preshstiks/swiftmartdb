<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function SendContactDetails(Request $request){
    $name = $request->input("name");
    $email = $request->input("email");
    $message = $request->input("message");
    $contactDate = date("d-m-Y");
    $contactTime = date("H:i:sa");

    $result = Contact::insert([
        "name" => $name,
        "email" => $email,
        "message" => $message,
        "contact_date" => $contactDate,
        "contact_time" => $contactTime
    ]);
    return response()->json(["status" => "success", "message" => "Contact Sent Successfully"]);
  }
}
