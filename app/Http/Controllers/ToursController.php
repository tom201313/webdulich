<?php namespace App\Http\Controllers;

use App\discount_code;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddTour;
use App\Http\Requests\EditTour;
use App\Http\Requests\AddImage;
use App\tour_images;
use App\tours;
use App\vehicles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ToursController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tours = tours::all();
        $discount_code = DB::table('discount_code')->select('discount_code_id', 'discount_code_name')->get();
        $vehicles = DB::table('vehicles')->select('vehicle_id', 'vehicle_name')->get();
        $places = DB::table('places')->select('place_id', 'place_name')->get();
        return view('admin.tour.list', compact('tours', 'discount_code', 'vehicles', 'places'));
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
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function getAdd()
    {
        $vehicles = DB::table('vehicles')->select('vehicle_id', 'vehicle_name')->get();
        $places = DB::table('places')->select('place_id', 'place_name', 'parent_id')->get();
        $discount_code = DB::table('discount_code')->select('discount_code_id', 'discount_code_name', 'money')->get();
        $services = DB::table('services')->select('service_id', 'service_name')->get();
        return view('admin.tour.add', compact('vehicles', 'discount_code', 'places','services'));
    }

    public function postAdd(Request $request)
    {
        $tours = new tours();
        $images = new tour_images();
        $tours->tour_name = $request->tentour;
        $tours->base_prices = $request->base_prices;
        $tours->sale_prices = $request->sale_prices;
        $tours->discount_code_id = $request->discountcode;
        //$tours->content = $request->content;
        $tours->begin_time = $request->begin_time;
        $tours->duration = $request->duration;
        $tours->vehicle_id = $request->vehicle;
        $tours->max_customer_number = $request->max_customer_number;
        $tours->start_place = $request->start_place;
//        $vehilceList = $request->vehicles;
//        $tours->vehicles = implode('-', $vehilceList);
//        $placeJourney= $request->journey;
//        $tours->journey = implode('-', $placeJourney);
//        $serviceList= $request->service;
//        $tours->services = implode('-', $serviceList);
        $tours->journey = $request->journey;
        $tours->schedule = $request->schedule;
        $tours->note = $request->note;
        $tours->overview = $request->overview;
         $tours->save();
        $images->image = $request->image;
        $tourId = $tours->tour_id;
        $images->tour_id = $tourId;
        $images->save();
        return redirect('admin/tour/add')->with('reopt', 'bạn đá thêm thành công ');
    }

    public function getEdit($id)
    {
        $tours = tours::find($id);
        $vehicles = DB::table('vehicles')->select('vehicle_id', 'vehicle_name')->get();
        $places = DB::table('places')->select('place_id', 'place_name', 'parent_id')->get();
        $discount_code = DB::table('discount_code')->select('discount_code_id', 'discount_code_name', 'money')->get();
        return view('admin.tour.edit', compact('tours', 'vehicles', 'discount_code', 'places'));
    }

    public function postEdit(Request $request, $id)
    {
        $tours = tours::find($id);
        $tours->tour_name = $request->tentour;
        createSlug($request->tentour);
        $tours->base_prices = $request->base_prices;
        $tours->sale_prices = $request->sale_prices;
        $tours->discount_code_id = $request->discountcode;
        //$tours->content = $request->content;
        $tours->begin_time = $request->begin_time;
        $tours->duration = $request->duration;
        $tours->vehicle_id = $request->vehicle;
        $tours->max_customer_number = $request->max_customer_number;
//        if($request->changeJourney == 'on') {
//            $placeJourney= $request->journey;
//            $tours->journey = implode('-', $placeJourney);
//        }
//        if($request->changeVehicle == 'on') {
//            $vehicleList = $request->vehicle;
//            $tours->vehicle = implode('-', $vehicleList);
//        }
        $tours->start_place = $request->start_place;
        $tours->journey = $request->journey;
        $tours->schedule = $request->schedule;
        $tours->note = $request->note;
        $tours->overview = $request->overview;
        $tours->save();
        return redirect('admin/tour/edit/' . $id)->with('report', 'bạn đã sữa thành công');
    }
    public function getDelete($id){
        $tours = tours::find($id);
        $tours -> delete();
        return redirect('admin/tour/list')-> with('report','Bạn đã xóa thành công');
    }

    //anh tours
    public function getTourImage($id){
        $tours = tours::find($id);
//        dd($tours);
        $tour_images = DB::table('tour_images')->select('image_id', 'image')->where('tour_id', '=', $id)->get();
        return view('admin.tour_images.add', compact('tours', 'tour_images'));

    }
    public function postAddTourImage(AddImage $request) {
//        echo "a"; die();
        $img = new tour_images();
        $img->image = $request->uploadfile;
        $img->tour_id = $request->tourId;
        $img->created_at = date('Y-m-d H:i:s');
        $img->updated_at = date('Y-m-d H:i:s');
        $img->save();
        return redirect()->back()->with('report', 'Thêm thành công hình ảnh.');
    }
//
//    public function deleteImage($imageId, $tourId) {
//        $image = TourImage::find($imageId);
//        $image->delete();
//        return redirect()->route('listTourImage', ['id' => $tourId]);
//    }

}
