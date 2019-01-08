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

Route::get('/', function () {
    return view('index');
});
Route::get('/site/about',function(){
    return view('about');

});
Route::get('/contribution',function(){
    return view('contribution');

});
Route::get('/blog',function(){
    return view('blog');

});
Route::get('/site/terms-and-conditions',function(){
    return view('terms');

});
Route::get('/contribute/submission',function(){
    return view('submission');

});

Route::get('/site/privacy-policy',function(){
    return view('privacy');

});
Route::get('/fiction/workshop-of-a-rape-story',function(){
    return view('poetry');

});
Route::get('/artist-profiles/cacia-zoo',function(){
    return view('cacia');

});
Route::get('/fiction/flowers-in-the-field',function(){
    return view('flowers');

});
Route::get('/poetry/reflective-thought-wave',function(){
    return view('reflective');

});

Route::get('/poetry/poems-by-jan-dalisay',function(){
    return view('poems');

});
Route::get('/fiction/the-pure-souls',function(){
    return view('souls');

});

Route::get('/subscribe/index',function(){
    return view('subscribe');

});
Route::get('/artist-profiles/jan-sunday',function(){
    return view('jansunday');

});
Route::get('/artist-profiles/don-manchas-purgatory',function(){
    return view('manchas');

});
Route::get('/poetry/right-words',function(){
    return view('rightwords');

});
Route::get('/artist-profiles/intel-japitana',function(){
    return view('japitana');

});
Route::get('/downloads',function(){
    return view('issue');

});

Route::get('/upload', 'HomeController@getDownload');



