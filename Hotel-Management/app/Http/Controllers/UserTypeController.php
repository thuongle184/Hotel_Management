<?php

namespace App\Http\Controllers;

use App\UserType;
use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Http\Requests\TableRequest;
use Input,File;
use DB;     
use Session;

class UserTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $userType = UserType::select('id', 'label')->get()->toArray();
      return view('userType/index', compact('userType'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userType/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TableRequest  $request)
    {
        $userType = new UserType; // ten model
        $userType->label = $request->label;
        $userType->save();
        return redirect()->route('userTypes')->with('success','Thêm sản phẩm thành công!'); // Lay dia chi cua phan as ben route
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function show(UserType $userType)
    {
        $userType = UserType::find($id);
        return view('userType/show',compact('userType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function edit(TableRequest $userType)
    {
        $userType = UserType::find($id);
        return view('userType/edit',compact('userType'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserType $userType)
    {
        $userType = UserType::find($userType);
        $userType->label = Request::input('label');
        $userType->save();
        return redirect()->route('listUserType')->with('success','Sửa sản phẩm thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserType $userType)
    {
        $userType = UserType::find($userType);
        $userType->delete($id);
        return back()->with('success','Xóa sản phẩm thành công!');
    }
}
