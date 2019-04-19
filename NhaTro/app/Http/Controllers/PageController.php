<?php

namespace App\Http\Controllers;

use App\User;
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

    //Xu ly chuc nang dang nhap
    public function postLogin (Request $request){
        $this->validate($request,[
            'email' =>'required|email',
            'password' => 'required|min:6'
        ],[
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
        ]);

        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            return redirect()->route('trang-chu');
        } else {
            return redirect()->route('trang-chu')->with('erorr',"Đăng nhập không thành công");
        }
    }

    //Xu ly chuc nang dang xuat
    public function getLogout(){
        Auth::logout();
        return redirect()->route('trang-chu');
    }

//    Xu ly chuc nang dang ky
    public function postRegister(Request $request){
        $this->validate($request,[
            'email' =>'required|email',
            'password' => 'required|min:6',
            'repassword' => 'required|same:password',
        ],[
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
            'repassword.required' => 'Bạn chưa nhập lại mật khẩu',
            'repassword.same'=> 'Mật khẩu nhập lại chưa trùng khớp',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->full_name = $request->name;
        $user->phone_number = 0000;
        $user->save();

        return redirect()->route('trang-chu')->with('thongbao',"Đăng ký tài khoản thành công");
    }

    public function getHouseDetail(Request $request){
        $house = House::find($request->id);
        $user = User::find($house->user_id);
        return view('pages.house_detail', compact('house', 'user'));
    }

    public function getAddHouse(){
        return view('pages.add_house');
    }

}


