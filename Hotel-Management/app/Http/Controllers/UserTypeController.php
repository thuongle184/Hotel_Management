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
//index, show, create, store, edit, update and destroy //
class UserTypeController extends Controller
{
	// Tro ve trang chu admin
	public function getIndex(){
		return view('admin.pages.homeadmin');
	}


     //Hiển thị danh sách userType
	public function getShow() {
        $user_type = UserType::select('id', 'label')->get()->toArray();
		return view('admin/pages/user_type/listUserType',compact('user_type'));
	}

    // chạy đến file add trong folder view
	public function addUserType() {
		return view('admin/pages/user_type/addUserType');
	}
	
    // Lấy dữ liệu vừa nhập và lưu lại
	public function postUserType(userTypeRequest $request) {
        $userType = new UserType; // ten model
        $userType->label = $request->label;
        $userType->save();   
        return redirect()->route('listusertype')->with('success','Thêm sản phẩm thành công!'); // Lay dia chi cua phan as ben route
    }

    // delete product follow id
    public function deleteUserType($id) {
    	$user_type = UserType::find($id);
    	$user_type->delete($id);
    	return back()->with('success','Xóa sản phẩm thành công!');
    }

    
     // Edit user type follow id
    public function getEditUserType($id) {
    	$user_type = UserType::find($id);
    	return view('admin/pages/user_type/editUserType',compact('user_type'));
    }

    public function postEditUserType($id,userTypeRequest $request) {
    	$user_type = UserType::find($id);
    	$user_type->label = Request::input('label');    	
    	$user_type ->save();
    	return redirect()->route('listusertype')->with('success','Sửa sản phẩm thành công!');
    }
}
