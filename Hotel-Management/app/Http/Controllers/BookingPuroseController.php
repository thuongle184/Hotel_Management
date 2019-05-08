<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookingPurpose;

class BookingPuroseController extends Controller
{
    public function Index() {
		return view('admin.pages.homeadmin');
	}

	public function ShowBookingPurose() {
		return view('admin.pages.BookingPurpose.listBookingPurose');
	}

	public function AddBookingPurose() {
       return view('admin.pages.BookingPurpose.addBookingPurose');
    }

    public function postBookingPurose(BookingPuroseRequest $request) {
        $booking_purpose = new BookingPurose; // ten model
        $booking_purpose->save();
        return redirect()->route('listBookingPurpose')->with('success','Add booking purpose to database is success!'); // Lay dia chi cua phan as ben route
        
    }

    // Edit follow id
    public function getEditBookingPurose($id) {
        $booking_purpose = BookingPurose::find($id);
        return view('admin.pages.BookingPurpose.editBookingPurpose',compact('BookingPurose'));
    }

    public function postEditBookingPurose($id,Request $request) {
        $booking_purpose = BookingPurose::find($id);
        $booking_purpose->name = Request::input('label');      
        $booking_purpose->save();
        return redirect()->route('listBookingPurpose')->with('success','Sửa sản phẩm thành công!');
    }

    // delete product follow id
    public function deleteBookingPurose($id) {
        $booking_purpose = BookingPurose::find($id);
        $booking_purpose->delete($id);
        return back()->with('success','Delete is success');
    }
	
}