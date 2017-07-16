<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    public function index()
    {
    	return view('video');
    }

    public function store(Request $request)
    {
    	$rules = [
           'title' => 'required|unique:videos',
           'content' => 'required',
           'video' => 'required|mimes:mkv,mp3'
    	];
    	$this->validate($request, $rules);

    	/*$data = $request->all();
    	if($request->hasFile('video')) {
    		$file = $request->file('video');
    		$name = $file->getClientOriginalName();
    		$data['video'] = $name;
    		$destination = public_path('videos');
    		$request->->move($destination, $name);
    	}*/
        if($request->hasFile('video')) {
        	$videos = time().'.'.$request->file('video')->getClientOriginalName();
            $request->file('video')->move(public_path('videos'), $videos);
        }
        $video = new Video();
        $video->title = $request->input('title');
        $video->content = $request->input('content');
        $video->video = $videos;
        $video->slug = str_slug($request->input('title'));

        $video->save();
    	
    	return redirect()->route('video.index')->with('success', 'Uploaded video successfully!');
    }
}
