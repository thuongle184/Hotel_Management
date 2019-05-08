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

     
    public function getTrangchu(){
        return view('layouts.page.trangchu');
    }
    public function getAbout(){
        return view('layouts.page.about');
    }
    public function getService(){
        return view('layouts.page.service');
    }
    public function getContact(){
        return view('layouts.page.lienhe');
    }
    public function getRoom(){
        return view('layouts.page.room');
    }
    public function getNew(){
        return view('layouts.page.new');
    }
    public function getElement(){
        return view('layouts.page.element');
    }
}
