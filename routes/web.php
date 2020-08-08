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

Route::get('/', function () {
    return view('welcome');
});

##67 (bài tập)
Route::get('/post/index', function(){
    return view('post.index');
});
Route::view('/post/create','post.create');
Route::get('/post/update/{id}',function($id){
    return view('post.update',['id'=>$id]);
});

##68 (giải bt)
// Route::get('/post/create','post.create');





## 63 64 65 66
// Route::get('child',function(){
//     return view('child',['data'=>'<b>Le MInh</b>']);
// });
// Route::get('child',function(){
//     return view('child',['data'=>5,'post_title'=>'Khóa học laravel pro']);
// });
// Route::get('demo',function(){
//     return view('demo');
// });

##(62)
// Route::get('demo',function(){
//     $users = array(
//         1=>array(
//             'name'=>'Lê Minh'
//         ),
//         2=>array(
//             'name'=>'Đỗ Thị Quỳnh Nga'
//         ),
//         3=>array(
//             'name'=>'Đỗ Thị Quỳnh Nga'
//         )
//     );
    
//     return view('demo',compact('users'));
// });

// Route::get('post/index','PostController@index');

###(51)
// Route::get('admin/post/add','AdminPostController@add');
// Route::get('admin/post/show','AdminPostController@show');
// Route::get('admin/post/update/{id}','AdminPostController@update');
// Route::get('admin/post/delete/{id}','AdminPostController@delete');

##(48)
// Route::resource('post','PostController');


// ###gọi controller từ route
// Route::get('/product/show/{id}','ProductController@show');
// Route::get('/product/create','ProductController@create');
// Route::get('/product/update/{id}','ProductController@update');

// #####Bài tập routing
// Route::get('admin/post/add',function(){
//     return 'them bai viet';
// });
// Route::get('admin/post/show',function(){
//     return 'danh sach bai viet';
// });
// Route::get('admin/post/update/{id}',function($id){
//     return 'cap nhat bai viet '.$id;
// });
// Route::get('admin/post/delete/{id}',function(){
//     return 'xoa bai viet';
// });
// #####định tuyến đến controller(40)
// Route::get('/post/{id}','PostController@detail');

// ########định tuyến đến 1 view(39)
// Route::view('/welcome','welcome');
// //Route::view('/post','post',['id'=>20]);

// #######định tuyến với tham số ràng buộc regular expression(38)
// // Route::get('/product/{id}',function($id){
// //     return $id;
// // })->where('id','[0-9]+'); 

// Route::get('product/{slug}/{id}',function($slug, $id){
//     return $id . '-' . $slug;
// })->where(['slug'=>'[A-Za-z0-9-_]+']);


// #######định tuyến theo tham số tùy chọn(37)
// //hiển thị ra danh sách users
// //có thông số hoặc không
// Route::get('/users/{id?}',function($id=0){
//     return $id;
// });

// ######Đặt tên cho route (36)
// Route::get('/users/profile', function () {
//     return route('profile');
// })->name('profile');

// ######Định nghĩa Route co tham số (35)
// Route::get('/posts/{id?}', function ($id) {
//     return $id;
// })->name('userid');
// Route::get('/posts/{cat_id}/page/{page}', function ($cat_id, $page) {
//     return $cat_id . '-' . $page;
// });

######định tuyến cơ bản (34)
// Route::get('post', function () {
//     return "Đây là trang sản phẩm";
// });
// Route::get('/admin/product', function () {
//     return "Trang quản lý sản phẩm";
// });
// Route::get('/admin/product/add', function () {
//     return "Thêm sản phẩm" . route('product.add');
// })->name('product.add');
