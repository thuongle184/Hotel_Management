<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Validator;
use Auth;
use App\UserType;
use App\Http\Requests\userTypeRequest;
use Input,File;
use DB;     
use Session;
use Request;

class UserTypeController extends Controller
{
    //Hiển thị danh sách user type
    public function getlistUserType() {
        $user_type = UserType::select('id', 'label')->get()->toArray();
        return view('admin/pages/User_Type/listUserType',compact('user_type'));
    }

    // chạy đến file add trong folder view
    public function addUserType() {
        return view('admin/pages/User_Type/addUserType');
    }

    // Lấy dữ liệu vừa nhập và lưu lại
    public function postUserType(UserTypeRequest $request) {
        $user_type = new UserType; // ten model
        $user_type->label = $request->label;
       	$user_type->save();
        return redirect()->route('listUserType')->with('success','Thêm sản phẩm thành công!'); // Lay dia chi cua phan as ben route
         
    }


    // delete follow id
    public function deleteUserType($id) {
        $user_type = UserType::find($id);
        $user_type->delete($id);
        return back()->with('success','Xóa sản phẩm thành công!');
    }

    // Edit product follow id
    public function getEditUserType($id) {
        $user_type = UserType::find($id);
        return view('admin/pages/User_type/editUserType',compact('user_type'));
    }


    public function postEditUserType($id,UserTypeRequest $request) {
        $user_type = UserType::find($id);
        $user_type->label = Request::input('label');
        $user_type->save();
        return redirect()->route('listUserType')->with('success','Sửa sản phẩm thành công!');
    }
}
