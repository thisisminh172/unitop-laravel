<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function show($id){
        $price = 3300000;
        $colors = ['red','green'];
        // return "Thông tin sản phẩm có id: ".$id;
        // return view('product.show',array('id'=>$id, 'price'=>$price));
        return view('product.show',compact('id','price','colors'));
    }

    function create(){
        // return "Thêm sản phẩm mới";
        return view('product.create');

    }

    function update($id){
        return "update sản phẩm có id: ".$id;
    }
}
