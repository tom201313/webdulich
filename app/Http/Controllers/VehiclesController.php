<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\vehicles;
use Illuminate\Http\Request;
use function Sodium\compare;

class VehiclesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


   public function getList()
   {
       $vehicles = vehicles::all();
       return view('admin.vehicles.list', compact('vehicles'));
   }
   public function getAdd(){
       return view('admin.vehicles.add');
   }
    public function postAdd(Request $request){
     $vehicles = new vehicles();
     $vehicles ->vehicle_name = $request->vehicle_name;
     $vehicles->vehicle_image = $request->uploadfile;
     $vehicles->save();
     return redirect('admin/vehicles/list')->with('report','bạn đã thêm thành công ');
    }
    public function getEdit($id){
      $vehicles = vehicles::find($id);
      return view('admin.vehicles.edit',compact('vehicles'));
    }
    public function postEdit(Request $request,$id){
        $vehicles = vehicles::find($id);
        $vehicles ->vehicle_name = $request->vehicle_name;
        $vehicles->vehicle_image = $request->uploadfile;
        $vehicles->save();
        return redirect('admin/vehicles/list')->with('report','bạn đã sửa thành công ');
    }
    public function getDelete($id){
        $vehicles = vehicles::find($id);
        $vehicles -> delete();
        return view('admin.vehicles.list',compact('vehicles'));

    }
}
