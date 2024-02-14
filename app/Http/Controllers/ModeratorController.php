<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class ModeratorController extends Controller
{
  

    public function showapp()
    {
       $data=appointment::all();

      return view('moderator.showappointment',compact('data'));
    }
    public function approved($id)
    {
     $data=appointment::find($id);

     $data->status='Prihvaćen';
     $data->save();
     return redirect()->back();
    }

    public function canceled($id)
    {
     $data=appointment::find($id);

     $data->status='Odbijen';
     $data->save();
     return redirect()->back();
    }

    
   

  
}
