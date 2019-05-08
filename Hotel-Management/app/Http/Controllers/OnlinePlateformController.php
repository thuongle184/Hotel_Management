<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OnlinePlateform;

class OnlinePlateformController extends Controller
{
    public function index() {
		return view('admin.pages.homeadmin');
	}

	public function showOnlinePlateform() {
		return view('admin.pages.OnlinePlateform.listOnlinePlateform');
	}

	public function addOnlinePlateform() {
       return view('admin.pages.OnlinePlateform.addOnlinePlateform');
    }

    public function postOnlinePlateform(BookingPuroseRequest $request) {
        $online_plateform = new OnlinePlateform; // ten model
        $online_plateform->save();
        return redirect()->route('listOnlinePlateform')->with('success','Add dish type to database is success!'); // Lay dia chi cua phan as ben route
        
    }

    // Edit follow id
    public function getEditOnlinePlateform($id) {
        $online_plateform = OnlinePlateform::find($id);
        return view('admin.pages.OnlinePlateform.editOnlinePlateform',compact('dish_type'));
    }

    public function postEditOnlinePlateform($id,Request $request) {
        $online_plateform = OnlinePlateform::find($id);
        $online_plateform->label = Request::input('label');      
        $online_plateform->save();
        return redirect()->route('listOnlinePlateform')->with('success','Edit is success!');
    }

    // delete product follow id
    public function deleteOnlinePlateform($id) {
        $online_plateform = OnlinePlateform::find($id);
        $online_plateform->delete($id);
        return back()->with('success','Delete is success');
    }
}
