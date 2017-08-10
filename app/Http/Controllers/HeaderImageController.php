<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\HeaderImage;
use Illuminate\Support\Facades\Input;


class HeaderImageController extends Controller
{
	public function __construct(){
        $this->middleware('auth');
    }
    public function getImage(){
    	return view('admin.header_image.view');
    }

    public function postAddImage(Request $request){
    	$header_image = new HeaderImage;
    	if($request->hasFile('file_name')){
            $file = $request->file_name;
            $file->move(public_path().'/assets/images/header/',$file->getClientOriginalName());
            $header_image->name = $file->getClientOriginalName();
        }
    	//$header_image->name = $request->file_name;
    	$header_image->caption = Input::get('caption');
    	 $header_image->save();
		return redirect()->route('view_header_image');
    }
}
