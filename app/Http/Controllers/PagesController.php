<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\customers;
use App\places;
use App\tour_coupons;
use App\tours;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BookTour;

class PagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    function __construct()
    {
        $places = DB::table('places')->orderBy('place_name', 'asc')->get();
        View::share('place', $places);

        $placesOfMenu = DB::table('places')->select('place_id', 'place_name', 'image', 'parent_id', 'description')->get();
        View::share('placesOfMenu', $placesOfMenu);

        $startPlaces = DB::table('tours')->select('start_place')->distinct()->orderBy('start_place', 'asc')->get();
        View::share('startPlaces', $startPlaces);

        $tourServices = DB::table('services')->select('service_id', 'service_name')->distinct('service_name')->get();
        View::share('tourServices', $tourServices);

        $startTimeTours = DB::table('tours')->select('begin_time')->distinct()->orderBy('begin_time', 'asc')->get();
        View::share('startTimeTours', $startTimeTours);

        $listTours = DB::table('tours')->where('locked', '=', NULL)->paginate(8);
        View::share('listTours', $listTours);

        $tourVehicles = DB::table('vehicles')->select('vehicle_id', 'vehicle_name')->get();
        View::share('tourVehicles', $tourVehicles);
    }

	public function index()
	{
        $listTours = DB::table('tours')->where('locked', '=', NULL)->paginate(4);
        return view('pages.index', compact('listTours'));
	}

	function getTrangchu(){
        $places = DB::table('places')->select('place_id','place_name')->get();
        $listTours = DB::table('tours')->select('tour_id','tour_name', 'base_prices','sale_prices','begin_time','duration','vehicle_id')->get();
        $topTour = DB::table('tours')->select('tour_id', 'tour_name', 'journey', 'base_prices', 'sale_prices')->take(5)->get();
        $imgTours = DB::table('tour_images')->select('image_id', 'image', 'tour_id')->get();
	    return view('pages.trangchu',compact('imgTours','listTours','topTour','places'));
    }
  //trang lien he
	public function getContact(){
	    return view('pages.contact');
    }
