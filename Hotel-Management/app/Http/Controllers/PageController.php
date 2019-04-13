<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
class PageController extends Controller
{
    public function gettrangchu(){
    	return view('layout.pages.trangchu');
    }

    public function getloaiSP(){
    	return view('layout.pages.loai_sanpham');
    }

    public function getChitiet(){
    	return view('layout.pages.chitiet_sanpham');
    }

    public function getLH(){
    	return view('layout.pages.lienhe');
    }

    public function getAbout(){
    	return view('layout.pages.about');
    }
    

    public function getList() {
        $customer = customer::select('id', 'name','gender','email','address','phone_number','note')->get()->toArray();
        return view('admin.pages.list', compact('customer'));
    }
     public function master() {
        return view('layout.master');
    }
    
}
