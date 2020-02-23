<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getSignin()
    {
    	return view('pages.signin');
    }

    public function getSignup()
    {
    	return view('pages.signup');
    }

    public function postSignin(Request $request)
    {
    	$request->validate(
    		[
    			'email' =>'required|email',
    			'password' =>'required|min:6|max:32'
    		],

    		[
    			'email.email' =>'Định dạng email chưa đúng',
    			'email.required' =>'Bạn chưa nhập email',
    			'password.required'=>'Bạn chưa nhập mật khẩu',
    			'password.min'=>'Mật khẩu có tối thiểu 6 ký tự',
    			'password.max'=>'Mật khẩu có tối đa 32 ký tự'
    		]);
    	if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
    		if(Auth::user()->level==1){
    			return redirect()->route('news.index');
    		}else{
    			return redirect()->route('home');
    		}
    	}else {
    		return back()->with('dangnhapthatbai','Đăng nhập thất bại!');
    	}

    }

    public function postSignup(Request $request)
    {
    	$request->validate(

    		[
    			'email' =>'required|email|unique:users,email',
    			'fullname' =>'required',
    			'password'=>'required|min:6|max:32'
    		], 
    		[
    			'email.email'=>'Định dạng email chưa đúng',
    			'email.required'=>'Bạn chưa nhập email',
    			'email.unique'=>'Email đã tồn tại',
    			'fullname.required'=>'Bạn chưa nhập họ và tên',
    			'password.required'=>'Bạn chưa nhập mật khẩu',
    			'password.min'=>'Mật khẩu tối thiểu là 6 ký tự',
    			'password.max'=>'Mật khẩu tối đa là 32 ký tự'
    		]);

	    $user = new user;
	    $user->name = $request->fullname;
	    $user->email = $request->email;
	    $user->password = bcrypt($request->password);
	    $user->save();
	    return redirect()->route('get.signin')->with('dangkythanhcong','Đăng ký tài khoản thành công!');
    }

    public function getUserInfo()
    {
    	$id = Auth::user()->id;
    	$data['userinfo'] = user::find($id);
    	return view('pages.user', $data);
    }

    public function postUserInfo(Request $request, $id)
    {
    	$user = user::find($id);
    	$user->email = $request->email;
    	$user->name = $request->name;
    	$user->save();
    	return back();
    }

    public function postChangePassword(Request $request, $id)
    {
    	$request->validate(
    		[
    			'oldpassword' =>'required|min:6|max:32',
    			'newpassword' =>'required|min:6|max:32',
    			're_newpassword' =>'required|same:newpassword|min:6|max:32'
    		]
    		,
    		[
    			'oldpassword.required'=>'Bạn chưa nhập mật khẩu cũ',
    			'newpassword.required'=>'Bạn chưa nhập mật khẩu mới',
    			're-newpassword.required'=>'Bạn chưa nhập lại mật khẩu cũ',
    			'oldpassword.min'=>'Mật khẩu phải có tối thiếu 6 ký tự',
    			'oldpassword.max'=>'Mật khẩu không vượt qua 22 ký tự',
    			'newpassword.min'=>'Mật khẩu phải có tối thiếu 6 ký tự',
    			'newpassword.max'=>'Mật khẩu không vượt qua 22 ký tự',
    			're-newpassword.same'=>'Mật khẩu nhập lại không khớp',
    		]);
    	$hashedPassword = user::find($id)->password;
    	if(Hash::check($request->oldpassword, $hashedPassword)){
    		$user = user::find($id);
    		$user->password = bcrypt($request->newpassword);
    		$user->save();
    		return back()->with('doimatkhauthanhcong','Đổi mật khẩu thành công!');
    	}else{
    		return back()->with('matkhaukhongdung','Mật khẩu không đúng!');
    	}

    }

    public function getSignOut()
    {
    	Auth::logout();
    	return redirect()->route('home');
    }
}
