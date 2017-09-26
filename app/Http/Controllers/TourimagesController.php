<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\tours;
use App\tour_images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TourimagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        $tours = tours::all();
        $tour_images = tour_images::all();
        return view('admin.tour_images.list1',compact('tours','tour_images'));
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

	public  function getAdd(){
        $tours = DB::table('tours')->select('tour_id', 'tour_name')->get();
//        $tourImages = DB::table('tour_images')->select('image_id', 'image')->where('tour_id', '=', $id)->get();
	    return view('admin.tour_images.add',compact('tours'));
    }
    public function postAdd(Request $request)
    {
//    $imageList = $request->imageTour;
//    $tour_images = new tour_images();
//
//    foreach($imageList as $img) {
//    $tour_images->image = $img;
//    $tour_images->tour_id = $request->idTour;
//
//    $tour_images->save();
//}


        $tour_images = new tour_images();
        $tour_images->tour_id = $request->idTour;
        $tour_images->save();


return redirect('admim/tour_images/add')->with('', 'Thêm thành công hình ảnh.');
}
//public function getTourImage($id){
//    $tours = tours::find($id);
////    var_dump($tours);die();
//    $tourImages = DB::table('tour_images')->select('image_id', 'image')->where('tour_id', '=', $id)->get();
//    return view('admin.tour_images.list2', compact('tours', 'tourImages'));
//
//}
//
//    public function postAddTourImage(AddTourImage $request) {
//        $imageList = $request->imageTour;
//        $imageTour = new TourImage();
//        foreach($imageList as $img) {
//            $imageTour->image = $img;
//            $imageTour->tour_id = $request->idTour;
//
//            $imageTour->save();
//        }
//        return redirect()->route('listTourImage', ['id' => $request->idTour])->with('noti', 'Thêm thành công hình ảnh.');
//    }

    public function deleteImage($imageId, $tourId) {
        $image = TourImage::find($imageId);
        $image->delete();
        return redirect()->route('listTourImage', ['id' => $tourId]);
    }

}
