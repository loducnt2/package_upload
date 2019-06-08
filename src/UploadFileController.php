<?php

namespace Duc\Upload;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\File;
use App\Product;
use Illuminate\Support\Facades\Input;

class UploadFileController extends Controller
{
    public function list()
  	{
    	$products = Product::all();
    	return view('UploadFile::demoupload')->with('products', $products);
  	}

  	public function getCreate(){
    	return view('UploadFile::create');
  	}

  	public function postCreate(Request $request){
    	$product = new Product();
		$product->name = $request->name;
		
		//if($request->input('avatar')){
		if($request->hasFile("avatar")){
		//if(Request::input("avatar")){
		//if(Input::hasFile("avatar")){

			$fileAnh = $request->file('avatar');

			$duoi = $fileAnh->getClientOriginalExtension();
			if($duoi != 'jpg' && $duoi != 'JPG' && $duoi != 'png' && $duoi != 'PNG' && $duoi != 'jpeg' && $duoi != 'JPEG'){
				return redirect('product/create')->with('loi', 'Ảnh không hợp lệ');
			}

			$name = $fileAnh->getClientOriginalName();
			$newName = str_random(5)."_".$name;
			while(file_exists("upload/product".$newName)){
				$newName = str_random(5)."_".$name;
			}

			$fileAnh->move("upload/product", $newName);
			$product->avatar = $newName;
		}else{
			$product->avatar = "no-image.png";
		}

		$product->save();
		return redirect('product/list')->with('notify', 'Thêm mới thành công!');
  	}

  	
}
