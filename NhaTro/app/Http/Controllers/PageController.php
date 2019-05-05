<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\House;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
=======
use App\Comment;
>>>>>>> 8f4c7542d6e2a26e040e2021b799916ca0920247

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
        $house      = House::find($request->id);
        $user       = User::find($house->user_id);
        $comments   = Comment::all();
        return view('pages.house_detail', compact('house', 'user', 'comments'));
    }
    // Comment
    public function postComment(Request $request){
        $commnet = new Comment();
        $user->id = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->full_name = $request->name;
        $comment->content = $request->content;
        $comment->save();
        return view('pages.house_detail/{{id}}', compact('comments'));
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

    public function postTimKiem(Request $request){
        //dd($request->all());
        $giadau = 1000000*$request->price_from;
        $giacuoi = 1000000*$request->price_to;
        $sql = 'city_id='.$request->city_id.' and type_id='.$request->type.' and price between '.$giadau.' and '.$giacuoi;
        $houses = House::whereRaw($sql)->paginate(9);
        return view('pages.tim_kiem', compact('houses'));
    }
}


