<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use Auth;
use App\Http\Requests\productsRequest;
use Input,File;
use DB,Mail;     
use Session;
use Illuminate\Support\MessageBag;

class PageController extends Controller
{
     
    
    public function getadmin(){
        return view('admin.pages.homeadmin');
    }

    public function getListCus() {
        $customer = customer::select('id', 'name','gender','email','address','phone_number','note')->get()->toArray();
        return view('admin.pages.customer.listCus', compact('customer'));
    }

    public function getlistUser() {
        $users = user::select('id', 'full_name','email','password','phone','address')->get()->toArray();
        return view('admin.pages.user.listUser', compact('users'));
    }

    
}
