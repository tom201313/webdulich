<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request {


	public function authorize()
	{
		return true;
	}


	public function rules()
	{
		return [
			'username'=>'required|unique:users,username',
			'password'=>'required',
			'passwordRe'=>'required|same:password',
			'email'=>'email',
		];
	}
	public function messages(){
		return [
			'username.required'=>'Tài khoản không thể bỏ trống',
			'username.unique'=>'Tài khoản đã tồn tại',
			'password.required'=>'Mật khẩu không thể bỏ trống',
			'passwordRe.required'=>'Nhập lại mật khẩu không thể bỏ trống',
			'passwordRe.same'=>'Mật khẩu không khớp',
			'email'=>'Không phải một email',
		];
	}
}
