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

Auth::routes();
Route::group(['middleware' => ['auth']], function () {

    Route::get('/index', 'PostContorller@index')->name('index');
    Route::get('create', 'PostContorller@post')->name('create.post');
    Route::get('/posts', 'PostContorller@posts')->name('post');
    Route::get('/post/delete/{id}', 'PostContorller@delete')->name('post.delete');
    Route::get('/post/edit/{id}', 'PostContorller@edit')->name('post.edit');
    Route::post('/post/update/{id}', 'PostContorller@update')->name('post.update');

    
    Route::get('tag', 'TagsController@create')->name('tag.create');
    Route::post('createTag', 'TagsController@store')->name('tag.store');

    
    Route::get('/tags', 'TagsController@index')->name('tags');
    Route::get('/tags/delete/{id}', 'TagsController@destroy')->name('tag.delete');
    Route::get('/tags/edit/{id}', 'TagsController@edit')->name('tag.edit');
    Route::post('/tags/update/{id}', 'TagsController@update')->name('tag.update');
   
    // Route::get('/test', function(){
    //     return App\User::find(1)->profile;
    // });
    Route::get('/users', 'UserController@index')->name('users');
    Route::get('/user', 'UserController@create')->name('user.create');
    Route::post('/createUser', 'UserController@store')->name('user.store');
    Route::get('/user/delete/{id}', 'UserController@destroy')->name('user.delete');
    Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
   
    Route::get('/make/admin/{id}', 'UserController@makeAdmin')->name('make.admin')->middleware('admin');
    Route::get('/remove/admin/{id}', 'UserController@removeAdmin')->name('remove.admin');


    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::post('/profile/update/{id}', 'ProfileController@update')->name('profile.update');

    Route::get('/settings', 'SettingController@index')->name('settings')->middleware('admin');
    Route::post('/settings/update', 'SettingController@update')->name('settings.update');

    







});


Route::get('category', 'ControlCategory@create')->name('category.create');

Route::Post('save', 'ControlCategory@store')->name('category.store');

Route::get('viewCategory', 'ControlCategory@index')->name('category.index');

Route::get('category/edit/{id}', 'ControlCategory@edit')->name('category.edit');

Route::get('category/delete/{id}', 'ControlCategory@destroy')->name('category.delete');

Route::Post('category/update/{id}', 'ControlCategory@update')->name('category.update');





Route::post('Create', 'PostContorller@create')->name('form.create');




Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');


