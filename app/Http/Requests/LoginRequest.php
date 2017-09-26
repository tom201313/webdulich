<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class LoginRequest extends Request {


	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			"email"=>"required",
			"password"=>"required",
		];
	}
	public function messages(){
		return[
			"email.required"=>"Vui lòng nhập tài khoản",
			"password.required"=>"Vui lòng nhập mật khẩu",

		];


	}

}
