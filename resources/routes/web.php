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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('reset', function (){
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    return view('home.landing.index');
});

Route::group(['prefix' => ''], function () {
    Route::get("/", 'HomeController@index');
    // Route::get("/tech_analysis", 'StockController@tech_analysis');
    // Route::get("/refresh/{Ticker}/{Listed_at}", 'StockController@refreshapicall');
 
});
Route::get('/test_header', function () {
    return view('/../home/landing/test_header');
});
Route::get('/about_us', function () {
    return view('/../about_us/about_us');
});
Route::get('/contact_us', function () {
    return view('/../../../home/landing/contact_us');
});
Route::get('/faculty', function () {
    return view('/../about_us/faculty');
});
Route::get('/testimoni', function () {
    return view('/../about_us/testimonials');
});

Route::get('/employment_opportunities
', function () {
    return view('/../about_us/employment_Opportunities');
});

Route::get('/corporate_entertainment
', function () {
    return view('/../hire_us/corporate_entertainment');
});

Route::get('/weddings_private
', function () {
    return view('/../hire_us/weddings_private');
});

Route::get('/birthday', function () {
    return view('/../hire_us/kids_birthday');
});

Route::get('/classes
', function () {
    return view('/../classes/class');
});
Route::get('/tuition
', function () {
    return view('/../classes/tuition');
});

Route::get('/indowestern
', function () {
    return view('/../../../costume/indowestern');
});

Route::get('/indowestern/age_4_8
', function () {
    return view('/../../../costume/indowestern/age_4_8');
});
Route::get('/indowestern/age_8_12
', function () {
    return view('/../../../costume/indowestern/age_8_12');
});
Route::get('/indowestern/age_12_16
', function () {
    return view('/../../../costume/indowestern/age_12_16');
});

Route::get('/western
', function () {
    return view('/../../../costume/western');
});

Route::get('/western/age_4_8
', function () {
    return view('/../../../costume/western/age_4_8');
});
Route::get('/western/age_8_12
', function () {
    return view('/../../../costume/western/age_8_12');
});
Route::get('/western/age_12_16
', function () {
    return view('/../../../costume/western/age_12_16');
});



Route::get('/classical
', function () {
    return view('/../../../costume/classical');
});

Route::get('/classes-offered
', function () {
    return view('/../classes/classes_offered');
});
Route::get('/classes-by-ages
', function () {
    return view('/../classes/classes_ages');
});


Route::get('/Crazy-Cuties4-6
', function () {
    return view('/../classes/crazy_cuties4_6');
});


Route::get('/elementary-aged
', function () {
    return view('/../classes/classes_elementary_aged');
});


Route::get('/elementary/Little-Leapers', function () {
    return view('/classes/elementary/little_leaper');
});

Route::get('/elementary/Jumpy-Junior', function () {
    return view('/classes/elementary/jumpy_junior');
});
Route::get('/elementary/Dancing-Dynamites', function () {
    return view('/../classes/elementary/dancing_dynamite');
});

Route::get('/elementary/Golden-Glam', function () {
    return view('/../classes/elementary/golden_glam');
});


Route::get('/elementary/adolescent', function () {
    return view('/../classes/elementary/adolescent');
});


Route::get('/free-trial-class', function () {
    return view('/../classes/classes_free_trial');
});


Route::get('/class_group', function () {
    return view('/../Admin/class_group');
});
Route::any("/class", 'ClassController@class');
Route::any("/class_data", 'ClassController@classdata');
Route::any("/group_data", 'ClassController@groupdata');
Route::any("/edit_group_data/{Id}", 'ClassController@edit_group_data');
Route::any("/edit_class_data/{Id}", 'ClassController@edit_class_data');

Route::get('/dashboard', function () {
    return view('/../Admin/dashboard');
});



Route::get('/register', function () {
    return view('/../../home/landing/register');
});

Route::any('/class_group','ClassController@class_group');
Route::any('edit_group/{Id}','ClassController@edit_group');
Route::any('edit_class/{Id}','ClassController@edit_class');
Route::any('delete_group/{Id}','ClassController@delete_group');
Route::any('delete_class/{Id}','ClassController@delete_class');
Route::any('/dashboard','ClassController@dashboard');
Route::any('/Login','LoginController@index');
Route::get('/Login', function () {
    return view('/../../../Admin/login');
});
