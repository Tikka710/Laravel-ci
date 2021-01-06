<?php
Auth::routes();
Route::prefix('login')->name('login.')->group(function () {
    Route::get('/{provider}', 'Auth\LoginController@redirectToProvider')->name('{provider}');
    Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('{provider}.callback');
});

Route::get('/about','AboutContoroller@about')->name('articles.about');

Route::prefix('register')->name('register.')->group(function () {
    Route::get('/{provider}', 'Auth\RegisterController@showProviderUserRegistrationForm')->name('{provider}');
    Route::post('/{provider}', 'Auth\RegisterController@registerProviderUser')->name('{provider}');
});

Route::get('/', 'ArticleController@index')->name('articles.index');
Route::get('/search','SearchController@search')->name('articles.search');

Route::resource('/articles', 'ArticleController')->except(['index', 'show'])->middleware('auth');
Route::resource('/articles', 'ArticleController')->only(['show']);

Route::prefix('articles')->name('articles.')->group(function () {
    Route::put('/{article}/like', 'ArticleController@like')->name('like')->middleware('auth');
    Route::delete('/{article}/like', 'ArticleController@unlike')->name('unlike')->middleware('auth');
});
Route::get('/tags', 'TagController@index')->name('tags.index');
Route::get('/tags/{name}', 'TagController@show')->name('tags.show');


# ユーザー関係
Route::prefix('users')->name('users.')->group(function(){
  Route::get('/{name}', 'UserController@show')->name('show');
 
  Route::get('/{name}/likes', 'UserController@likes')->name('likes');
  Route::get('/{name}/followings', 'UserController@followings')->name('followings');
  Route::get('/{name}/followers', 'UserController@followers')->name('followers');

# ログイン状態での機能
Route::middleware('auth')->group(function () {
  Route::put('/{name}/follow', 'UserController@follow')->name('follow');
  Route::delete('/{name}/follow', 'UserController@unfollow')->name('unfollow');
    });
});

Route::resource('/comments', 'CommentController')->only(['store']);



