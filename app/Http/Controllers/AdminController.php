<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Food;

use App\Models\Reservation;

use App\Models\Foodagen;

class AdminController extends Controller
{


    //users
    public function users()
    {
        $data=user::all();

        return view("admin.users",compact("data"));
    }

    // class deleteuser
    public function deleteuser($id)
    {
        $data=user::find($id);

        $data->delete();

        return redirect()->back();
    }

    // class foodmenu
    public function foodmenu()
    {
        $data= food::all();

        return view('admin.foodmenu', compact('data'));
    }


    //class updateview
    public function updateview($id)
    {
        $data = food::find($id);

        return view('admin.updateview',compact('data'));
    }


    //class update
    public function update(Request $request, $id)
    {
        $data = food::find($id);


        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('foodimage', $imagename);

            $data->image=$imagename;

            $data->title=$request->title;

            $data->price=$request->price;

            $data->description=$request->description;

            $data->save();

            return redirect()->back();


    }


    // class uploadfood

    public function uploadfood(Request $request)
    {

        $data = new food;

        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('foodimage', $imagename);

            $data->image=$imagename;

            $data->title=$request->title;

            $data->price=$request->price;

            $data->description=$request->description;

            $data->save();

            return redirect()->back();
    }


    // Class deletemenu
    public function deletemenu($id)
    {
        $data=food::find($id);

        $data->delete();

        return redirect()->back();
    }



    // class reservation
    public function reservation(Request $request)
    {
        $data = new reservation;

            $data->name=$request->name;

            $data->email=$request->email;

            $data->phone=$request->phone;

            $data->guest=$request->guest;

            $data->date=$request->date;

            $data->time=$request->time;

            $data->message=$request->message;

            $data->save();

            return redirect()->back();
    }


    // class viewreservation
    public function viewreservation()
    {
        $data = reservation::all();

        return view('admin.adminreservation', compact('data'));
    }

    // class viewagen
    public function viewagen()
    {
        $data= foodagen::all();

        return view('admin.adminagen', compact('data'));
    }

    //class uploadagen

    public function uploadagen(Request $request)
    {
        $data = new foodagen;

        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('agenimage', $imagename);

            $data->image=$imagename;

            $data->name=$request->name;

            $data->speciality=$request->speciality;

            $data->facebook=$request->facebook;

            $data->instagram=$request->instagram;

            $data->twitter=$request->twitter;

            $data->save();

            return redirect()->back();
    }


    // Class updateagen
    public function updateagen($id)
    {
        $data = foodagen::find($id);

        return view('admin.updateagen', compact('data'));
    }

    // Class updatefoodagen
    public function updatefoodagen(Request $request, $id)
    {
        $data = foodagen::find($id);

        $image = $request->image;

        if($image){

            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('agenimage', $imagename);

            $data->image=$imagename;
        }

            $data->name=$request->name;

            $data->speciality=$request->speciality;

            $data->facebook=$request->facebook;

            $data->instagram=$request->instagram;

            $data->twitter=$request->twitter;

            $data->save();

            return redirect()->back();

    }


    // Class deleteagen
    public function deleteagen($id)
    {
        $data = foodagen::find($id);

        $data->delete();

        return redirect()->back();
    }


    //class addagen
    public function addagen()
    {
        return view('admin.addagen');
    }

    //class addagen
    public function addmenu()
    {
        return view('admin.addmenu');
    }


}
