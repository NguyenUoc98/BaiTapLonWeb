<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\House;
use Illuminate\Support\Facades\Auth;
use Hash;
use Illuminate\Support\Facades\DB;
use App\Comment;

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
        if (!isset($request->email)||!isset($request->password)){$message=2;}
        else if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            $message=0;
        } else {
            $message=1;
        }
        return $message;
    }

    //Xu ly chuc nang dang xuat
    public function getLogout(){
        Auth::logout();
        return redirect()->route('trang-chu');
    }

//    Xu ly chuc nang dang ky
    public function postRegister(Request $request){
        if(strcmp($request->password_re, $request->repassword) == 0){
            $message=3; // mat khau va nhap lai mat khau khong trung nhau
        }
//        else if(sizeof(User::where('email','=',$request->email_re)) > 0) {
//            $message=4; //ton tai tai khoan
//        }
        else {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email_re;
            $user->password = bcrypt($request->password_re);
            $user->full_name = $request->name;
            $user->phone_number = 0000;
            $user->save();
            $message = 0;
        }
        return $message;
    }

    public function getHouseDetail(Request $request){
        $house      = House::find($request->id);
        $user       = User::find($house->user_id);
        $comments   = Comment::all();
        return view('pages.house_detail', compact('house', 'user', 'comments'));
    }
    // Comment
//    public function postComment(Request $request){
//        $commnet = new Comment();
//        $user->id = $request->name;
//        $user->email = $request->email;
//        $user->password = bcrypt($request->password);
//        $user->full_name = $request->name;
//        $comment->content = $request->content;
//        $comment->save();
//        return view('pages.house_detail/{{id}}', compact('comments'));
//    }

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

        if (!isset($request->currentpassword)||!isset($request->newpass)||!isset($request->checknewpass))
        { $message="Các trường không được để trống !";}
        else if (!(Hash::check($request->currentpassword,Auth::user()->password)))
        {
            //neu mat khau nhap vao khong dung voi mat khau hien tai
            $message="Mật khẩu bạn nhập không đúng";
        }else if(strcmp($request->currentpassword, $request->newpass) == 0){
            //Mat khau moi trung voi mat khau cu
            $message="Mật khẩu mới của bạn không thể trùng với mật khẩu cũ.";
        }else if(strcmp($request->newpass, $request->checknewpass) != 0){
            //Mat khau moi khac voi nhap lai mat khau
            $message="Mật khẩu mới và nhập lại mật khẩu phải giống nhau.";
        }else{
//            $validatedData = $request->validate([
//                'currentpass' => 'required',
//                'newpass' => 'required|string|min:6|confirmed',
//            ]);
            //Cap nhat mat khau moi
            $user = Auth::user();
            $user->password = bcrypt($request->newpass);
            $user->save();
            $message="Mật khẩu được đổi thành công !";
        }

         return $message;
    }


    public function postTimKiem(Request $request){
        //dd($request->all());
        $giadau = 1000000*$request->price_from;
        $giacuoi = 1000000*$request->price_to;
        $sql = 'city_id='.$request->city_id.' and type_id='.$request->type.' and price between '.$giadau.' and '.$giacuoi;
        $houses = House::whereRaw($sql)->paginate(9);
        return view('pages.tim_kiem', compact('houses'));
    }

}


