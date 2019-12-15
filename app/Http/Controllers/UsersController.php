<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Image;

class UsersController extends Controller
{
    protected function getAllUsers(){
    	$users = \App\Models\User::where('id', '!=' , 1)->get();
    	return view('user.home',compact('users'));
    }

    function getAddUser(){
    	return view('user.add_user');
    }

    function postAddUser(Request $request){
    	// Form validation
        $request->validate([
            'name'              =>  'required|min:2|max:20',
            'surname'              =>  'required|min:2|max:20',
            'rating'              =>  'required|regex:/^\d+(\.\d{1,2})?$/',
            'email'              =>  'required|email|unique:users,email',
            'password'              =>  'required',
            'picture'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $user = new User();

        //upload image
        if ($request->hasFile('picture')) {
	        $image = $request->file('picture');
	        $name = time().'.'.$image->getClientOriginalExtension();
	        $destinationPath = public_path('/thumbnail');
	        $resize_image = Image::make($image->getRealPath());

	        $resize_image->resize(150, 150, function($constraint){
      			$constraint->aspectRatio();
     		})->save($destinationPath . '/' . $name);

     		$destinationPath = public_path('/images');

     		$image->move($destinationPath, $name);
    	}

        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');
        $user->password = \Hash::make($request->password);
        $user->rating = $request->input('rating');
        $user->last_login = date('Y-m-d H:i:s');
        $user->picture = $name;
        $user->save();
        return redirect('home');
    }

    function viewUser($id){
    	$user = User::findOrFail($id);
    	return view('user.view_user',compact('user'));
    }
}
