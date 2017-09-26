<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\places;
use Illuminate\Http\Request;

class PlacesController extends Controller {

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
 public function getList(){
	    $places = places::all();
	    return view('admin.places.list',compact('places'));
 }
 public function getAdd(){
     $places = places::select('place_id','place_name','parent_id')->get();
     return view('admin.places.add', ['places' => $places]);
 }
 public function postAdd(Request $request){
     $places = new places();
     $places -> place_name = $request->place_name;
     $places->slug_name = createSlug($request->place_name);
     $places->description = $request->description;
     $places->image = $request->uploadfile;
     $places->parent_id = $request->parent_id;
     $places->save();
     return redirect('admin/places/list')->with('report','bạn đă thêm thành công ');
 }
  public function getEdit($id){
     $place = places::find($id);
     $places = places::all();
     return view('admin.places.edit',compact('place','places'));
  }
  public function postEdit(Request $request,$id){
      $places = places::find($id);
      $places ->place_name = $request->place_name;
      $places->slug_name = createSlug($request->place_name);
      $places->description = $request->description;
      $places->image = $request->uploadfile;
      $places->parent_id = $request->parent_id;
      $places->save();
      return redirect('admin/places/list')->with('report','bạn đă sua thành công ');
  }

 public function getDelete($id){
     $place = places::find($id);
     $place -> delete();
     return redirect('admin/places/list')-> with('report','Bạn đã xóa thành công');
 }
}
