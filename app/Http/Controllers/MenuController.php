<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    // function to view the menu page
    public function getIndex(){
    	$menu = Menu::all();
    	return view('admin.menu.view',['menus'=>$menu]);
    }
    // function to add the menu
    public function postAddMenu(Request $request){
    	$menu = new Menu;
    	$menu->title = Input::get('title');
    	$menu->description = Input::get('description');
    	$menu->save();
    	return redirect()->route('view_menu');
    }
    // function to edit the menu
    public function editMenu(Request $request){
    	$id = Input::get('menu_id');
    	$title = Input::get('title');
    	$description = Input::get('description');
    	$menu = new Menu;
    	$menu::where('id',$id)
    		->update([
    			'title' => $title,
    			'description' =>$description
    			]);
    	return redirect()->route('view_menu');
    }
    // function to delete the menu
    public function deleteMenu($id){
    	$menu = new Menu;
    	$menu::where('id', $id)->delete();
    	return redirect()->route('view_menu');
    }
}
