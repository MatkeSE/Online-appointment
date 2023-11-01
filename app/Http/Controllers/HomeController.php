<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; /*koristimo auth */

use App\Models\User; /*http models i tu nam je user tako smo dodali i doktora i appointment*/
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        { 
           if(Auth::user()->usertype=='0')
           {
            $doctor = doctor::all();
            return view('user.home',compact('doctor'));
           }
           if(Auth::user()->usertype=='1')
           {
           
            return view('admin.home');
           }
           if(Auth::user()->usertype=='2')
           {
           
            return view('moderator.home');
           }
            
           
        }
        else{
            return redirect()->back();
        }
    }
    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }
        else
    {
        $doctor = doctor::all();
        return view('user.home',compact('doctor'));
    }
    }

    public function appointment(Request $request)
    {
        $data = new appointment;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->phone=$request->number;
        $data->message=$request->message;
        $data->doctor=$request->doctor;
        $data->status='Obradjuje se';
        if(Auth::id())
        {
            $data->user_id=Auth::user()->id;

        }

        $data->save();

        return redirect()->back()->with('message', 'Zahtev za pregled poslat, kontaktiraćemo Vas.');
    }
    public function myappointment()
    {
        if(Auth::id())
        {
        $userid=Auth::user()->id;
        $appoint=appointment::where('user_id' , $userid)->get();

        return view('user.my_appointment', compact('appoint'));
        }
        else
        {
            return redirect()->back();
        }
    }
    public function cancel_appoint($id)
    {
     $data=appointment::find($id);

     $data->delete();

     return redirect()->back()->with('message', 'Pregled obrisan');
    ;
    }


    public function updateapp($id)
    {
        
      $data = appointment::find($id);
     return view('user.update_app',compact('data'));
    }

    public function editapp( Request $request, $id)
    {
      $data = appointment::find($id);
      $data->doctor=$request->doctor;

      $data->date=$request->date;
      $data->message=$request->message;
      
      $data->save();

     return redirect()->back()->with('message', 'Uspešno promenjeno');
    }
}
