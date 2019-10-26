<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'CountCtrl@countVisit');

// Route::get('/form', function () {
//     return view('form');
// });

Route::get('/gov', function () {
    return view('gov');
});

Route::get('/economy', function () {
    return view('economy');
});

Route::get('/barangay', 'GetBrgyLs@viewToWeb');

Route::get('/tourism', function () {
    return view('tourism');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/location', function () {
    return view('location');
});

Route::get('/local_off', function () {
    return view('local_off');
});

Route::get('/departments', function () {
    return view('departments');
});

Route::get('/modals', function () {
    return view('modals');
});

Route::get('/modal_district', function () {
    return view('modal_district');
});

Route::get('/sanpablenos', function () {
    return view('sanpablenos');
});

Route::get('/hymn', function () {
    return view('hymn');
});

Route::get('/ela', function () {
    return view('ela');
});

Route::get('/cultural_properties', function () {
    return view('cultural_properties');
});

Route::get('/officemap', function () {
    return view('officemap');
});

Route::get('/ordinances', function () {
    return view('ordinances');
});

Route::get('/org_chart', function () {
    return view('org_chart');
});

Route::get('/mission', function () {
    return view('mission');
});

Route::get('/missionvision', function () {
    return view('missionvision');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/7lakes', function () {
    return view('7lakes');
});

Route::get('/preloader', function () {
    return view('preloader');
});

Route::get('/style-admin-nav', function () {
    return view('style-admin-nav');
});

Route::get('/officemap', function () {
    return view('officemap');
});

Route::get('/our7lakes', function(){
  return view('our7lakes');
});




//////////////
///BPLO Routes

Route::get('/form', function(){
  return view('form');
});

// Route::get('/form_renewal/{user?}', function($user){
//     // Session::get("username")
//     // Session::put('username', $username);
// if (Request::ajax())
// {
//
// }
// return view('form_renewal',['user'=> $user]);
// });

Route::get('bploform', function($user)
{
  if (Request::ajax())
  {
    $bussId = $user->$bussId;
    return $bussid;
  }
 return view('bploform')->with('bussId',$bussId);
});

Route::get('/signin_requestor', function () {
    return view('signin_requestor');
});



Route::get('/logout', function() {
  Session::forget('username');
  if(!Session::has('username'))
   {
      return view('/bploform');
   }
 });


 //ADMIN PANEL ROUTES:

 Route::get('/admin-login', function () {
    
    return view('admin-login');
});


// ADMIN (RESTRICTED)
Route::group(['middleware' => 'users'],function(){

    Route::get('/pylon-admin', function(){
        return view('pylon-admin');
    });

    Route::get('/newseditor', function(){
        return view('newseditor'); 
    });

    Route::get('/services', function(){
        return view('services'); 
    });

    Route::get('/eventsandannouncements', function () {
    return view('eventsandannouncements');
    });

    Route::get('/holidays', function () {
        return view('holidays');
    });

    Route::get('/engineeringform', function () {
        return view('engineering_and_building_form');
    });
    
});



   
//ADMIN END
//ADMIN ROUTE FUNCTIONS
//News Editor
Route::post('/createNews', 'new_controller@store');
Route::get('/getNews', 'new_controller@index');
Route::post('/getOneNews', 'new_controller@show');
Route::post('/updateOneNews', 'new_controller@update');
Route::post('/deleteOneNews', 'new_controller@destroy');
//Services
Route::post('/createService', 'servicesController@store');
Route::get('/getService', 'servicesController@tbServices');
Route::post('/getOneService', 'servicesController@show');
Route::post('/updateOneService', 'servicesController@update');
Route::post('/deleteOneService', 'servicesController@destroy');

//Events and Announcements
Route::post('/createEvents', 'EventsandAnnouncementsController@store');
Route::get('/getEvents', 'EventsandAnnouncementsController@tbEvents');
Route::post('/deleteOneEvents', 'EventsandAnnouncementsController@destroy');
Route::post('/getOneEvents', 'EventsandAnnouncementsController@show');
Route::post('/updateOneEvents', 'EventsandAnnouncementsController@update');

//Holidays
Route::post('/createHoliday', 'holidayController@store');
Route::get('/getHolidays', 'holidayController@tbHolidays');
Route::post('/deleteOneHoliday', 'holidayController@destroy');
Route::post('/getOneHoliday', 'holidayController@show');
Route::post('/updateOneHoliday', 'holidayController@update');

//EngineeringForm
Route::post('/create_form', 'engineeringFormController@store');
Route::get('/get_form', 'engineeringFormController@tbForms');
Route::post('/delete_one_form', 'engineeringFormController@destroy');
Route::post('/get_one_form', 'engineeringFormController@show');
Route::post('/update_one_form', 'engineeringFormController@update');

// Client side  NEWS, EVENTS, HOLIDAYS, SERVICES
Route::get('getLatestServices', 'cms_controller@getAllLatestServices');
Route::get('getHoliday', 'cms_controller@getHoliday');
Route::get('getEventsAndAnnouncement1', 'cms_controller@getEvents1');
Route::get('getEventsAndAnnouncement2', 'cms_controller@getEvents2');
Route::get('getAllEvents', 'cms_controller@getEvents');
Route::get('getAllNews', 'cms_controller@getNews');
Route::get('get_engr_form', 'cms_controller@getForm');



//ADMIN ROUTE FUNCTIONS END

Route::post('/logindatanow', 'logInOutController@save');
Route::get('/signout', 'logInOutController@logOut');





Route::post('register', array('uses' => 'Register@store'));

Route::get('getLatestNews', 'new_controller@getAllNewsHeadlines');




Route::get('/form_renewal/{buss_id?}', 'JController@form_renewal');

Route::get('/renewal', 'JController@renewal');

Route::get('/bploform', 'JController@bploform');

Route::post('/addnewbuss', 'JController@addnewbuss');

Route::get('/addlineofbuss', 'JController@addlineofbuss');

Route::post('/addReg', 'JController@addReg');

Route::post('/signinReg', 'JController@signinReg');

Route::get('/checkinputs', 'JController@checkinputs');

Route::get('/ammendments', function () {
    return view('ammendments');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
