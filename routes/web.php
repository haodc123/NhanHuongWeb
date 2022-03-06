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

Route::group(['middleware' => 'locale'], function() {
    Route::get('change-language/{language}', 'HomeController@changeLanguage')->name('changeLanguage');    

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('home', function() {
        return redirect()->route('home');
    });
    Route::get('blogs/blogs', 'BlogsController@index')->name('blogs.list');
    Route::get('blogs/detail', 'BlogsController@show')->name('blogs.show');

    Route::get('sale/member', function () {
        return view('sale.member');
    });
    Route::get('sale/saleoff', function () {
        return view('sale.saleoff');
    });
    Route::get('sale/list', function () {
        return view('sale.list');
    });
    Route::post('/order', 'OrdersController@save_order');
    Route::get('/next', 'HomeController@next')->name('next');

    // --------- For Control area (admin) ----------
    Route::group(['middleware'=>['auth', 'role:1'], 'prefix' => 'control'], function() {
        Route::get('/', function() {
            return redirect()->route('ctrOrderList');
        });
        Route::get('orders', 'OrdersController@ctr_list_orders')->name('ctrOrderList');
        Route::post('update_order', 'OrdersController@update_order');    
        Route::get('filter_orders', 'OrdersController@ctr_filter_orders')->name('ctrOrderFilter');

        Route::get('users', 'UsersController@ctr_list_users')->name('ctrUserList');
        Route::post('update_user', 'UsersController@update_user');
    });

    // --------- For Editor area (editor) -----------
    // Use React
    Route::group(['middleware'=>['auth', 'role:2'], 'prefix' => 'edit'], function() {
        Route::get('/', function() {
            return view('edit.index');
        })->name('edit');
        Route::get('blogs', function() {
            return view('edit.index')->with('type', "blogs");
        })->name('edtBlogPost');
        Route::get('blog/form', function() {
            return view('edit.index')->with('type', "blogs");
        });
        Route::get('blogcats', function() {
            return view('edit.index')->with('type', "blogcats");
        })->name('edtBlogCat');
        Route::get('sales', function() {
            return view('edit.index')->with('type', "sales");
        })->name('edtSale');;
        // JSON returned
        // Blocats
        Route::get('get_blogcats', 'BlogsController@edt_get_blogcats');
        Route::post('del_blogcat', 'BlogsController@edt_del_blogcat');
        Route::post('update_blogcat', 'BlogsController@edt_update_blogcat');
        // Blogs
        Route::get('get_blogs', 'BlogsController@edt_get_blogs');
        Route::post('del_blog', 'BlogsController@edt_del_blog');
        Route::post('update_blog', 'BlogsController@edt_update_blog');
        Route::get('filter_blogs', 'BlogsController@edt_filter_blogs')->name('edtBlogFilter');
    });
});

Auth::routes();

