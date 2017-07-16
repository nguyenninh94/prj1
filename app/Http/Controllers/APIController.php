<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use JWTAuth;
use App\User;
use Image;

class APIController extends Controller
{
    public function register(Request $request)
    {
    	$input = $request->all();
    	$input['password'] = Hash::make($input['password']);
    	User::create($input);
    	return response()->json(['result' => true]);
    }

    public function login(Request $request)
    {
    	$input = $request->all();
    	if (!$token = JWTAuth::attempt($input)) {
    		return response()->json(['result' => $token]);
    	}
    }

    public function get_user_details(Request $request)
    {
    	$input = $request->all();
    	$user = JWTAuth::touser($input['token']);
    	return response()->json(['result' => $user]);
    }

    public function resizeImage()
    {
        return view('resizeImage');
    }

    public function resizeImagePost(Request $request)
    {
        $this->validate($request, [
           'title' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $image = $request->file('image');
        $input['imagename'] = time() .'.'. $image->getClientOriginalExtension();

        $destinationPath = public_path('/thumbnail');
        $img = Image::make($image->getRealPath());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath,'/'.$input['imagename']);

        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);

        $this->postImage->add($input);

        return back()
                ->with('success', 'Image uploaded successfully!')
                ->with('imageName', $input['imagename']);
    }

    public function dropzone()
    {
        return view('dropzone-view');
    }

    /**
     * Image Upload Code
     *
     * @return void
     */
    public function dropzoneStore(Request $request)
    {
        $image = $request->file('file');
        $imageName = time().$image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);
        return response()->json(['success'=>$imageName]);
    }
}
