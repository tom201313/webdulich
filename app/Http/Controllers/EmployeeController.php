<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\employees;
use Illuminate\Http\Request;
use Hash;
//use Illuminate\Support\Facades\Auth;
use Auth;
class EmployeeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response

     */

    public function getLogoutAdmin(){

        Auth::logout();
        return redirect()->route('login');
    }
	public function getAdd(){

	    return view('admin.employee.add');
    }
    public function postAdd(Request $request){
        $this->validate($request,[

            'email'=>'required|email|unique:employees,email',
            'password'=>'required|min:5|max:40',
            're_password'=>'required|same:password',
        ],
            [
                'email.required'=>'bạn chưa nhập mail',
                'email.email'=>'Bạn chưa nhập đúng định đạng email',
                'email.unique'=>'Email đã tồn tại',
                'password.required'=>'bạn chưa nhập mật khẩu',
                'password.min'=>'Mật khẩu phải có ít nhất 5 ký tự',
                'password.max'=>'Mật khẩu được tối đa có 40 ký tự ',
                're_password.same'=>'Mật khẩu nhập lại chưa khớp',
                're_password.required'=>'Bạn chưa nhập lại mật khẩu',
            ]);
        $employee = new employees;
        $employee->employee_name = $request->employee_name;
        if ($request->password == $request->re_password){
            $employee->password = md5($request->password);
        }
        $employee->level = $request->level;
        $employee->dob = $request->dob;
        $employee->gender = $request->gender;
        $employee->phone_number = $request->phone_number;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->avatar = $request->uploadfile;
        $employee->save();
        return redirect ('admin/employee/list')->with('report','Bạn đã thêm thành công');

    }
   public function getList(){
	    $employee = employees::all();
        return view('admin.employee.list',['employee' => $employee]);
   }
   public function getEdit($id){
//       $employee = employee::where('employee_id','=',$id)->get()->first();
       $employee = employees::find($id);
       return view('admin.employee.edit',compact('employee'));
   }
   public function postEdit(Request $request,$id){
       $this->validate($request,[

           'email'=>'required|email|unique:employees,email',
           'password'=>'required|min:5|max:40',
           're_password'=>'required|same:password',
       ],
           [
               'email.required'=>'bạn chưa nhập mail',
               'email.email'=>'Bạn chưa nhập đúng định đạng email',
               'email.unique'=>'Email đã tồn tại',
               'password.required'=>'bạn chưa nhập mật khẩu',
               'password.min'=>'Mật khẩu phải có ít nhất 5 ký tự',
               'password.max'=>'Mật khẩu được tối đa có 40 ký tự ',
               're_password.same'=>'Mật khẩu nhập lại chưa khớp',
               're_password.required'=>'Bạn chưa nhập lại mật khẩu',
           ]);
//       $employee = new employees;
       $employee = employees::find($id);
       $employee->employee_name = $request->employee_name;
//       if ($request->changePassword == "on") {
//           $this->validate($request,[
//
//               'password'=>'required|min:5|max:40',
//               're_password'=>'required|same:password',
//           ],
//               [
//                   'password.required'=>'bạn chưa nhập mật khẩu',
//                   'password.min'=>'Mật khẩu phải có ít nhất 5 ký tự',
//                   'password.max'=>'Mật khẩu được tối đa có 40 ký tự ',
//                   're_password.same'=>'Mật khẩu nhập lại chưa khớp',
//                   're_password.required'=>'Bạn chưa nhập lại mật khẩu',
//               ]);
//           $employee->password = bcrypt($request->password);
//       }

       if ($request->password == $request->re_password){
           $employee->password = md5($request->password);
       }
       $employee->level = $request->level;
       $employee->dob = $request->dob;
       $employee->gender = $request->gender;
       $employee->phone_number = $request->phone_number;
       $employee->email = $request->email;
       $employee->address = $request->address;
       $employee->avatar = $request->uploadfile;
       $employee->save();

       return redirect ('admin/employee/list')->with('report','Bạn đã sửa thành công');


   }

   public  function getDelete($id){
       $employee = employees::find($id);
       $employee -> delete();
       return redirect('admin/employee/list')-> with('report','Bạn đã xóa thành công');
   }

    public function getLoginAdmin(){
        return view('admin.login');
    }
    public function postLoginAdmin(Request $request){


        $this->validate($request,
            ['email'=>'required',
                'password'=>'required|min:5|max:40',
            ],
            ['email.required'=>'Bạn chưa nhập email',
                'password.required'=>'bạn chưa dang nhập password',
                'password.min'=>'password không được nhỏ hơn 5 ký tự',
                'password.max'=>'password không được lớn hơn 40 ký tự',
            ]);
        //echo "Đã login"; die();
        $pass = md5($request->password);
        //echo $pass; die();
        $data = employees::where('email','=',$request->email)->where('password','=',$pass)->first();
        if (!empty($data["employee_id"]))
        {
            session_start();
            $_SESSION['userInfo'] = array(
                'employee_id'=>$data["employee_id"],
                'employee_name'=>$data["employee_name"],
                'level'=>$data["level"],
                'dob'=>$data["dob"],
                'gender'=>$data["gender"],
                'phone_number'=>$data["phone_number"],
                'email'=>$data["email"],
                'address'=>$data["address"],
                'avatar'=>$data["avatar"],
            );
            return redirect('admin/places/list');
        }
        else{
            return redirect('admin/login')->with('report','Đăng nhập không thành công');
        }
//        if (Auth::attempt(array('email' =>$request-> email, 'password' => $request-> password))){
////            if (Auth::attempt(['email' =>$request-> email, 'password' =>$request-> password])){
//            return redirect('admin/places/list');
//        }
//        else{
//            return redirect('admin/login')->with('report','Đăng nhập không thành công');
//        }
    }

}
