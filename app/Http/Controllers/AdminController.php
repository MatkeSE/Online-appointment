<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request) /*request-amo dokora*/
    {
      $doctor=new doctor; /*dodajemo doktor modela*/

      $image=$request->file;

      $imagename=time().'.'.$image->getClientOriginalExtension();

      $request->file->move('doctorimage',$imagename);

      $doctor->image=$imagename;

      $doctor->name=$request->name;
      $doctor->phone=$request->phone;
      $doctor->room=$request->room;
      $doctor->speciality=$request->speciality;


      $doctor->save();

      return redirect()->back()->with('message','Doktor uspesno dodat'); 
    }

    public function showappointment()
    {
       $data=appointment::all();

      return view('admin.showappointment',compact('data'));
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

    
    public function showdoctor()
    {
     $data = doctor::all();
     return view('admin.showdoctor', compact('data'));
    }

    public function deletedoctor($id)
    {
     $data = doctor::find($id);
     $data->delete();
     return redirect()->back();
    }

    public function updatedoctor($id)
    {
      $data = doctor::find($id);
     return view('admin.update_doctor',compact('data'));
    }

    public function editdoctor( Request $request, $id)
    {
      $data = doctor::find($id);
      $data->name=$request->name;
      $data->phone=$request->phone;
      $data->speciality=$request->speciality;
      $data->room=$request->room;
      $image=$request->file;
       if($image)
       {
      $imagename=time(). '.' .$image->getClientOriginalExtension();
      $request->file->move('doctorimage', $imagename);
      $data->image=$imagename;
       }
      $data->save();

     return redirect()->back()->with('message', 'Informacije o doktoru izmenjene.');
    }
}
