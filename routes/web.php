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
Route::get('about', function () {
    return view('other.about');
})->name('other.about');

Route::get('/', [
    'uses' => 'PostController@getIndex',
    'as' => 'blog.index'
]);

Route::get('post/{id}', [
    'uses' => 'PostController@getLikePost',
    'as' => 'blog.post.like'
]);

Route::get('post/{id}/like', [
    'uses' => 'PostController@getPost',
    'as' => 'blog.post'
]);

Route::group(['prefix' => 'admin'], function() {
    Route::get('', [
        'uses' => 'PostController@getAdminIndex',
        'as' => 'admin.index'
    ]);

    Route::get('create', [
        'uses' => 'PostController@getAdminCreate',
        'as' => 'admin.create'
    ]);

    Route::Post('create', [
        'uses' => 'PostController@postAdminCreate',
        'as' => 'admin.create'
    ]);

    Route::Get('edit/{id}', [
        'uses' => 'PostController@getAdminEdit',
        'as' => 'admin.edit'
    ]);
    
    Route::Post('edit', [
        'uses' => 'PostController@postAdminUpdate',
        'as' => 'admin.update'
    ]);

    Route::Get('delete/{id}', [
        'uses' => 'PostController@getAdminDelete',
        'as' => 'admin.delete'
    ]);
});
/*

Route::get('/', function () {
    return view('blog.index');
})->name('blog.index');

Route::get('post/{id}', function ($id) {
	if($id == 1)
	{
		$post = [
				'title' => 'Learning Laravel',
				'content' => 'This blog post will get you right on track with Laravel'
		];
	}else{
		$post = [
						'title' => 'Something else',
						'content' => 'Some other content'
				];
	}
    return view('blog.post', ['post' => $post]);
})->name('blog.post');

Route::get('about', function () {
    return view('other.about');
})->name('other.about');

Route::group(['prefix' => 'admin'], function() {
    Route::get('', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::get('create', function () { 
    	return view('admin.create');
    })->name('admin.create');

    Route::post('create', function(\Illuminate\Http\Request $request, \Illuminate\Validation\Factory $validator) {

    	$validation = $validator->make($request->all(),[
    		'title' => 'required|min:5',
    		'content' => 'required|min:10'
    	]);

    	if($validation->fails())
    		return redirect()->back()->withErrors($validation);

      return redirect()
        ->route('admin.index')
        ->with('info','Post created, Title ' . $request->input('title'));
    })->name('admin.create');

    Route::get('edit/{id}', function ($id) {
		   if($id == 1)
			{
				$post = [
						'title' => 'Learning Laravel',
						'content' => 'This blog post will get you right on track with Laravel'
				];
			}else{
				$post = [
								'title' => 'Something else',
								'content' => 'Some other content'
						];
			}
        return view('admin.edit', ['post' => $post]);
    })->name('admin.edit');

    Route::post('edit', function(\Illuminate\Http\Request $request, \Illuminate\Validation\Factory $validator) {

    	$validation = $validator->make($request->all(),[
    		'title' => 'required|min:5',
    		'content' => 'required|min:10'
    	]);

    	if($validation->fails())
    		return redirect()->back()->withErrors($validation);

      return redirect()
        ->route('admin.index')
        ->with('info','Post editted, new Title ' . $request->input('title'));
    })->name('admin.update');
});

*/

/*
Route::get('/', function () {
    return view('blog.index');
})->name('blog.index');

Route::get('post/{id}', function () {
    return view('blog.post');
})->name('blog.post');

Route::get('about', function () {
    return view('other.about');
})->name('other.about');

Route::get('admin/create', function () {
    return view('admin.create');
})->name('admin.create');

Route::post('admin/create', function(){
	return "It works!";
})->name('admin.create');

Route::get('admin', function () {
    return view('admin.index');
})->name('admin.index');

Route::get('admin/edit/{id}', function () {
    return view('admin.edit');
})->name('admin.edit');

Route::post('admin/update', function () {
    return view('admin.update');
})->name('admin.update');

*/

Auth::routes();

Route::post('login', [
    'uses' => "SigninController@signin",
    'as' => 'auth.signin'
]);
