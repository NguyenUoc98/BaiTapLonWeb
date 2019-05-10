<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\House;
use Illuminate\Support\Facades\Auth;
use Hash;

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
    //Dang nhap va dang ky rieng
    public function getDangNhap(){
        return view('pages.login');
    }
    public function getDangKy(){
        return view('pages.register');
    }
    // phan thong tin ca nhan
    public function getInfor(){
        return view('pages.infor');
    }
    public function updateUser (Request $request) {
        $user = User::find(Auth::user()->id);
        $user ->update([
            'full_name' => $request->full_name,
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'CMND' => $request->CMND,
            'avatar' => $request->avatar

        ]);
        return redirect()->route('infor')->with('message',"Cập nhật tài khoản thành công");
    }
    // thay mat khau ngươi dung

    public function changePassword(Request $request) {
//        dd($request);
        if (!(Hash::check($request->currentpass,Auth::user()->password)))
        {
            //neu mat khau nhap vao khong dung voi mat khau hien tai
            return redirect()->back()->with("error","Mật khẩu bạn nhập không đúng");
        }
        if(strcmp($request->currentpassword, $request->newpass) == 0){
            //Mat khau moi trung voi mat khau cu
            return redirect()->back()->with("error","Mật khẩu mới của bạn không thể trùng với mật khẩu cũ.");
        }
        if(strcmp($request->newpassword, $request->checknewpass) != 0){
            //Mat khau moi trung voi mat khau cu
            return redirect()->back()->with("error","Mật khẩu mới và nhập lại mật khẩu phải giống nhau.");
        }
        $validatedData = $request->validate([
            'currentpass' => 'required',
            'newpass' => 'required|string|min:6|confirmed',
        ]);
        //Cap nhat mat khau moi
        $user = Auth::user();
        $user->password = bcrypt($request->new-password);
        $user->save();
        return redirect()->back()->with("success","Mật khẩu được đổi thành công !");


    }

}


