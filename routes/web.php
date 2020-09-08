<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'Client\ClientHomeController@getHome');
Route::get('/welcome', 'Client\ClientHomeController@getNews');
Route::post('/welcome/send', 'Client\ClientHomeController@getmail');

Route::group(
    [
        'middleware' => ['web']
    ], 
    function(){

//BaseSiteInformationController
Route::get('admin', 'BaseSiteInformationController@getInfo');
Route::get('admin/add_info_site', 'BaseSiteInformationController@addInfoPage');
Route::post('admin/add_info_site/save', 'BaseSiteInformationController@create');
Route::get('admin/base_site_information/update/{id}', 'BaseSiteInformationController@updatePage');
Route::post('admin/add_info/update', 'BaseSiteInformationController@infoUpdate');
Route::get('admin/base_site_information/delete/{id}', 'BaseSiteInformationController@remove');

/*
*BannerController
*/
Route::get('admin/banner', 'BannersController@getBanner');
Route::get('admin/add_banner', 'BannersController@addBanner');
Route::post('admin/banner/image/save', 'BannersController@create');
Route::get('admin/banner/delete/{id}/{types}', 'BannersController@remove');

// FeedbackController
Route::get('admin/feedback', 'FeedbackController@getFeedback'); 
Route::get('admin/add_feedback', 'FeedbackController@addFeedback');
Route::post('admin/add_feedback/save', 'FeedbackController@create');
Route::get('admin/feedbacks/update/{id}', 'FeedbackController@updatePage');
Route::post('admin/add_feedback/update', 'FeedbackController@feedbackUpdate');
Route::get('admin/feedbacks/delete/{id}', 'FeedbackController@remove');

// NewsController
Route::get('admin/news', 'NewsController@getNews'); 
Route::get('admin/add_news', 'NewsController@addNews');
Route::post('admin/add_news/save', 'NewsController@create');
Route::get('admin/news/update/{id}', 'NewsController@updatePage');
Route::post('admin/add_news/update', 'NewsController@newsUpdate');
Route::get('admin/news/delete/{id}', 'NewsController@remove');



// TeamController
Route::get('admin/team', 'TeamsController@getTeam'); 
Route::get('admin/add_team', 'TeamsController@addTeam');
Route::post('admin/add_team/save', 'TeamsController@create');
Route::get('admin/teams/update/{id}', 'TeamsController@updatePage');
Route::post('admin/add_teams/update', 'TeamsController@teamUpdate');
Route::get('admin/teams/delete/{id}', 'TeamsController@remove');

// PriceController
Route::get('admin/price', 'PriceController@getPrice'); 
Route::get('admin/add_prices', 'PriceController@addPrice');
Route::post('admin/add_prices/save', 'PriceController@create');
Route::get('admin/prices/update/{id}', 'PriceController@updatePage');
Route::post('admin/add_prices/update', 'PriceController@priceUpdate');
Route::get('admin/prices/delete/{id}', 'PriceController@remove');

// PriceController
Route::get('admin/faq', 'FaqController@getFaqs'); 
Route::get('admin/add_faq', 'FaqController@addFaq');
Route::post('admin/add_faq/save', 'FaqController@create');
Route::get('admin/faq/delete/{id}', 'FaqController@remove');

Route::get('setlocale/{lang}', function ($locale) {
    App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
}
);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