//trang dang ky
 function  getRegister(){
	    return view('pages.register');
 }
  function postRegister(Request $request){
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
     $customer = new customers();
//    echo "customer_name";
//    echo "dob";
//    echo 'gender';
//    echo 'phone_number';
//    echo 'email';
//    echo 'address';die;

     $customer->customer_name = $request->customer_name;
     $customer->dob = $request->dob;
     $customer->gender = $request->gender;
     $customer->phone_number = $request->phoneNumber;
     if ($request->password == $request->re_password){
         $customer->password = md5($request->password);
     }
     $customer->email = $request->email;
     $customer->address = $request->address;

     $customer->save();
     return redirect ('register')->with('report','Bạn đã đăng ký thành công');
 }

 //trang dang nhap
    function getLogin(){
     return view('pages.login');
    }
    function postLogin(Request $request)
    {

//        echo $request->email;
//        echo $request->password;

        $this->validate($request,
            ['email' => 'required',
                'password' => 'required|min:5|max:40',
            ],
            ['email.required' => 'Bạn chưa nhập email',
                'password.required' => 'bạn chưa dang nhập password',
                'password.min' => 'password không được nhỏ hơn 5 ký tự',
                'password.max' => 'password không được lớn hơn 40 ký tự',
            ]);
//        if (Auth::attempt(array('email' =>$request-> email, 'password' => $request-> password))){
////            if (Auth::attempt(['email' =>$request-> email, 'password' =>$request-> password])){
//            return redirect('trangchu');
//        }
//        else{
//            return redirect('login')->with('report','Đăng nhập không thành công');
//        }
//    }

        $pass = md5($request->password);
        $data = customers::where('email', '=', $request->email)->where('password', '=', $pass)->first();
        if (!empty($data["customer_id"])) {
            session_start();
            $_SESSION['customerInfo'] = array(
                'customer_id' => $data["customer_id"],
                'customer_name' => $data["customer_name"],
                'dob' => $data["dob"],
                'gender' => $data["gender"],
                'phone_number' => $data["phoneNumber"],
                'email' => $data["email"],
                'address' => $data["address"],

            );
            return redirect('trangchu');
        } else {
            return redirect('login')->with('report', 'Đăng nhập không thành công');
        }

    }
    public function getLogoutUser() {
            session_start();
            unset($_SESSION['customerInfo'],$_SESSION);
            session_destroy();
            return redirect()->route('trangchu');

    }
    //cac trang tour

    function getTourDetai($idTour){
        $places = DB::table('places')->select('place_id','place_name')->get();
       $tours = tours::find($idTour);
        $relativeTours = DB::table('tours')->select('tour_id', 'tour_name', 'base_prices', 'sale_prices')->take(3)->get();
        $imgTours = DB::table('tour_images')->select('image_id', 'image', 'tour_id')->get();
        return view('pages.tourDetai', compact( 'tours','relativeTours','imgTours','places'));
    }

    public function gettourOder($tourId) {
        $places = DB::table('places')->select('place_id','place_name')->get();
//        $customerTour =DB::table('customers')->select('customer_id','customer_name','email')->get;
        $tours = tours::find($tourId);
        $relativeTours = DB::table('tours')
            ->select('tour_id', 'tour_name', 'base_prices', 'sale_prices')
            ->where('locked', '=', NULL)
            ->take(3)->get();
        $imgTours = DB::table('tour_images')->select('image_id', 'image', 'tour_id')->get();
        return view('pages.tourOder', compact('tours', 'relativeTours','imgTours','places','customerTour'));
    }

    public function posttourOder(Request $request) {
        $tourCoupon = new tour_coupons();
        $bookedTour = tours::find($request->tourId);
        $tourCoupon->tour_id = $request->tourId;
        $tourCoupon->customer_id = 4;
        $tourCoupon->adult_number = $request->adult;
        $tourCoupon->children_number = $request->child;
    }
    //tìm kiếm tour
    public function getSeachTour(){
        return view('pages.listtour');
    }
    public function postSearchTour(Request $request) {
        $destinationPlace = $request->destinationPlace;
//         dd($destinationPlace);
        $startPlace = $request->startPlace;
        $startTimeTour = $request->startTimeTour;
        $resultTour = DB::table('tours')
            ->where('journey', 'like', "%$destinationPlace%")
            ->where('start_place', '=', $startPlace)
            ->where('begin_time', '=', $startTimeTour)
            ->where('locked', '=', NULL)
            ->paginate(5);
        return view('pages.listtour', compact('resultTour'));
    }

    function  getCategroy(){
        return view('pages.category');
    }
    function getviewNews(){
        return view('pages.viewNews');
    }

    function getRequesHotel(){
        return view('pages.requesHotel');
    }
    function getListTour(Request $request){
        $destinationPlace = $request->destinationPlace;
//         dd($destinationPlace);
        $startPlace = $request->startPlace;
        $startTimeTour = $request->startTimeTour;
        $resultTour = DB::table('tours')
            ->where('journey', 'like', "%$destinationPlace%")
            ->where('start_place', '=', $startPlace)
            ->where('begin_time', '=', $startTimeTour)
            ->where('locked', '=', NULL)
            ->paginate(10);
        return view('pages.listTour',compact('resultTour') );
    }
     function getComfirmBookTour(){

     }
    function postComfirmBookTour(Request $request){
        session_start();
        $bookTourInfor = $_SESSION['bookTourInfor'];
        $idTour = $bookTourInfor['tourId'];
        $TourCoupon = new tour_coupons();
        $TourCoupon->employee_id = $bookTourInfor['customerId'];
        $TourCoupon->tour_id = $bookTourInfor['tourId'];
        $TourCoupon->children_number = $bookTourInfor['child'];
        $TourCoupon->adult_number = $bookTourInfor['adult'];
        $TourCoupon->price = $bookTourInfor['totalPrice'];
        $TourCoupon->payment = $request->paymethod;
        $TourCoupon->created_at = date('Y-m-d H:i:s');
        $TourCoupon->updated_at = date('Y-m-d H:i:s');
        $TourCoupon->save();
        session_destroy();
        return redirect()->route('gettourOder', ['tourId' => $idTour])->with('report', 'Bạn đã đặt tour thành công');
    }
    function postPayTour(Request $request)
    {
            session_start();
            $bookTourInfor = array();
            $tongTien = 0;
            $percentForChild = 40;//phần trăm giảm giá cho trẻ em
            $bookTourInfor['customerId'] = $request->customerId;
            $bookTourInfor['tourId'] = $request->tourId;
            $bookTourInfor['adult'] = $request->adult;
            $bookTourInfor['child'] = $request->child;
            $bookTourInfor['discount'] = $request->discountCode;
            $tours = tours::find($bookTourInfor['tourId']);
            $codeId = $tours->discount_code_id;
            $salePrice = $tours->sale_prices;
            $tours = DB::table('tours')->select('tour_id', 'tour_name', 'base_prices', 'sale_prices')->get();
            $relativeTours = DB::table('tours')->select('tour_id', 'tour_name', 'base_prices', 'sale_prices')->where('locked', '=', NULL)->take(3)->get();
            $tongBanDau = $bookTourInfor['adult'] * $salePrice + $bookTourInfor['child'] * ($salePrice) * (100 - $percentForChild) / 100;
            $isDiscount = DB::table('discount_code')->select('discount_code_name', 'money')->where('discount_code_id', '=', $codeId)->where('end_date', '>', date('Y-m-d H:i:s'))->first();
            if ($isDiscount != [] && (trim($bookTourInfor['discount']) == $isDiscount->discount_code_name)) {
                $tongTien = $bookTourInfor['adult'] * $salePrice + $bookTourInfor['child'] * ($salePrice) * (100 - $percentForChild) / 100 - $isDiscount->money;
            } else {
                $bookTourInfor['discount'] = 'Không hợp lệ';
                $tongTien = $bookTourInfor['adult'] * $salePrice + $bookTourInfor['child'] * ($salePrice) * (100 - $percentForChild) / 100;
            }
            $bookTourInfor['totalPrice'] = $tongTien;
            $bookTourInfor['basePrice'] = $tongBanDau;
            $_SESSION['bookTourInfor'] = $bookTourInfor;
            return view('pages.pay', compact('tour', 'relativeTours','tours'));
        }
}
