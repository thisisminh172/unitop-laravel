<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    //
    function add(){
        return "admin: thêm bài viết";
    }

    function show(){
        return view('admin.post.show');
    } 
    function update($id){
        return "cap nhat bai viet id: {$id}";
    }
    function delete($id){
        return "xoa bai viet id: {$id}";

    }
}
