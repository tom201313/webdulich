<?php namespace App\Http\Controllers;

use App\discount_code;
use App\employees;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Discount_codeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public  function getList(){
	    $discount_code = discount_code::all();

	    return view('admin/discount_code/list',compact('discount_code'));
    }
   public function getAdd()
   {
       $employee = employees::all();
       return view('admin.discount_code.add',compact('employee'));

   }
   public function postAdd(Request $request){
     $discount_code = new discount_code();

//     echo $request->discount_code_name;
//     echo $request->start_date;
//     echo $request->money;
//     echo  $request->employees;
//     echo strtotime($request->start_date);die;
     $discount_code ->employee_id = $request->employees;

     $discount_code ->money = $request->money;
     $discount_code ->discount_code_name = $request->discount_code_name;
     $discount_code->start_date = strtotime($request->start_date);
     $discount_code->end_date = strtotime($request->end_date);
       //biến lấy thời gian bắt đầu thưc hiện mã giảm giá
//       $time = $request->start_date." ".$request->start_time;
//       $time = date('Y-m-d H:i:s', strtotime($time));
//       $discount_code->start_date = $time;
//       //biến lấy thời gian kết thúc thưc hiện mã giảm giá
//       $time = $request->end_date." ".$request->end_time;
//       $time = date('Y-m-d H:i:s', strtotime($time));
//       $discount_code->end_date = $time;
       $discount_code->save();
       return redirect('admin/discount_code/list')->with('reopt','bạn đã thêm thành công ');
   }
   public function getEdit($id){
       $discount_code = discount_code::find($id);
       return view('admin.discount_code.edit',compact('discount_code'));
   }
   public function postEdit(Request $request,$id){
       $discount_code = discount_code::find($id);
       $discount_code ->employee_id = $request->employees;
       $discount_code ->money = $request->money;
       $discount_code ->discount_code_name = $request->discount_code_name;
      $discount_code->start_date = strtotime($request->start_date);
//       echo date('d/m/Y - H:i:s');
       $discount_code->end_date = strtotime($request->end_date);
       $discount_code->save();
       return redirect('admin/discount_code/list')->with('reopt','bạn đã thêm thành công ');
   }
    public  function getDelete($id){
        $discount_code = discount_code::find($id);

        $discount_code -> delete();
        return redirect('admin/discount_code/list')-> with('report','Bạn đã xóa thành công');
    }
}
