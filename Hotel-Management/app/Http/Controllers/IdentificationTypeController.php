<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IdentificationType;

class IdentificationTypeController extends Controller
{
    public function index() {
		return view('admin.pages.homeadmin');
	}

	public function showIdentificationType() {
		return view('admin.pages.IdentificationType.listIdentificationType');
	}

	public function addIdentificationType() {
       return view('admin.pages.IdentificationType.addIdentificationType');
    }

    public function postIdentificationType(BookingPuroseRequest $request) {
        $identification_type = new IdentificationType; // ten model
        $identification_type->save();
        return redirect()->route('listIdentificationType')->with('success','Add dish type to database is success!'); // Lay dia chi cua phan as ben route
        
    }

    // Edit follow id
    public function getEditIdentificationType($id) {
        $identification_type = IdentificationType::find($id);
        return view('admin.pages.IdentificationType.editIdentificationType',compact('dish_type'));
    }

    public function postEditIdentificationType($id,Request $request) {
        $identification_type = IdentificationType::find($id);
        $identification_type->label = Request::input('label');      
        $identification_type->save();
        return redirect()->route('listIdentificationType')->with('success','Edit is success!');
    }

    // delete product follow id
    public function deleteIdentificationType($id) {
        $identification_type = IdentificationType::find($id);
        $identification_type->delete($id);
        return back()->with('success','Delete is success');
    }
}
