<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DishType;

class DishTypeController extends Controller
{
    public function index() {
		return view('admin.pages.homeadmin');
	}

	public function showDishType() {
		return view('admin.pages.DishType.listDishType');
	}

	public function addDishType() {
       return view('admin.pages.DishType.addDishType');
    }

    public function postDishType(BookingPuroseRequest $request) {
        $dish_type = new DishType; // ten model
        $dish_type->save();
        return redirect()->route('listDishType')->with('success','Add dish type to database is success!'); // Lay dia chi cua phan as ben route
        
    }

    // Edit follow id
    public function getEditDishType($id) {
        $dish_type = DishType::find($id);
        return view('admin.pages.DishType.editDishType',compact('dish_type'));
    }

    public function postEditDishType($id,Request $request) {
        $dish_type = DishType::find($id);
        $dish_type->label = Request::input('label');      
        $dish_type->save();
        return redirect()->route('listDishType')->with('success','Edit is success!');
    }

    // delete product follow id
    public function deleteDishType($id) {
        $dish_type = DishType::find($id);
        $dish_type->delete($id);
        return back()->with('success','Delete is success');
    }
}
