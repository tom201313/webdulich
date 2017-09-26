<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\services;
use Illuminate\Http\Request;

class ServicesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getList(){
        $services = services::all();
	    return view('admin.services.list',compact('services'));
    }
    public function getAdd(){
	    return view('admin.services.add');
    }
  public function postAdd(Request $request){
   $services = new  services ();
   $services->service_name = $request->service_name;
   $services->detail = $request->detail;
   $services->service_icon = $request->uploadfile;
   $services->save();
   return redirect('admin/services/list')->with('report','bạn dã thêm thành công ');
  }
 public function getEdit($id){
      $services = services::find($id);
      return view('admin.services.edit',compact('services'));

 }
 public function postEdit(Request $request,$id){
     $services = services::find($id);
     $services->service_name = $request->service_name;
     $services->detail = $request->detail;
     $services->service_icon = $request->uploadfile;
     $services->save();
     return redirect('admin/services/list/')->with('report','bạn dã sửa thành công ');
 }
    public  function getDelete($id){
        $services = services::find($id);
        $services -> delete();
        return redirect('admin/services/list')-> with('report','Bạn đã xóa thành công');
    }
}
