
<?php
//use Illuminate\Support\Facades\Route;
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/',['as'=>'index',function(){
		return view('welcome');
	}]);
Route::get('thu',function (){
   return view('admin.pages.hoteldiagram') ;
});
Route::get('home',function (){
//    return view('admin.pages.index') ;
//    return view('pages.tourDetai');
    return view('pages.tourOder');
});


Route::get('admin/login',['as' => 'login', 'uses' => 'EmployeeController@getLoginAdmin']);
Route::post('admin/login','EmployeeController@postLoginAdmin');
Route::get('admin/logout','EmployeeController@getLogoutAdmin');

Route::group(['prefix'=>'admin', 'middleware'=>'test'],function (){
   Route::group(['prefix'=>'employee'],function (){
      Route::get('list','EmployeeController@getList');

       Route::get('add','EmployeeController@getAdd');
       Route::post('add','EmployeeController@postAdd');

       Route::get('edit/{id}','EmployeeController@getEdit');
       Route::post('edit/{id}','EmployeeController@postEdit');

       Route::get('delete/{id}','EmployeeController@getDelete');
   });
    Route::group(['prefix'=>'services'],function (){
        Route::get('list','ServicesController@getList');

        Route::get('add','ServicesController@getAdd');
        Route::post('add','ServicesController@postAdd');

        Route::get('edit/{id}','ServicesController@getEdit');
        Route::post('edit/{id}','ServicesController@postEdit');

        Route::get('delete/{id}','ServicesController@getDelete');
    });
    Route::group(['prefix'=>'vehicles'],function (){
        Route::get('list','VehiclesController@getList');

        Route::get('add','VehiclesController@getAdd');
        Route::post('add','VehiclesController@postAdd');

        Route::get('edit/{id}','VehiclesController@getEdit');
        Route::post('edit/{id}','VehiclesController@postEdit');

        Route::get('delete/{id}','VehiclesController@getDelete');
    });
    Route::group(['prefix'=>'places'],function (){
        Route::get('list','PlacesController@getList');

        Route::get('add','PlacesController@getAdd');
        Route::post('add','PlacesController@postAdd');

        Route::get('edit/{id}','PlacesController@getEdit');
        Route::post('edit/{id}','PlacesController@postEdit');

        Route::get('delete/{id}','PlacesController@getDelete');
    });
    Route::group(['prefix'=>'discount_code'],function (){
        Route::get('list','Discount_codeController@getList');

        Route::get('add','Discount_codeController@getAdd');
        Route::post('add','Discount_codeController@postAdd');

        Route::get('edit/{id}','Discount_codeController@getEdit');
        Route::post('edit/{id}','Discount_codeController@postEdit');

        Route::get('delete/{id}','Discount_codeController@getDelete');
    });
    Route::group(['prefix'=>'tour'],function (){
        Route::get('list','ToursController@index');

        Route::get('add','ToursController@getAdd');
        Route::post('add','ToursController@postAdd');

        Route::get('edit/{id}','ToursController@getEdit');
        Route::post('edit/{id}','ToursController@postEdit');

        Route::get('delete/{id}','ToursController@getDelete');
    });
    Route::group(['prefix'=>'tour_images'],function () {
        Route::get('list', 'TourimagesController@index');

        Route::get('add', 'TourimagesController@getAdd');
        Route::post('add', 'TourimagesController@postAdd');

        Route::get('edit/{id}', 'ToursController@getEdit');
        Route::post('edit/{id}', 'ToursController@postEdit');

        Route::get('delete/{id}', 'ToursController@getDelete');
    });
    Route::group(['prefix'=>'tour_images'],function () {

        Route::get('image/{id}', [
            'as' => 'listTourImage',
            'uses' => 'ToursController@getTourImage'
        ]);

        Route::post('addImage', [
            'as' => 'postAddTourImage',
            'uses' => 'ToursController@postAddTourImage'
        ]);

    });

    Route::group(['prefix'=>'tour_coupons'],function (){
        Route::get('list','TourcouponsController@index');

        Route::get('add','TourcouponsController@getAdd');
        Route::post('add','TourcouponsController@postAdd');

        Route::get('edit/{id}','TourcouponsController@getEdit');
        Route::post('edit/{id}','TourcouponsController@postEdit');

        Route::get('delete/{id}','TourcouponsController@getDelete');
    });
});
//trang lien he
Route::get('contact','PagesController@getContact');

//from dang ky
Route::get('register','PagesController@getRegister');
Route::post('register','PagesController@postRegister');

//from dang nhap
Route::get('login','PagesController@getLogin');
Route::post('login','PagesController@postLogin');

//from dang xuaat

Route::get('logout', [
    'as' => 'logoutUser',
    'uses' => 'PagesController@getLogoutUser'
]);

Route::get('trangchu',['as'=>'trangchu','uses'=>'PagesController@getTrangchu'] );
//cac trang tour

Route::get('tourOder/{tourId}', [
    'as' => 'gettourOder',
    'uses' => 'PagesController@gettourOder'
]);
Route::post('tourOder', [
    'as' => 'posttourOder',
    'uses' => 'PagesController@posttourOder'
]);

Route::get('tourDetai/{idTour}', [
    'as' => 'gettourDetai',
    'uses' => 'PagesController@gettourDetai'
]);
//Route::post('searchTour', [
//    'as' => 'getSearchTour',
//    'uses' => 'PagesController@getSearchTour'
//]);
Route::post('searchTour', [
    'as' => 'postSearchTour',
    'uses' => 'PagesController@postSearchTour'
]);

Route::get('category','PagesController@getCategroy');
Route::get('viewNews','PagesController@getviewNews');

Route::get('requesHolel','PagesController@getRequesHotel');

Route::get('listtour','PagesController@getListTour');

Route:: post('ComfirmBookTour',[
   'as' => 'postComfirmBookTour',
    'uses' => 'PagesController@postComfirmBookTour'
]);
Route::get('ComfirmBookTour',[
    'as' => 'getComfirmBookTour',
    'uses' => 'PagesController@getComfirmBookTour'
]);
Route::post('pay', [
    'as' => 'postPayTour',
    'uses' => 'PagesController@postPayTour',
]);