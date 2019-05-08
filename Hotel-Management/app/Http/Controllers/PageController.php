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

    public function getTrangchu(){
        return view('page.trangchu');
    }
    public function getAbout(){
        return view('page.about');
    }
    public function getService(){
        return view('page.service');
    }
    public function getContact(){
        return view('page.lienhe');
    }
    public function getRoom(){
        return view('page.room');
    }
    public function getNew(){
        return view('page.new');
    }
    public function getElement(){
        return view('page.element');
    }
}
