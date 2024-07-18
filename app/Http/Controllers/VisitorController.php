<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
   public function GetVisitorDetails(Request $request){
      $ip_address = $request->ip();
      $getCurrentTimeZone = $request->visit_time;
      Carbon::setLocale("en");
      $visitTime = Carbon::now($getCurrentTimeZone)->format("H:i:sa");
      $visitDate = date("d-m-Y");

      $result = Visitor::insert([
        'ip_address' => $ip_address,
        'visit_time' => $visitTime,
        'visit_date' => $visitDate,
      ]);
      return $result;
    }
}
