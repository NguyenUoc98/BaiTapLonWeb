<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function getIndex(){
        $houses = House::orderBy('created_at','desc')->paginate(9);
        return view('pages.home', compact('houses'));
    }

    public function getCategory(Request $request){
        $houses = House::where('type_id', $request->id)->paginate(9);
        return view('pages.category', compact('houses'));
    }
    public function postLogin (Request $request){
        $this->validate($request,[
            'email' =>'required|email',
            'password' => 'required|min:6'
        ],[
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
        ]);

        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            return redirect()->route('trang-chu');
        } else {
            return redirect()->route('trang-chu')->with('erorr',"Đăng nhập không thành công");
        }
    }
}

