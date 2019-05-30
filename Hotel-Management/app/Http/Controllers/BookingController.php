<?php

namespace App\Http\Controllers;
use Session;
use Mail;
use App\Mail\SendEmail;
use App\Booking;
use App\User;
use App\BookingType;
use App\Room;
use App\BookingPurpose;
use Illuminate\Http\Request;
use App\Http\Requests\BookingRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkIfAllowed', ['except' => ['create', 'store']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = User::with(['bookings' => function ($booking) { $booking->orderBy('id'); }])
        ->get();
    
      return view('booking/index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {       
        $booking = new Booking;
        $users = User::orderBy('id')->get();
        $bookingTypes = BookingType::orderBy('id')->get();
        $room = Room::find($request->get('roomId'));
        $bookingPurposes = BookingPurpose::orderBy('id')->get();
        
        return view(
          'booking/create',
          compact('room','booking', 'users', 'bookingTypes', 'bookingPurposes')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $booking = new Booking; // ten model
        $booking->booking_type_id = $request->booking_type_id;
        $booking->user_id = $request->user_id;
        $booking->room_id= $request->room_id;
        $booking->entry_date=$request->entry_date;
        $booking->exit_date= $request->exit_date;
        $booking->booking_purpose_id=$request->booking_purpose_id;
        $booking->save();


        Mail::to(Auth::user())->send(new SendEmail('Đặt hàng'," $booking->entry_date, $booking->exit_date"));
        // return 
         
        //   redirect()->route('welcome')->with('success','Add success!');
        echo "ok";

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
